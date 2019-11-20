<?php

namespace Tests\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// use Illuminate\Http\RedirectResponse;

use Tests\TestCase;
use App\Newpizza;

use Illuminate\Contracts\Console\Kernel;


class NewpizzasControllerTest extends TestCase
{
    /**
    *@test
    */

    public function testIndex()
    {
         
        $response = $this->call('GET', '/newpizzas');

        $response->assertStatus(200);
 
        $response->assertViewHas('pizzas');

        $response->assertViewIs('newpizzas.index');

     //  dd($response);

    }


    public function testCreate(){

        $response = $this->call('GET', 'newpizzas/create');

        $response->assertStatus(200);

        $response->assertViewIs('newpizzas.create');

      //   dd($response);
    }


    public function testStore(){


        $response = $this->call('GET', '/newpizzas/');

        $response->assertStatus(200);

         $response->assertViewIs('newpizzas.index');

         // dd($response);


    }

    public function testShow(){

        $newpizza  = Newpizza::first();

        $response = $this->call('GET', '/newpizzas/'. $newpizza->id);

        $response->assertStatus(200);
 
        $response->assertViewHas('newpizza');

        $response->assertViewIs('newpizzas.show');

         // dd($response);

    }

    public function testEdit(){

        $newpizza  = Newpizza::first();

        $response = $this->call('GET', 'newpizzas/'.$newpizza->id . '/edit');

        $response->assertStatus(200);

        $response->assertViewHas('newpizza');

        $response->assertViewIs('newpizzas.edit');

         // dd($response);
        
    }

    // public function testUpdate(){

    //     $newpizza  = Newpizza::first();

    //     $response = $this->call('PUT', 'newpizzas/'.$newpizza->id);

    //     $response->assertStatus(200);

    //     // dd($response);    

    // }


    // public function testDestroy(){

    //     $newpizza  = Newpizza::first();

    //     $response = $this->call('GET', '/newpizzas/destroy/'.$newpizza->id);

    //     $response->assertStatus(200);

    //     $response->assertViewIs('newpizzas');

    //     dd($response);


    // }

}
