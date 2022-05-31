<?php

namespace App\Http\Controllers;

use App\Models\Product\Brands;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;

class BrandsController extends Controller
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
     * @param  \App\Http\Requests\StoreBrandsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Brands  $Brands
     * @return \Illuminate\Http\Response
     */
    public function show(Brands $Brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Brands  $Brands
     * @return \Illuminate\Http\Response
     */
    public function edit(Brands $Brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandsRequest  $request
     * @param  \App\Models\Product\Brands  $Brands
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandsRequest $request, Brands $Brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Brands  $Brands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $Brands)
    {
        //
    }
}
