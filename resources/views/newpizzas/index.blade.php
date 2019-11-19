@extends('layouts.app')

@if (Auth::check())

	@section('content')
	<h1 style="margin-left: 100px; margin-top: 50px;">Pizza</h1><br/>


  <div class="form-group mx-sm-3 mb-2">	<a href="/newpizzas/create"><button class="btn btn-primary" style="margin-left: 550px; width: 150px; height: 50px;">Add Pizza</button></a></div>



    <table class="table table-bordered">

	<tr>
		<th scope="col">ID</th>
		<th scope="col">Pizza Name</th>
		<th>Options</th>
	</tr>
	
	<tbody>
		

	 @foreach ($pizzas as $pizza)
		<tr>
	 		<td>{{ $pizza->id }}</td>
			<td>{{ $pizza->pizza_name }}</td>
			
			<td>
				
				<a href="/newpizzas/{{ $pizza->id }}">Show</a><br/>
				<a href="/newpizzas/{{ $pizza->id }}/edit">Edit</a><br/>
				<a href="/newpizzas/destroy/{{ $pizza->id }}">Delete</a>


			</td>
		</tr>

	 @endforeach


	</tbody>
</table>


@endsection

@endif





