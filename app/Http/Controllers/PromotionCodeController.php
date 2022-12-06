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
     * @param  \App\Models\PromotionCode  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function show(PromotionCode $promotion_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromotionCode  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function edit(PromotionCode $promotion_code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromotionCodeRequest  $request
     * @param  \App\Models\PromotionCode  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromotionCodeRequest $request, PromotionCode $promotion_code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromotionCode  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromotionCode $promotion_code)
    {
        //
    }
}
