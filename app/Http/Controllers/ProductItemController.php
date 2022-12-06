<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproduct_itemRequest;
use App\Http\Requests\Updateproduct_itemRequest;
use App\Models\product_item;

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
     * @param  \App\Http\Requests\Storeproduct_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_item  $product_item
     * @return \Illuminate\Http\Response
     */
    public function show(product_item $product_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_item  $product_item
     * @return \Illuminate\Http\Response
     */
    public function edit(product_item $product_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_itemRequest  $request
     * @param  \App\Models\product_item  $product_item
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_itemRequest $request, product_item $product_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_item  $product_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_item $product_item)
    {
        //
    }
}
