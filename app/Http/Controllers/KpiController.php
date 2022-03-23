<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKpiRequest;
use App\Http\Requests\UpdateKpiRequest;
use App\Models\Kpi;
use App\Models\Hotel;
use App\Models\Quarter;
use App\Models\FiscalYear;
use App\Models\Category;
use App\Models\Project;

class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $kpi = Kpi::all();
        return view('kpi.index',compact('kpi'));
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
     * @param  \App\Http\Requests\StoreKpiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKpiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function show(Kpi $kpi)
    {
        
        $kpi_details = Kpi::with(['hotel','fiscalYear','quarter','project','categorie'])->get();
        return view('kpi.show', compact('kpi_details','kpi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpi $kpi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKpiRequest  $request
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKpiRequest $request, Kpi $kpi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpi $kpi)
    {
        //
    }

}
