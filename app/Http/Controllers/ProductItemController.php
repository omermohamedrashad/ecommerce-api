<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductItemRequest;
use App\Http\Requests\UpdateProductItemRequest;
use App\Models\ProductItem;

class ProductItemController extends Controller
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
     * @param  \App\Http\Requests\StoreProductItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductItem  $product_Item
     * @return \Illuminate\Http\Response
     */
    public function show(ProductItem $product_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductItem  $product_Item
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductItem $product_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductItemRequest  $request
     * @param  \App\Models\ProductItem  $product_Item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductItemRequest $request, ProductItem $product_Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductItem  $product_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductItem $product_Item)
    {
        //
    }
}
