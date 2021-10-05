<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motocycles = Motorcycle::all();

        return view('motorcycle.index',compact('motocycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motorcycle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store moto guna relationship
        $motocycle = new Motorcycle();
        $motocycle->type = $request->type;
        $motocycle->colour = $request->colour;
        $motocycle->save();

        return redirect()->route('motorcycle:index')->with([
                'alert-type' => 'alert-primary',
                'alert' => 'New motorcycle has been add!'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorcycle $motocycle)
    {
        // dd($motocycle);

        return view('motorcycle.edit' , compact('motocycle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorcycle $motocycle)
    {
        $motocycle->type = $request->type;
        $motocycle->colour = $request->colour;
        $motocycle->save();

        return redirect()->route('motorcycle:index')->with([
                'alert-type' => 'alert-primary',
                'alert' => 'Motorcycle has been updated!'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorcycle $motocycle)
    {

        $motocycle->delete();

        return redirect()->route('motorcycle:index')->with([
            'alert-type' => 'alert-primary',
            'alert' => 'Motorcycle has been deleted!'
        ]);
    }
}
