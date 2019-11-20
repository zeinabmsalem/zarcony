<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Newpizza;
use App\Order;

class OrdersControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {

        $response = $this->call('GET', '/orders');

        $response->assertStatus(200);
 
        $response->assertViewHas('orders');

        $response->assertViewIs('orders.index');

     //  dd($response);

    }


    public function testCreate(){

        $response = $this->call('GET', 'orders/create');

        $response->assertStatus(200);

        $response->assertViewIs('orders.create');

      //   dd($response);
    }


    public function testStore(){


        $response = $this->call('GET', '/orders/');

        $response->assertStatus(200);

         $response->assertViewIs('orders.index');

         // dd($response);


    }

    public function testShow(){

        $order  = Order::first();

        $response = $this->call('GET', '/orders/'. $order->id);

        $response->assertStatus(200);
 
        $response->assertViewHas('order');

        $response->assertViewIs('orders.show');

         // dd($response);

    }

    public function testEdit(){

        $order  = Order::first();

        $response = $this->call('GET', 'orders/'.$order->id . '/edit');

        $response->assertStatus(200);

        $response->assertViewHas('order');

        $response->assertViewIs('orders.edit');

         // dd($response);
        
    }

    public function testSearch()
    {

        $response = $this->call('GET', '/search');

        $response->assertStatus(200);
 
        $response->assertViewHas('orders');

        $response->assertViewIs('orders.index');

       //dd($response);
    }

    public function testSearch_order_byID_orbyName()
    {


        $response = $this->call('GET', '/search_order_byID_orbyName');

        $response->assertStatus(200);
 
        $response->assertViewHas('orders');

        $response->assertViewIs('orders.index');

        dd($response);

    }

}
