<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Newpizza;
use Request;
use Session;

class NewpizzasController extends Controller
{

    // public function __construct(){

    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Newpizza::all();

        return view('newpizzas.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newpizzas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Newpizza = new Newpizza;

        $Newpizza->pizza_name = Request::get('pizza_name');

        $Newpizza->save();

        return redirect('/newpizzas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newpizza = Newpizza::findOrFail($id);

        return view('newpizzas.show', compact('newpizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newpizza = Newpizza::findOrFail($id);

        return view('newpizzas.edit', compact('newpizza'));
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
        $Newpizza = Newpizza::find($id);

        $Newpizza->pizza_name = Request::get('pizza_name');

        $Newpizza->update();

        return redirect('/newpizzas');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Newpizza = Newpizza::find($id);

        $Newpizza->delete();

        return redirect('/newpizzas');

    }
}
