@extends('layouts.app')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Penjualan</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('cari-penjualan')}}" method="GET" class="mb-2">
                                <div class="form-group">
                                    <label for="">ID Product</label>
                                    <input type="number" name="no_penjualan" class="form-control" id="nomorpenjualan">
                                </div>
                                <button type="submit" class="btn btn-outline-success">Cari Invoice</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="{{route('cari-laporan')}}" method="GET" class="mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="">Dari Tanggal</label>
                                            <input type="date" name="dari_tgl" class="form-control" id="nomorpenjualan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="">Sampai Tanggal</label>
                                            <input type="date" name="sampai_tgl" class="form-control" id="nomorpenjualan">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-outline-success">Cari Laporan</button>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nomor Penjualan</th>
                                <th>Nomor Invoice</th>
                                <th>Nama Customer</th>
                                <th>Nama Product</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penjualans as $penjualan)
                                <tr>
                                    <td>{{$penjualan->penjualan_id}}</td>
                                    <td>{{$penjualan->penjualan->invoice}}</td>
                                    <td>{{$penjualan->penjualan->customer_name}}</td>
                                    <td>{{$penjualan->product->nama_barang}}</td>
                                    <td>{{$penjualan->created_at->format('Y-m-d')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="py-2 px-2">
                        {{$penjualans->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection