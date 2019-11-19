@extends('layouts.app')

@if (Auth::check())

@section('content')

<table class="table table-bordered">

	<tr>
		<th scope="col">ID</th>
		<th scope="col">Pizza Name</th>
	</tr>
	
	<tbody>

		<tr>
	 		<td>{{ $newpizza->id }}</td>
			<td>{{ $newpizza->pizza_name }}</td>

		</tr>


	</tbody>
</table>


@endsection

@endif