<?php

namespace App\Http\Controllers\Web\Order;

use App\Models\Order\OrderDiscount;
use App\Http\Requests\Order\StoreOrderDiscountRequest;
use App\Http\Requests\Order\UpdateOrderDiscountRequest;
use App\Http\Controllers\Controller;

class OrderDiscountController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderDiscountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderDiscountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order\OrderDiscount  $orderDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDiscount $orderDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order\OrderDiscount  $orderDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDiscount $orderDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderDiscountRequest  $request
     * @param  \App\Models\Order\OrderDiscount  $orderDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderDiscountRequest $request, OrderDiscount $orderDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order\OrderDiscount  $orderDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDiscount $orderDiscount)
    {
        //
    }
}
