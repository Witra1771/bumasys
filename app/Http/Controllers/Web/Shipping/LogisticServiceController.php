<?php

namespace App\Http\Controllers\Web\Shipping;

use App\Models\Shipping\LogisticService;
use App\Http\Requests\StoreLogisticServiceRequest;
use App\Http\Requests\UpdateLogisticServiceRequest;
use App\Http\Controllers\Controller;

class LogisticServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreLogisticServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogisticServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipping\LogisticService  $logisticService
     * @return \Illuminate\Http\Response
     */
    public function show(LogisticService $logisticService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipping\LogisticService  $logisticService
     * @return \Illuminate\Http\Response
     */
    public function edit(LogisticService $logisticService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogisticServiceRequest  $request
     * @param  \App\Models\Shipping\LogisticService  $logisticService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogisticServiceRequest $request, LogisticService $logisticService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipping\LogisticService  $logisticService
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogisticService $logisticService)
    {
        //
    }
}
