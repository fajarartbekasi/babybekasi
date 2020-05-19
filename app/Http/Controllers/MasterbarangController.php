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
}
