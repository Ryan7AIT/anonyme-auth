<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Http\Requests\UpdateFacultyRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        return view('faculties', [
            'faculties' => $faculties
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
     * @param  \App\Http\Requests\StoreFacultyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fid' => 'required',
            'mat' => 'required'
        ]);



        $user = User::where('fname',Auth::user()->fname)->where('lname', Auth::user()->lname)->first();

        $user->status = 'pending';

        $user->save();

        return redirect('/faculties/' . $validated['fid']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($faculty);/

        $faculty = Faculty::find($id);
        $pending = User::where('faculty_id',$id)->where('status', 'pending')->get();


        return view('faculty', [
            'faculty' => $faculty,
            'pending' => $pending
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacultyRequest  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'toAcept' => 'required'
        ]);

        $toAccept = User::find($validated['toAcept']);

        $toAccept->status = 'approved';

        $toAccept->save();

        return redirect('/faculties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }
}
