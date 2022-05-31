<?php

namespace App\Http\Controllers;

use App\Models\Product\Warranties;
use App\Http\Requests\StoreWarrantiesRequest;
use App\Http\Requests\UpdateWarrantiesRequest;

class WarrantiesController extends Controller
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
     * @param  \App\Http\Requests\StoreWarrantiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarrantiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Warranties  $warranties
     * @return \Illuminate\Http\Response
     */
    public function show(Warranties $warranties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Warranties  $warranties
     * @return \Illuminate\Http\Response
     */
    public function edit(Warranties $warranties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWarrantiesRequest  $request
     * @param  \App\Models\Product\Warranties  $warranties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWarrantiesRequest $request, Warranties $warranties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Warranties  $warranties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warranties $warranties)
    {
        //
    }
}
