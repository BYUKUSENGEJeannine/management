<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizen;

class citizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $citizens = citizen::latest()->paginate(5);

        return view('citizens.index', compact('citizens'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citizens.create');
    }
    public function login(){
        return view('citizens.login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'village' => 'required',
            'cell' => 'required',
            'sector' => 'required',
            'district' => 'required',
        
        ]);

        citizen::create($request->all());

        return redirect()->route('citizens.index')
            ->with('success', 'People Info  successfully Recorded.');
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
   public function edit(citizen $citizen)
    {
        return view('citizens.edit', compact('citizen'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, citizen $citizen)
    {
       
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'village' => 'required',
            'cell' => 'required',
            'sector' => 'required',
            'district' => 'required',
        ]);
        $citizen->update($request->all());

        return redirect()->route('citizens.index')
            ->with('success', 'Peaple info successfully Modified');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $citizen->delete();

        return redirect()->route('citizens.index')
            ->with('success', 'People successfully Removed');
    }  
}
