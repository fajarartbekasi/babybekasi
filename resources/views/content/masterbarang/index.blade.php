@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Master Barang</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                    @endif
                    <div class="py-2 px-2">
                        <a href="{{route('master-barang.create')}}" class="btn btn-outline-success">Tambah Product Baru</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Buat Penjualan</th>
                                <th>Action</thead>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $getdata)
                                <tr>
                                    <td>{{ $getdata->nama_barang }}</td>
                                    <td>{{ $getdata->quantity }}</td>
                                    <td>Rp. {{ number_format($getdata->price, 2) }}</td>
                                    @if($getdata->quantity != 0)
                                    <td>
                                        <span class="badge badge-info">Ready Stock</span>
                                    </td>
                                    <td>
                                        <form action="{{route('master-barang.add-cart')}}" class="form-inline" method="POST">
                                            @csrf
                                            <div class="form-group mx-sm-3 mb-2">
                                                <input type="number" name="qty" id="sst" maxlength="12" title="Quantity:" class="form-control">
                                                <input type="hidden" name="product_id" value="{{ $getdata->id }}" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mb-2">tambah penjualan</button>
                                        </form>
                                    </td>
                                    @else
                                        <td>
                                            <span class="badge badge-danger">Stock Kosong</span>
                                        </td>
                                        <td>
                                            <div class="form-inline">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <input type="number" name="qty" id="sst" maxlength="12" title="Quantity:" class="form-control" disabled>
                                                    <input type="hidden" name="product_id" value="{{ $getdata->id }}" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-2" disabled>tambah penjualan</button>
                                            </div>
                                        </td>
                                    @endif

                                    <td>
                                        <form action="{{route('master-barang.delete',$getdata->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('master-barang.edit.product', $getdata->id)}}" class="btn btn-info"> Edit Product</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
