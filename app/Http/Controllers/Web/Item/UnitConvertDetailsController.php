<?php

namespace App\Http\Controllers\Web\Item;

use App\Models\Item\UnitConvertDetails;
use App\Http\Requests\Item\StoreUnitConvertDetailsRequest;
use App\Http\Requests\Item\UpdateUnitConvertDetailsRequest;
use App\Http\Controllers\Controller;

class UnitConvertDetailsController extends Controller
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
     * @param  \App\Http\Requests\StoreUnitConvertDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitConvertDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item\UnitConvertDetails  $unitConvertDetails
     * @return \Illuminate\Http\Response
     */
    public function show(UnitConvertDetails $unitConvertDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item\UnitConvertDetails  $unitConvertDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitConvertDetails $unitConvertDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitConvertDetailsRequest  $request
     * @param  \App\Models\Item\UnitConvertDetails  $unitConvertDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnitConvertDetailsRequest $request, UnitConvertDetails $unitConvertDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item\UnitConvertDetails  $unitConvertDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitConvertDetails $unitConvertDetails)
    {
        //
    }
}
