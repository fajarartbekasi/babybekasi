<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use App\Product;
use App\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
         $penjualans = OrderDetail::with('product','penjualan')->paginate(6);

         return view('content.penjualan.index', compact('penjualans'));
    }


}
