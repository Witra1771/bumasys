<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Warranty;
use App\Http\Requests\Product\StoreWarrantyRequest;
use App\Http\Requests\Product\UpdateWarrantyRequest;

class WarrantyController extends Controller
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
     * @param  \App\Http\Requests\StoreWarrantyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarrantyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Warranty  $Warranty
     * @return \Illuminate\Http\Response
     */
    public function show(Warranty $Warranty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Warranty  $Warranty
     * @return \Illuminate\Http\Response
     */
    public function edit(Warranty $Warranty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWarrantyRequest  $request
     * @param  \App\Models\Product\Warranty  $Warranty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWarrantyRequest $request, Warranty $Warranty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Warranty  $Warranty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warranty $Warranty)
    {
        //
    }
}
