<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Owners;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Cars::all();
        $owners=Owners::all();
        return view('cars.index',['cars'=>$cars, 'owners'=>$owners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners=Owners::all();
        return view('cars.create',['owners'=>$owners]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['reg_number'=>'required|string|min:2|max:6|unique:App\Models\Cars,reg_number|alpha_num|regex:/[A-Z0-9
        ]+/'] );
        $request->validate(['brand'=>'required|min:2'] );
        $request->validate(['model'=>'required|min:2'] );
        $request->validate(['owner_id'=>'required'] );
        $car=new Cars();
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->owner_id=$request->owner_id;
        $car->save();
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $cars)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $car)
    {
        $owners=Owners::all();
        return view('cars.update', ['car'=>$car, 'owners'=>$owners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cars  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $car)
    {
        $request->validate(['reg_number'=>'required|string|min:2|max:6|unique:App\Models\Cars,reg_number|alpha_num|regex:/[A-Z0-9
        ]+/'] );
        $request->validate(['brand'=>'required|min:2'] );
        $request->validate(['model'=>'required|min:2'] );
        $request->validate(['owner_id'=>'required'] );
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->owner_id=$request->owner_id;
        $car->save();
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $car)
    {
        $car->delete()
;        return redirect()->route('cars.index');
    }
}
