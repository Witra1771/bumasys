<?php

namespace App\Http\Controllers\Web\Shipping;

use App\Models\Shipping\Logistic;
use App\Http\Requests\Shipping\StoreLogisticRequest;
use App\Http\Requests\Shipping\UpdateLogisticRequest;
use App\Http\Controllers\Controller;

class LogisticController extends Controller
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
     * @param  \App\Http\Requests\StoreLogisticRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogisticRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipping\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function show(Logistic $logistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipping\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function edit(Logistic $logistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogisticRequest  $request
     * @param  \App\Models\Shipping\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogisticRequest $request, Logistic $logistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipping\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logistic $logistic)
    {
        //
    }
}
