<?php

namespace App\Http\Controllers;

use App\Models\Product\Variations;
use App\Http\Requests\StoreVariationsRequest;
use App\Http\Requests\UpdateVariationsRequest;

class VariationsController extends Controller
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
     * @param  \App\Http\Requests\StoreVariationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVariationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Variations  $variations
     * @return \Illuminate\Http\Response
     */
    public function show(Variations $variations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Variations  $variations
     * @return \Illuminate\Http\Response
     */
    public function edit(Variations $variations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVariationsRequest  $request
     * @param  \App\Models\Product\Variations  $variations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVariationsRequest $request, Variations $variations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Variations  $variations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variations $variations)
    {
        //
    }
}
