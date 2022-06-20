<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrisonerChargesRequest;
use App\Http\Requests\UpdatePrisonerChargesRequest;
use App\Models\PrisonerCharges;

class PrisonerChargesController extends Controller
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
     * @param  \App\Http\Requests\StorePrisonerChargesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrisonerChargesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrisonerCharges  $prisonerCharges
     * @return \Illuminate\Http\Response
     */
    public function show(PrisonerCharges $prisonerCharges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrisonerCharges  $prisonerCharges
     * @return \Illuminate\Http\Response
     */
    public function edit(PrisonerCharges $prisonerCharges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrisonerChargesRequest  $request
     * @param  \App\Models\PrisonerCharges  $prisonerCharges
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrisonerChargesRequest $request, PrisonerCharges $prisonerCharges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrisonerCharges  $prisonerCharges
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrisonerCharges $prisonerCharges)
    {
        //
    }
}
