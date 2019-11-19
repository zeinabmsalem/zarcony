@extends('layouts.app')

@if (Auth::check())

@section('content')

<h1 style="margin-left: 100px;">Update Pizza Delivery Status</h1><br/>

{{ Form::open(['route' => ['orders.update', $order->id], 'method' => 'post']) }}

  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="flavor" value="{{ $order->pizza_flavor }}" class="form-control" style="width: 500px;" hidden>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="size" value="{{ $order->pizza_size }}" class="form-control" style="width: 500px;" hidden>
  </div>


  <div class="form-group mx-sm-3 mb-2">
    <input type="Number" name="pizza_num" value="{{ $order->pizza_count }}" class="form-control" style="width: 500px;" hidden>
  </div>


  <div class="form-group mx-sm-3 mb-2">
    <label>Order Delivery Status</label>

    <select name="delivery_status" class="form-control" style="width: 500px;">

      <option value="{{ $order->delivery_status }}">{{ $order->delivery_status }}</option>

      @if ($order->delivery_status=="Not Yet!")
        <option value="Done">Done</option>

      @else 
        <option value="Not Yet!">Not Yet!</option>

      @endif
      
    </select>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="cust_name" value="{{ $order->customer_name }}" class="form-control"  style="width: 500px;" hidden>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="cust_address" value="{{ $order->customer_address }}" class="form-control" style="width: 500px;" hidden>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="cust_phone" value="{{ $order->customer_phone }}" class="form-control" style="width: 500px;" hidden>
  </div>

  {{ Form::hidden('_method', 'PUT') }}


<button type="submit" class="btn btn-primary mb-2" style="margin-left: 180px;">Update Order</button>


{{ Form::close() }}


@endsection

@endif
