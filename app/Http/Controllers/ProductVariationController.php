<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproduct_variationRequest;
use App\Http\Requests\Updateproduct_variationRequest;
use App\Models\product_variation;

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
     * @param  \App\Http\Requests\Storeproduct_variationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_variationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function show(product_variation $product_variation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function edit(product_variation $product_variation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_variationRequest  $request
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_variationRequest $request, product_variation $product_variation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_variation $product_variation)
    {
        //
    }
}
