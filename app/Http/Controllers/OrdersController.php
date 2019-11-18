<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Order;
use DB;
use App\Newpizza;
use Request;
use Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orders = Order::all();

        // $orders = DB::table('orders')->paginate(5);

        return view('orders.index', compact('orders'));
    }


    public function search()
    {
        
        $search = Request::get('search');


        $orders = Order::where('customer_name', 'like', '%'. $search. '%')
                            ->orWhere('delivery_status', 'like', '%'. $search. '%')
                            ->get();

        return view('orders.index', compact('orders'));

    }

    public function search_order_byID_orbyName()
    {
        
        $search = Request::get('search_order');

        $orders = Order::where('id', $search)
                            ->orWhere('customer_name', $search)
                            ->get();

        return view('orders.index', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = auth()->user()->id;

        $orders = Order::where('user_id', $user)->get();

        $pizzas = Newpizza::all();

        return view('orders.create', compact('pizzas', 'orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $order = new Order;

        $order->pizza_flavor = Request::get('flavor');
        $order->pizza_size = Request::get('size');
        $order->pizza_count = Request::get('pizza_num');

        $order->delivery_status = "Not Yet!";

        $order->customer_name = Request::get('cust_name');

        $order->customer_address = Request::get('cust_address');
        $order->customer_phone = Request::get('cust_phone');

        $order->user_id = auth()->user()->id;

        $order->save();

        $id = $order->id;

        $order = Order::findOrFail($id);

        $creation_at = $order->created_at;

        $delivery_time = date('H:i:s', strtotime($creation_at.'+5 minutes'));

        $end_time = date('H:i:s');
       
        if($end_time == $delivery_time){

           $order->delivery_status = "Done";

            $order->update();

        }


        // echo ($delivery_time); 
           

        return redirect('/orders');

       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function filter_by_name($customer_name)
    // {
    //     $order = Order::findOrFail($customer_name);

    //     return view('orders.filter_by_name', compact('order'));
    // }


    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        return view('orders.edit', compact('order'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->delivery_status = Request::get('delivery_status');

        $order->update();

        return redirect('/orders')->with('success', 'Order Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        // return view('orders.destroy', compact('order'));

        if ($order->delivery_status=="Not Yet!") {

            Session::flash('message', 'This Order Can Not be Deleted as It Is Not Delivered Yet !!');
            Session::flash('alert-class', 'alert-danger');

            return redirect('/orders');

        }else {

                $order->delete();

                Session::flash('message', 'Order with ID = '. $order->id. " Deleted Successfully");

                return redirect('/orders');

        }

    }
}
