<?php

namespace App\Http\Controllers;

use App\Models\UserPictures;
use App\Http\Requests\StoreUserPicturesRequest;
use App\Http\Requests\UpdateUserPicturesRequest;

class UserPicturesController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPicturesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPicturesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function show(UserPictures $userPictures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPictures $userPictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPicturesRequest  $request
     * @param  \App\Models\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPicturesRequest $request, UserPictures $userPictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPictures $userPictures)
    {
        //
    }
}
