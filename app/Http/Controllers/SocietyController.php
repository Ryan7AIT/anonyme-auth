<?php

namespace App\Http\Controllers;

use App\Models\society;
use App\Http\Requests\StoresocietyRequest;
use App\Http\Requests\UpdatesocietyRequest;
use App\Models\User;

class SocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societies = society::all();
        return view('societies', [
            'societies' => $societies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresocietyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresocietyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\society  $society
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $society = society::find($id);
        $pending = User::where('society_id',$id)->get();


        return view('society', [
            'society' => $society
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\society  $society
     * @return \Illuminate\Http\Response
     */
    public function edit(society $society)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesocietyRequest  $request
     * @param  \App\Models\society  $society
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesocietyRequest $request, society $society)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\society  $society
     * @return \Illuminate\Http\Response
     */
    public function destroy(society $society)
    {
        //
    }
}
