<?php

namespace App\Http\Controllers;

use App\Models\society;
use App\Http\Requests\StoresocietyRequest;
use App\Http\Requests\UpdatesocietyRequest;
use App\Models\Bank;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);




        $b = Bank::find(1);


        Post::create([
            'society_id' => Auth::user()->mysociety->id,
            'title' => $b->Encipher($validated['title'],3),
            'content' => $b->Encipher($validated['content'],3),


        ]);

        return redirect('/societies/' .  Auth::user()->mysociety->id);
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
        $posts = $society->posts;

        // dd($posts);


        return view('society', [
            'society' => $society,
            'posts' => $posts
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
