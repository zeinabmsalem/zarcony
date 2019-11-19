@extends('layouts.app')

@if (Auth::check())

@section('content')


  <h1 style="margin-left: 100px;">Make Your Pizza Order</h1><br/>



{{ Form::open(['route' => 'orders.store', 'method' => 'post']) }}


  <div class="form-group mx-sm-3 mb-2">
    <label for="falvor">Piza Flavor</label>

    <select class="form-control" name="flavor" style="width: 500px;" required id="flavor">

      <option disabled selected value> -- --- -- -- -- -- </option>

       @foreach ($pizzas as $pizza)

              <option value="{{ $pizza->pizza_name }}">{{ $pizza->pizza_name }}</option>

       @endforeach
    </select>
  </div>

  @foreach ($orders as $order)

      <input type="text" id="old_flavor" name="old_flavor" value={{ $order->pizza_flavor }} hidden>

      <input type="text" id="old_size" name="old_size" value={{ $order->pizza_size }} hidden>


  @endforeach


  <div class="form-group mx-sm-3 mb-2">
    <label for="size">Pizza Size</label>

    <select class="form-control" style="width: 500px;" name="size" required id="size">
      
      <option disabled selected value> -- --- -- -- -- -- </option>
      <option value="Small">Small</option>
      <option value="Medium">Medium</option>
      <option value="Large">Large</option>
      <option value="Family">Family</option>
    </select>
  </div>


  <div class="form-group mx-sm-3 mb-2">
    <label for="count">Pizza Numbers</label>
    <input type="Number" name="pizza_num" min="1" class="form-control" style="width: 500px;" required id="pizza_num">
  </div>

      <div class="form-group mx-sm-3 mb-2">
    <label for="name">Customer Name</label>
    <input type="text" name="cust_name" class="form-control"  style="width: 500px;" required>
  </div>

    <div class="form-group mx-sm-3 mb-2">
    <label for="address">Customer address</label>
    <input type="text" name="cust_address" class="form-control" style="width: 500px;" required>
  </div>

      <div class="form-group mx-sm-3 mb-2">
    <label for="phone">Customer Phone</label>
    <input type="text" name="cust_phone" class="form-control" style="width: 500px;">
  </div>


<button type="submit" name="save" id="save" class="btn btn-primary mb-2" style="margin-left: 180px;">Confirm Order</button>


{{ Form::close() }}


<script>
  
$('#save').click(function (e){

      var flavor_array = [];

      var size_array = [];

      var flavor = $('#flavor').val();

      var size = $('#size').val();

      alert(flavor);

if({{ count($orders) }} > 0){

    $("input[name='old_flavor']").each(function (){

      flavor_array.push($(this).val());

    });


    $("input[name='old_size']").each(function (){

       size_array.push($(this).val());

    });


      var array_len = flavor_array.length;


       var i = 0;

      while(i < array_len){

       
         if((flavor_array[i] == flavor) && (size_array[i] == size))
         {

           alert("Please choose another size as you ordered "+ flavor_array[i] + " pizza with "+ size_array[i]+  " size before");

            e.preventDefault();
         }

            i++;

      }

}

});

</script>


@endsection

@endif
