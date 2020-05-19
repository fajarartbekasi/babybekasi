<?php

namespace App\Http\Controllers;

use PDF;
use App\Product;
use Carbon\Carbon;
use App\Penjualan;
use App\OrderDetail;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show(Request $request)
    {

        $penjualans = OrderDetail::where('penjualan_id', [request('no_penjualan')])->get();

        $subtotal = collect($penjualans)->sum(function($q) {
                return $q['qty'] * $q['price'];
            });

        $pdf = PDF::loadView('content.report.laporan', compact('penjualans', 'subtotal'))->setPaper('a4', 'landscape');

        return $pdf->stream('laporan_pengajuan.pdf');
    }
    public function periode(Request $request)
    {

        $startDate = Carbon::parse(request('dari_tgl'))->startOfDay();

        $endDate = Carbon::parse(request('sampai_tgl'))->endOfDay();

        $penjualans = OrderDetail::whereBetween('created_at', [$startDate, $endDate])->get();

        $subtotal = collect($penjualans)->sum(function($q) {
                return $q['qty'] * $q['price'];
            });
        $pdf = PDF::loadView('content.report.periode', compact('penjualans', 'subtotal'))->setPaper('a4', 'landscape');

        return $pdf->stream('laporan_pengajuan.pdf');
    }
}
