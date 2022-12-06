<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\UserAddress;

class UserAddressController extends Controller
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
     * @param  \App\Http\Requests\StoreUserAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAddress  $user_address
     * @return \Illuminate\Http\Response
     */
    public function show(UserAddress $user_address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAddress  $user_address
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAddress $user_address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAddressRequest  $request
     * @param  \App\Models\UserAddress  $user_address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAddressRequest $request, UserAddress $user_address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAddress  $user_address
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAddress $user_address)
    {
        //
    }
}
