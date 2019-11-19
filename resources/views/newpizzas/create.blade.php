@extends('layouts.app')

@if (Auth::check())

@section('content')

<h1 style="margin-left: 100px;">Add Your New Pizza Name</h1><br/>

{{ Form::open(['route' => 'newpizzas.store', 'method' => 'post']) }}
    
  <div class="form-group mx-sm-3 mb-2">
    <label for="name">Pizza Name: </label>
    <input type="text" name="pizza_name" min="1" class="form-control" style="width: 500px;" required>
  </div>

<button type="submit" class="btn btn-primary mb-2" style="margin-left: 180px;">Add Pizza</button>


{{ Form::close() }}


@endsection

@endif