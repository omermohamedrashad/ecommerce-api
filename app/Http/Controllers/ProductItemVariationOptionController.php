<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductItemVariationOptionConfigRequest;
use App\Http\Requests\UpdateProductItemVariationOptionRequest;
use App\Models\ProductItemVariationOption
    ;

class ProductItemVariationOptionController extends Controller
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
     * @param  \App\Http\Requests\StoreProductItemVariationOptionConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductItemVariationOptionConfigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductItemVariationOption
     *  $productItem_variationOption
     * @return \Illuminate\Http\Response
     */
    public function show(ProductItemVariationOption $productItem_variationOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductItemVariationOption
     *  $productItem_variationOption
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductItemVariationOption $productItem_variationOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductItemVariationOptionRequest  $request
     * @param  \App\Models\ProductItemVariationOption
     *  $productItem_variationOption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductItemVariationOptionRequest $request, ProductItemVariationOption $productItem_variationOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductItemVariationOption
     *  $productItem_variationOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductItemVariationOption $productItem_variationOption)
    {
        //
    }
}
