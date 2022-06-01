<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\SellingPriceGroup;
use App\Http\Requests\Product\StoreSellingPriceGroupRequest;
use App\Http\Requests\Product\UpdateSellingPriceGroupRequest;

class SellingPriceGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreSellingPriceGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellingPriceGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\SellingPriceGroup  $SellingPriceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(SellingPriceGroup $SellingPriceGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\SellingPriceGroup  $SellingPriceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(SellingPriceGroup $SellingPriceGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellingPriceGroupRequest  $request
     * @param  \App\Models\Product\SellingPriceGroup  $SellingPriceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellingPriceGroupRequest $request, SellingPriceGroup $SellingPriceGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\SellingPriceGroup  $SellingPriceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellingPriceGroup $SellingPriceGroup)
    {
        //
    }
}
