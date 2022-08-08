<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrisonRequest;
use App\Http\Requests\UpdatePrisonRequest;
use App\Models\Prison;

class PrisonController extends Controller
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
     * @param  \App\Http\Requests\StorePrisonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrisonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prison  $prison
     * @return \Illuminate\Http\Response
     */
    public function show(Prison $prison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prison  $prison
     * @return \Illuminate\Http\Response
     */
    public function edit(Prison $prison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrisonRequest  $request
     * @param  \App\Models\Prison  $prison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrisonRequest $request, Prison $prison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prison  $prison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prison $prison)
    {
        //
    }
}
