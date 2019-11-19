@extends('layouts.app')

@if (Auth::check())

@section('content')

  <table class="table table-bordered">

	<tr>
		<th scope="col">ID</th>
		<th scope="col">Pizza Flavor</th>
		<th scope="col">Pizza Size</th>
		<th scope="col">Pizza Numbers</th>
		<th scope="col">Customer Name</th>

		<th scope="col">Customer Address</th>
		<th scope="col">Customer Phone</th>
		<th scope="col">Order Delivery Status</th>
	</tr>
	
	<tbody>

		<tr>
	 		<td>{{ $order->id }}</td>
			<td>{{ $order->pizza_flavor }}</td>
			<td>{{ $order->pizza_size }}</td>
			<td>{{ $order->pizza_count }}</td>
			<td>{{ $order->customer_name }}</td>
			<td>{{ $order->customer_address }}</td>
			<td>{{ $order->customer_phone }}</td>
			<td>{{ $order->delivery_status }}</td>

		</tr>


	</tbody>
</table>


@endsection

@endif


