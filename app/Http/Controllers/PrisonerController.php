<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrisonerRequest;
use App\Http\Requests\UpdatePrisonerRequest;
use App\Models\Prisoner;

class PrisonerController extends Controller
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
        return view('prisoner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrisonerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrisonerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prisoner  $prisoner
     * @return \Illuminate\Http\Response
     */
    public function show(Prisoner $prisoner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prisoner  $prisoner
     * @return \Illuminate\Http\Response
     */
    public function edit(Prisoner $prisoner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrisonerRequest  $request
     * @param  \App\Models\Prisoner  $prisoner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrisonerRequest $request, Prisoner $prisoner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prisoner  $prisoner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prisoner $prisoner)
    {
        //
    }
}
