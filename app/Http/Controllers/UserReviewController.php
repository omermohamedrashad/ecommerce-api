<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeuser_reviewRequest;
use App\Http\Requests\Updateuser_reviewRequest;
use App\Models\user_review;

class UserReviewController extends Controller
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
     * @param  \App\Http\Requests\Storeuser_reviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_reviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function show(user_review $user_review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function edit(user_review $user_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_reviewRequest  $request
     * @param  \App\Models\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_reviewRequest $request, user_review $user_review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_review $user_review)
    {
        //
    }
}
