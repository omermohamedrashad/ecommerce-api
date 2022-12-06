<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeuser_typeRequest;
use App\Http\Requests\Updateuser_typeRequest;
use App\Models\user_type;

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
     * @param  \App\Http\Requests\Storeuser_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_type  $user_type
     * @return \Illuminate\Http\Response
     */
    public function show(user_type $user_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_type  $user_type
     * @return \Illuminate\Http\Response
     */
    public function edit(user_type $user_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_typeRequest  $request
     * @param  \App\Models\user_type  $user_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_typeRequest $request, user_type $user_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_type  $user_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_type $user_type)
    {
        //
    }
}
