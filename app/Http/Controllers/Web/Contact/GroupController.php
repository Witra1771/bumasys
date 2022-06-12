<?php

namespace App\Http\Controllers\Web\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\Group;
use App\Http\Requests\Contact\StoreGroupRequest;
use App\Http\Requests\Contact\UpdateGroupRequest;

class GroupController extends Controller
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
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact\Group  $Group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $Group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact\Group  $Group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $Group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Models\Contact\Group  $Group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, Group $Group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact\Group  $Group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $Group)
    {
        //
    }
}
