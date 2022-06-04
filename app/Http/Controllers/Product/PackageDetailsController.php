<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\PackageDetails;
use App\Http\Requests\Product\StorePackageDetailsRequest;
use App\Http\Requests\Product\UpdatePackageDetailsRequest;

class PackageDetailsController extends Controller
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
     * @param  \App\Http\Requests\StorePackageDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PackageDetails $packageDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageDetails $packageDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageDetailsRequest  $request
     * @param  \App\Models\Product\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageDetailsRequest $request, PackageDetails $packageDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageDetails $packageDetails)
    {
        //
    }
}
