@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

 <br/>

    <div class="row">

       <a href="/orders"><button class="btn btn-primary mb-2" style="margin-left:320px;">
                List All Pizza  Orders</button></a><br/><br/>
        
        <a href="/newpizzas"><button class="btn btn-primary mb-2" style="margin-left: 200px;">Add Pizza</button></a>

    </div>
    <div class="row">

            <form action="/search_order_byID_orbyName" method="get" style="margin-top: 50px;">
                <label style="margin-left: 200px;">Order ID or Customer Name: </label>&nbsp;&nbsp;
            <input type="text" name="search_order" placeholder="Serach by ID or Name">

            <button class="btn btn-primary mb-2" style="margin-left: 400
            px;">Retreive Order</button>

            </form>
  
        <br/><br/>
    </div>

</div>
@endsection


