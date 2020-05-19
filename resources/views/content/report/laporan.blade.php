@extends('layouts.cetak')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="mb-3 border-bottom">
                        <h1 class="px-3 font-weigth-bold text-center">Laporan Penjualan</h1>
                        <h3 class="px-3 font-weigth-bold text-center">Baby Bekasi</h3>
                        <!-- <button type="submit" class="btn btn-outline-info btn-sm">Cetak</button> -->
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Invoice</th>
                                <th>Customer</th>
                                <th>Barang</th>
                                <th>Tanggal</th>
                                <th>Alamat</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($penjualans as $laporanpenjualan)
                                <tr>
                                    <td>{{$laporanpenjualan->penjualan->invoice}}</td>
                                    <td>{{$laporanpenjualan->penjualan->customer_name}}</td>
                                    <td>{{$laporanpenjualan->product->nama_barang}}</td>
                                    <td>{{$laporanpenjualan->created_at->format('Y-m-d')}}</td>
                                    <td>{{$laporanpenjualan->penjualan->customer_address}}</td>
                                    <td>Rp.{{number_format($laporanpenjualan->price, 2)}}</td>
                                    <td>{{$laporanpenjualan->qty}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <h3>Maaf laporan tidak ada</h3>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                        <tr>
                                <td colspan="6">
                                    <h5 class="text-right">Subtotal</h5>
                                </td>
                                <td >
                                    <h5 class="">Rp {{ number_format($subtotal) }}</h5>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection