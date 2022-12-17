<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromotionCodeRequest;
use App\Http\Requests\UpdatePromotionCodeRequest;
use App\Models\PromotionCode;

class PromotionCodeController extends Controller
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
     * @param  \App\Http\Requests\StorePromotionCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromotionCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromotionCode  $promotion_Code
     * @return \Illuminate\Http\Response
     */
    public function show(PromotionCode $promotion_Code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromotionCode  $promotion_Code
     * @return \Illuminate\Http\Response
     */
    public function edit(PromotionCode $promotion_Code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromotionCodeRequest  $request
     * @param  \App\Models\PromotionCode  $promotion_Code
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromotionCodeRequest $request, PromotionCode $promotion_Code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromotionCode  $promotion_Code
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromotionCode $promotion_Code)
    {
        //
    }
}
