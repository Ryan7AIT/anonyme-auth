<?php

namespace App\Http\Controllers;

use App\Models\Bankmessage;
use App\Http\Requests\StoreBankmessageRequest;
use App\Http\Requests\UpdateBankmessageRequest;

class BankmessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBankmessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankmessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bankmessage  $bankmessage
     * @return \Illuminate\Http\Response
     */
    public function show(Bankmessage $bankmessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bankmessage  $bankmessage
     * @return \Illuminate\Http\Response
     */
    public function edit(Bankmessage $bankmessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankmessageRequest  $request
     * @param  \App\Models\Bankmessage  $bankmessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankmessageRequest $request, Bankmessage $bankmessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bankmessage  $bankmessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bankmessage $bankmessage)
    {
        //
    }
}
