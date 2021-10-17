@extends('layouts.index')

@section('content')

<div class="container">
    <div class="row">
        @forelse($products as $product)
        <div class="col-md-4 pt-3">
            <div class="card border-0">
                <div class="card-body">
                    <img src="{{ url('storage/'. $product->image) }}" class="card-img-top" alt="">
                    <div class="px-3 py-3">
                        <h5>{{$product->nama_barang}}</h5>
                        <h6>Stock. {{$product->quntity}}</h6>
                        <h6>Rp. {{$product->price}}</h6>
                    </div>
                </div>
                @auth
                    <div class="card-fotter">
                        <div class="px-3 py-3">
                            <form action="{{route('master-barang.add-cart')}}" class="form-inline" method="POST">
                                @csrf
                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="number" name="qty" id="sst" maxlength="12" title="Quantity:" class="form-control" placeholder="Jumlah Barang">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Buy</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
        @empty
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{asset('img/undraw_page_not_found_su7k.png')}}" alt="" srcset="">
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>

@endsection