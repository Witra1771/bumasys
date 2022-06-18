<?php

namespace App\Http\Controllers\Web\Item;

use App\Http\Controllers\Controller;
use App\Models\Item\Item;
use App\Http\Requests\Item\StoreItemRequest;
use App\Http\Requests\Item\UpdateItemRequest;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : Response
    {
        return response([
            'data' => Item::all()
        ]);
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
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $Item)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $Item)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $Item)
    {

    }
}
