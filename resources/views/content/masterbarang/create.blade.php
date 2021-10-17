@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah barang baru</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Silahkan input data produk baru.
                    </div>
                    <form action="{{route('master-barang.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama barang...."  id="nama_barang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" placeholder="2"  id="quantity">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="price" class="form-control" placeholder="50000"  id="harga">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="harga">image</label>
                                    <input type="file" name="image" class="form-control" >
                                </div>
                            </div>
                            <div class="py-2 px-3">
                                <button type="submit" class="btn btn-outline-primary">
                                    Tambah Produck Baru
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection