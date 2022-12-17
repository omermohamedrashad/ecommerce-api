<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromotionCategoryRequest;
use App\Http\Requests\UpdatePromotionCategoryRequest;
use App\Models\PromotionCategory;

class PromotionCategoryController extends Controller
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
     * @param  \App\Http\Requests\StorePromotionCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromotionCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromotionCategory  $promotion_Category
     * @return \Illuminate\Http\Response
     */
    public function show(PromotionCategory $promotion_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromotionCategory  $promotion_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(PromotionCategory $promotion_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromotionCategoryRequest  $request
     * @param  \App\Models\PromotionCategory  $promotion_Category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromotionCategoryRequest $request, PromotionCategory $promotion_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromotionCategory  $promotion_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromotionCategory $promotion_Category)
    {
        //
    }
}
