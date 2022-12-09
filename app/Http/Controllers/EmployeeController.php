<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
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
    public function create($id)
    {
        $society = Society::find($id);


        return view('addemployee', [
            'society' => $society
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'dateofbirth' => 'required',
            'number' => 'required',


        ]);

        User::factory()->create([
            'name' => $validated['fname'],
            'email' => $validated['email'],
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'password' => $validated['password'],
            'society_id' => Auth::user()->mysociety->id,
            'tel' => $validated['number'],
            'birth' => $validated['dateofbirth'],

        ]);


        return redirect('/society/'. Auth::user()->mysociety->id . '/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

        if(! Auth::user()->isBoss()) {
            return abort(403);
        }

        $employee = User::find($id);

        return view('employee', [
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
