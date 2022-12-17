<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductVariationRequest;
use App\Http\Requests\UpdateProductVariationRequest;
use App\Models\ProductVariation;

class ProductVariationController extends Controller
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
     * @param  \App\Http\Requests\StoreProductVariationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductVariationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductVariation  $product_Variation
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVariation $product_Variation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductVariation  $product_Variation
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVariation $product_Variation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductVariationRequest  $request
     * @param  \App\Models\ProductVariation  $product_Variation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductVariationRequest $request, ProductVariation $product_Variation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductVariation  $product_Variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVariation $product_Variation)
    {
        //
    }
}
