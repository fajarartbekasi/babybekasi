@extends('layouts.app')

@section('content')
<div class="container">
	<h3 class="title_confirmation">Terima kasih, penjualan telah ditambahkan.</h3>
	<div class="card border-0 shadow-sm">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<ul class="list-group">
						<li class="list-group-item border-0">
							<span>Invoice</span> : {{ $order->invoice }}
						</li>
						<li class="list-group-item border-0">
							<span>Tanggal</span> : {{ $order->created_at }}
						</li>
						<li class="list-group-item border-0">
							<span>Subtotal</span> : Rp {{ number_format($order->subtotal) }}
						</li>

						<li class="list-group-item border-0">
							<span>Total</span> : Rp {{ number_format($order->subtotal) }}
						</li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						<li class="list-group-item border-0">
							<span>Alamat</span> : {{ $order->customer_address }}</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection