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
  	<br/>

  	<h1 style="margin-left: 100px;">Update Pizza Delivery Status</h1><br/>


{{ Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'post']) }}

@if ( $order->delivery_status == 0)
         <p style="margin-left: 100px;"> This Order Can't be Deleted as It's not Delivered Yet!!!</p>
        @endif 

{{-- <div class="form-group mx-sm-3 mb-2">
    <input type="Number" name="flavor" value="{{ $order->pizza_flavor }}" class="form-control" style="width: 500px;" hidden>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <input type="Number" name="size" value="{{ $order->pizza_size }}" class="form-control" style="width: 500px;" hidden>

  </div>


  <div class="form-group mx-sm-3 mb-2">
    <input type="Number" name="pizza_num" value="{{ $order->pizza_count }}" class="form-control" style="width: 500px;" hidden>
  </div>


  <div class="form-group mx-sm-3 mb-2">
    <label for="count">Order Delivery Status</label>
    <input type="text" name="delivery_status" value="{{ $order->delivery_status }}" class="form-control" style="width: 500px;">
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

 --}}
<button type="submit" class="btn btn-primary mb-2" style="margin-left: 180px;">Delete Order</button>


{{ Form::close() }}


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="/assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

