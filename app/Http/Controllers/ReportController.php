<?php

namespace App\Http\Controllers;

use App\Models\Prison;
use App\Models\Prisoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region_wise = [];
        $grand_total = [];
        foreach (Prison::orderBy('region')->get() as $item) {
            foreach (Prisoner::crime_charges() as $key => $value){
                $region_wise[$item->region][$item->jail][$key] = 0;
                $grand_total[$key] = 0;
            }
        }


DB::enableQueryLog();
        $query_region_wise = DB::table('prisoners')
            ->select('prisons.region', 'prisons.jail', 'prisoner_charges.crime_charges', DB::raw("count(prisoner_charges.crime_charges) as total"))
            ->join('prisoner_charges','prisoners.id','=','prisoner_charges.prisoner_id')
            ->join('prisons','prisoners.prison','=','prisons.jail')
            ->groupBy('prisons.region','prisons.jail','prisoner_charges.crime_charges')
            ->orderBy('prisoners.id','asc')
            ->get();

//        dd(DB::getQueryLog($query_region_wise));
//        dd($query_region_wise);


        foreach($query_region_wise as $item){
            $region_wise[$item->region][$item->jail][$item->crime_charges] = $item->total;
            $grand_total[$item->crime_charges] = $query_region_wise->where('crime_charges',$item->crime_charges)->sum('total');
        }
//        dd($grand_total);
        return view('report.index',compact('region_wise','grand_total'));

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
