<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use App\Http\Requests\StoreUserPostRequest;
use App\Http\Requests\UpdateUserPostRequest;

class UserPostController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function show(UserPost $userPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPost $userPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPostRequest  $request
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPostRequest $request, UserPost $userPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPost $userPost)
    {
        //
    }
}
