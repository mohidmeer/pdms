<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrisonerRequest;
use App\Http\Requests\UpdatePrisonerRequest;
use App\Models\Prisoner;
use App\Models\PrisonerCharges;

class PrisonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prisoner = Prisoner::all();
        return view('prisoner.index',compact('prisoner'));
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
//        dd($request->all());
        if ($request->hasFile('file_attachments_1')) {
            $path = $request->file('file_attachments_1')->store('', 'public');
            $request->merge(['attachment' => $path]);
        }


        $prisoner = Prisoner::create($request->all());
        $prisoner_id = $prisoner->id;

        foreach ($request->crime_charges as $key => $value)
        {
            PrisonerCharges::create([
                'prisoner_id' => $prisoner->id,
                'crime_charges' => $value
            ]);
        }
//        dd($request->all());
        session()->flash('message', 'Prisioner information successfully added.');
        return to_route('prisoner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prisoner  $prisoner
     * @return \Illuminate\Http\Response
     */
    public function show(Prisoner $prisoner)
    {
        return view('prisoner.show',compact('prisoner'));
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
