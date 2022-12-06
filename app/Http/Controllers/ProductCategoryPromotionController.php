<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryPromotionRequest;
use App\Http\Requests\UpdateProductCategoryPromotionRequest;
use App\Models\ProductCategoryPromotion;

class ProductCategoryPromotionController extends Controller
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
     * @param  \App\Http\Requests\StoreProductCategoryPromotionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryPromotionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategoryPromotion  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategoryPromotion $promotion_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategoryPromotion  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategoryPromotion $promotion_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryPromotionRequest  $request
     * @param  \App\Models\ProductCategoryPromotion  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryPromotionRequest $request, ProductCategoryPromotion $promotion_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategoryPromotion  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategoryPromotion $promotion_category)
    {
        //
    }
}
