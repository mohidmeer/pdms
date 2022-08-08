<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJailOfficialRequest;
use App\Http\Requests\UpdateJailOfficialRequest;
use App\Models\JailOfficial;
use App\Models\Prisoner;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class JailOfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prison = QueryBuilder::for(JailOfficial::class)
            ->allowedFilters([
                AllowedFilter::scope('search_string'),
                AllowedFilter::exact('prison'),
            ])->latest()->paginate(50)->withQueryString();
        return view('prison.index', compact('prison'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prison.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJailOfficialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJailOfficialRequest $request)
    {
        $prison = JailOfficial::create($request->all());
        session()->flash('message', 'Jail official information successfully saved.');
        return to_route('prison.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JailOfficial  $prison
     * @return \Illuminate\Http\Response
     */
    public function show(JailOfficial $prison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JailOfficial  $prison
     * @return \Illuminate\Http\Response
     */
    public function edit(JailOfficial $prison)
    {
        return view('prison.edit', compact('prison'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJailOfficialRequest  $request
     * @param  \App\Models\JailOfficial  $prison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJailOfficialRequest $request, JailOfficial $prison)
    {
        $prison->update($request->all());
        session()->flash('message', 'Jail official data information successfully updated.');
        return to_route('prison.edit', $prison);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JailOfficial  $prison
     * @return \Illuminate\Http\Response
     */
    public function destroy(JailOfficial $prison)
    {
        $prison->delete();
        session()->flash('message', 'Jail Official information successfully destroy.');
        return to_route('prison.index');
    }
}
