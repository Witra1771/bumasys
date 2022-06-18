<?php

namespace App\Http\Controllers\Web\Item\Variant;

use App\Http\Controllers\Controller;
use App\Models\Item\Variant\Variation;
use App\Http\Requests\Item\Variant\StoreVariationRequest;
use App\Http\Requests\Item\Variant\UpdateVariationRequest;

class VariationController extends Controller
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
     * @param  \App\Http\Requests\StoreVariationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVariationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item\Variation  $Variation
     * @return \Illuminate\Http\Response
     */
    public function show(Variation $Variation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item\Variation  $Variation
     * @return \Illuminate\Http\Response
     */
    public function edit(Variation $Variation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVariationRequest  $request
     * @param  \App\Models\Item\Variation  $Variation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVariationRequest $request, Variation $Variation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item\Variation  $Variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variation $Variation)
    {
        //
    }
}
