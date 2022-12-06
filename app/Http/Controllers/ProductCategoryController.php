<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproduct_categoryRequest;
use App\Http\Requests\Updateproduct_categoryRequest;
use App\Models\product_category;

class ProductCategoryController extends Controller
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
     * @param  \App\Http\Requests\Storeproduct_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show(product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(product_category $product_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_categoryRequest  $request
     * @param  \App\Models\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_categoryRequest $request, product_category $product_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_category $product_category)
    {
        //
    }
}
