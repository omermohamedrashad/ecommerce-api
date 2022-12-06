<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserReviewRequest;
use App\Http\Requests\UpdateUserReviewRequest;
use App\Models\UserReview;

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
     * @param  \App\Http\Requests\StoreUserReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserReview  $user_review
     * @return \Illuminate\Http\Response
     */
    public function show(UserReview $user_review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReview  $user_review
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReview $user_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserReviewRequest  $request
     * @param  \App\Models\UserReview  $user_review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserReviewRequest $request, UserReview $user_review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReview  $user_review
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReview $user_review)
    {
        //
    }
}
