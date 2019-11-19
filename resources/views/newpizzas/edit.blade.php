@extends('layouts.app')

@if (Auth::check())

@section('content')

<h1 style="margin-left: 100px;">Update Pizza Name</h1><br/>

{{ Form::open(['route' => ['newpizzas.update', $newpizza->id], 'method' => 'post']) }}


  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pizza_name" value="{{ $newpizza->pizza_name }}" class="form-control"  style="width: 500px;">
  </div>


  {{ Form::hidden('_method', 'PUT') }}


<button type="submit" class="btn btn-primary mb-2" style="margin-left: 180px;">Update Pizza Name</button>


{{ Form::close() }}


@endsection

@endif