<?php

namespace App\Http\Controllers;

use App\Models\LevelPermission;
use App\Http\Requests\StoreLevelPermissionRequest;
use App\Http\Requests\UpdateLevelPermissionRequest;

class LevelPermissionController extends Controller
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
     * @param  \App\Http\Requests\StoreLevelPermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLevelPermissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LevelPermission  $levelPermission
     * @return \Illuminate\Http\Response
     */
    public function show(LevelPermission $levelPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LevelPermission  $levelPermission
     * @return \Illuminate\Http\Response
     */
    public function edit(LevelPermission $levelPermission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLevelPermissionRequest  $request
     * @param  \App\Models\LevelPermission  $levelPermission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelPermissionRequest $request, LevelPermission $levelPermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LevelPermission  $levelPermission
     * @return \Illuminate\Http\Response
     */
    public function destroy(LevelPermission $levelPermission)
    {
        //
    }
}
