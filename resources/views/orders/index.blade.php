<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
  </head>
  <body>


  	<h1 style="margin-left: 100px; margin-top: 50px;">Pizza Orders</h1><br/>

  	@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif

  <div class="form-group mx-sm-3 mb-2">	<a href="/orders/create"><button class="btn btn-primary" style="margin-left: 400px; width: 150px; height: 50px;">Add Order</button></a>
  </div>


<div class="form-group mx-sm-3 mb-2">

  <form action="/search" method="get">
		 <label for="size" style="margin-left: 700px;">Filter by Customer Name or Delivery Status</label>
<br/>
		        <input type="search" name="search" class="form-control" style="width: 250px; margin-left: 700px;" autofocus>
		      

		  		<button type="submit" class="btn btn-primary mb-2" hidden>Filter Order</button>
		</form>

</div>
    
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
		<th scope="col">Order Creation Time</th>
		<th>Options</th>
	</tr>
	
	<tbody>

	 @foreach ($orders as $order)
		<tr>
	 		<td>{{ $order->id }}</td>
			<td>{{ $order->pizza_flavor }}</td>
			<td>{{ $order->pizza_size }}</td>
			<td>{{ $order->pizza_count }}</td>
			<td>{{ $order->customer_name }}</td>
			<td>{{ $order->customer_address }}</td>
			<td>{{ $order->customer_phone }}</td>
			<td>{{ $order->delivery_status }}</td>
			<td>{{ $order->created_at }}</td>
			
			<td>
				
				<a href="/orders/{{ $order->id }}">Show</a><br/>
				<a href="/orders/{{ $order->id }}/edit">Update</a><br/>
				<a href="/orders/destroy/{{ $order->id }}">Delete</a>


			</td>
		</tr>

	 @endforeach


	</tbody>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="/assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>

