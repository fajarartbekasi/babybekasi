@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="row ">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="px-3 py-3 d-flex justify-content-between align-items-center">
                        <h1 class="text-info mr-3">
                            {{ $countProduct }}
                        </h1>
                        <h4>Total Barang</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="px-3 py-3 d-flex justify-content-between align-items-center">
                        <h1 class="text-info mr-3">
                            {{ $countPenjualan }}
                        </h1>
                        <h4>Total penjualan</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
