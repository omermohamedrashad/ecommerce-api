<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\AddressResource;
use App\Http\Resources\UserAddressResource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\Address;
use App\Models\User;
use App\Models\UserAddress;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return UserCollection | \Illuminate\Http\Response
     */
    public function index()
    {
        return new UserCollection(User::with('addresses')->paginate());

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
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return UserResource |\Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        $user = new UserResource(User::create($request->all()));

        $address = new AddressResource(Address::create($request->all()));

        $user->addresses()->attach($address->id);
        return response()->json('All Done');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return UserResource |\Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user->loadMissing('addresses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
