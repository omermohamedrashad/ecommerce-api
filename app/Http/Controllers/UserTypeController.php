<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserTypeRequest;
use App\Http\Requests\UpdateUserTypeRequest;
use App\Models\UserType;

class UserTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreUserTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserType  $user_type
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $user_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserType  $user_type
     * @return \Illuminate\Http\Response
     */
    public function edit(UserType $user_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserTypeRequest  $request
     * @param  \App\Models\UserType  $user_type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserTypeRequest $request, UserType $user_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserType  $user_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $user_type)
    {
        //
    }
}
