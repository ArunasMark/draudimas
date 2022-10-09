<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Owners;
use Illuminate\Http\Request;

class OwnersController extends Controller
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
        return view('owners.index',['owners'=>$owners, 'cars'=>$cars]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|min:2|alpha'] );
        $request->validate(['surname'=>'required|string|min:2|alpha'] );
        $request->validate(['email'=>'required|email|unique:App\Models\Owners,email'] );

        $owner=new Owners();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->email=$request->email;
        $owner->save();
        return redirect()->route('owners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owners  $owners
     * @return \Illuminate\Http\Response
     */
    public function show(Owners $owners)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owners  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owners $owner)
    {
        return view('owners.update', ['owner'=>$owner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owners  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owners $owner)
    {
        $request->validate(['name'=>'required|string|min:2|alpha'] );
        $request->validate(['surname'=>'required|string|min:2|alpha'] );
        $request->validate(['email'=>'required|email|unique:App\Models\Owners,email'] );
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->email=$request->email;
        $owner->save();
        return redirect()->route('owners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owners  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owners $owner)
    {
       $owner->delete();
       return redirect()->route('owners.index');
    }
}
