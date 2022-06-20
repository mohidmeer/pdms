<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrisionerShiftedRequest;
use App\Http\Requests\UpdatePrisionerShiftedRequest;
use App\Models\PrisionerShifted;
use App\Models\Prisoner;

class PrisionerShiftedController extends Controller
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
    public function create(Prisoner $prisoner)
    {
        return view('shifting.create', compact('prisoner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePrisionerShiftedRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrisionerShiftedRequest $request)
    {
        $prisoner = $request->prisoner_id;
        PrisionerShifted::create($request->all());
        session()->flash('message', 'Prisioner shifting information successfully updated.');
        return to_route('prisoner.show', $prisoner);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\PrisionerShifted $prisionerShifted
     * @return \Illuminate\Http\Response
     */
    public function show(PrisionerShifted $prisionerShifted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PrisionerShifted $prisionerShifted
     * @return \Illuminate\Http\Response
     */
    public function edit(PrisionerShifted $prisionerShifted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePrisionerShiftedRequest $request
     * @param \App\Models\PrisionerShifted $prisionerShifted
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrisionerShiftedRequest $request, PrisionerShifted $prisionerShifted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\PrisionerShifted $prisionerShifted
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrisionerShifted $prisionerShifted)
    {
        //
    }
}
