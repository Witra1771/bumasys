<?php

namespace App\Http\Controllers\Web\Common;

use App\Http\Controllers\Controller;
use App\Models\Item\Category;
use App\Http\Requests\Common\StoreCategoryRequest;
use App\Http\Requests\Common\UpdateCategoryRequest;

class CategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Item\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {
        //
    }
}
