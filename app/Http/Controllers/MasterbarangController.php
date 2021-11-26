<?php

namespace App\Http\Controllers;

use Cookie;
use Closure;
use DB;
use App\Product;
use App\Penjualan;
use App\OrderDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MasterbarangController extends Controller
{
     public function __construct()
    {
        return $this->middleware('auth');
    }
    private function getCarts(){
        $carts = json_decode(request()->cookie('babybekasi'), true);
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }
    public function index()
    {
        $products = Product::paginate(5);
        return view('content.masterbarang.index', compact('products'));
    }
    public function create()
    {
        return view('content.masterbarang.create');

    }
    public function store()
    {
       $barang = Product::create($this->validateRequest());

       $this->storeImage($barang);

        flash()->success('file berhasi ditambahkan');

        return redirect()->back();
    }
    public function edit($id)
    {
        $product = Product::find($id);

        return view('content.masterbarang.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();

        $product->nama_barang = $request->input('nama_barang');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');

        $product->save();

        flash()->success('data barang berhasil di rubah');

        return redirect()->back();
    }
    public function addTocart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer'
        ]);

        $carts = $this->getCarts();
        if ($carts && array_key_exists($request->product_id, $carts)) {
            $carts[$request->product_id]['qty'] += $request->qty;
        } else {
            $product = Product::find($request->product_id);
            $carts[$request->product_id] = [
                'qty' => $request->qty,
                'product_id' => $product->id,
                'nama_barang' => $product->nama_barang,
                'price' => $product->price,
            ];
        }

        $cookie = cookie('babybekasi', json_encode($carts), 2880);
        return redirect()->back()->with(['success' => 'Produk Ditambahkan ke Keranjang'])->cookie($cookie);
    }
    public function listcart()
    {
        $carts = $this->getCarts();
        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['price'];
        });
        return view('content.cart.show', compact('carts', 'subtotal'));
    }

    public function updateCart(Request $request)
    {
        $carts = $this->getCarts();
        foreach ($request->product_id as $key => $row) {
            if ($request->qty[$key] == 0) {
                unset($carts[$row]);
            } else {
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        $cookie = cookie('babybekasi', json_encode($carts), 2880);
        return redirect()->back()->cookie($cookie);
    }
    public function checkout()
    {
        $carts = $this->getCarts();
        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['price'];
        });
        return view('content.cart.checkout.create', compact('carts', 'subtotal'));
    }
    public function prosesCheckout(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required|string|max:100',
            'customer_address' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $affiliate = json_encode(request()->cookie('babybekasi'), true);

            $explodeAffiliate = explode('-', $affiliate);

            $carts = $this->getCarts();
            $subtotal = collect($carts)->sum(function($q) {
                return $q['qty'] * $q['price'];
            });

            $order = Penjualan::create([
                'invoice' => Str::random(4) . '-' . time(),
                'customer_name' => $request->customer_name,
                'customer_address' => $request->customer_address,
                'subtotal' => $subtotal,
            ]);

            foreach ($carts as $row) {
                $product = Product::find($row['product_id'])->decrement('quantity',$row['qty']);

               OrderDetail::create([
                    'penjualan_id' => $order->id,
                    'product_id' => $row['product_id'],
                    'price' => $row['price'],
                    'qty' => $row['qty'],
                ]);
            }

            DB::commit();

            $carts = [];
            $cookie = cookie('babybekasi', json_encode($carts), 2880);
            Cookie::queue(Cookie::forget('babybekasi'));

            return redirect(route('master-barang.checkout', $order->invoice))->cookie($cookie);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
     public function checkoutFinish($invoice)
    {
        $order = Penjualan::where('invoice', $invoice)->first();
    return view('content.cart.checkout.checkout_finish', compact('order'));
    }

    private function validateRequest(){
        return tap(request()->validate([
            'nama_barang'   => 'required',
            'quantity'       => 'required',
            'price'       => 'required',
            'image'       => 'required|mimes:jpeg,jpg,png|max:5000',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image'    => 'required|mimes:jpeg,jpg,png|max:5000',
                ]);
            }
        });
    }

    private function storeImage($barang){
        if(request()->has('image')){
            $barang->update([
                'image'  => request()->image->store('uploads','public'),
            ]);

            $image = Image::make(public_path('storage/'. $barang->image))->fit(300,300, null, 'top-left');
            $image->save();
        }
    }
    public function destroy(Product $produck, $id)
    {
        $produck = Product::findOrFail($id);
        $produck->delete();

        if (\File::exists(public_path('storage/' . $produck->image))) {
            \File::delete(public_path('storage/' . $produck->image));
        }
        flash('Produk telah dihapus');
        return redirect()->back();
    }

}
