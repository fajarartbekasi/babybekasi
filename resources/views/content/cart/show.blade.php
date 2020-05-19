@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">List penjualan barang</li>
            </ol>
        </nav>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{route('master-barang.update-cart')}}" method="post">
                                @csrf
                                @forelse ($carts as $row)
                                    <tr>
                                        <td>{{ $row['nama_barang'] }}</td>
                                        <td><h5>Rp {{ number_format($row['price']) }}</h5></td>
                                        <td>
                                            <div class="product_count">
                                                    <input type="number" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty">
                                                    <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                                            </div>
                                            </td>
                                        <td>
                                            <h5>Rp {{ number_format($row['price'] * $row['qty']) }}</h5>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Tidak ada belanjaan</td>
                                    </tr>
                                @endforelse
                            </form>
                            <tr>
                                <td colspan="3">
                                    <h5 class="text-right">Subtotal</h5>
                                </td>
                                <td >
                                    <h5 class="">Rp {{ number_format($subtotal) }}</h5>
                                </td>
                            </tr>
                            <div class="float-right mb-2">
                                <a href="{{route('master-barang.index')}}" class="btn btn-primary">Tambah penjualan</a>
                                <a href="{{route('master-barang.proses-penjualan')}}" class="btn btn-info">Process penjualan</a>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection