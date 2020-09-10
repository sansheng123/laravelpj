@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Order Detail</h1>
			</div>
			</div>
			
			<div class="container">
			<div class="row">
			<div class="col-md-12">
			<table  class="table table-bordered">
				<thead>
					<tr>
						<td>VoucherNo:</td>
				        <td>OrderDate:</td>
				        
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{$order->voucherno}}</td>
						<td>{{$order->orderdate}}</td>
					</tr>
				</tbody>
			</table>
			</div>
			</div>
			</div>

			<div class="container">
			<div class="row">
			<div class="col-md-12">
			<table  class="table table-bordered">
				<thead>
					<tr>
						<td>No</td>
				        <td>ItemName</td>
				        <td>Brand</td>
				        <td>Price</td>
				        <td>Qty</td>
				        <td>Subtotal</td>
					</tr>
				</thead>
				<tbody>
					@php
					$i=1;$total=0;$Subtotal=0;
					@endphp

					@foreach($order->items as $orderitems)
					@php
					$subtotal=$orderitems->price*$orderitems->pivot->qty;
					$total+=$subtotal;
					@endphp
					<tr>
						<td>{{$i++}}</td>
						<td>{{$orderitems->name}}</td>
						<td>{{$orderitems->brand->name}}</td>
						<td>{{$orderitems->price}}</td>
						<td>{{$orderitems->pivot->qty}}</td>
						<td>{{$subtotal}}MMk</td>
					</tr>
					@endforeach
					<tr>
						<td colspan="5" class="text-right">Total</td>
						<td>{{$total}}</td>
					</tr>
				</tbody>
			</table>
			</div>
			</div>
			</div>
				
				
		
	</div>
@endsection
                