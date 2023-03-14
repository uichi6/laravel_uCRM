<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCostomerRequest;
use App\Http\Requests\UpdateCostomerRequest;
use App\Models\Costomer;

class CostomerController extends Controller
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
     * @param  \App\Http\Requests\StoreCostomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCostomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function show(Costomer $costomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function edit(Costomer $costomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCostomerRequest  $request
     * @param  \App\Models\Costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCostomerRequest $request, Costomer $costomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costomer $costomer)
    {
        //
    }
}
