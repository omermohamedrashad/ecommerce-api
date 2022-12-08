<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCodeRequest;
use App\Http\Requests\UpdateProductCodeRequest;
use App\Models\ProductCode;

class ProductCodeController extends Controller
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
     * @param  \App\Http\Requests\StoreProductCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCode  $product_Code
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCode $product_Code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCode  $product_Code
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCode $product_Code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCodeRequest  $request
     * @param  \App\Models\ProductCode  $product_Code
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCodeRequest $request, ProductCode $product_Code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCode  $product_Code
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCode $product_Code)
    {
        //
    }
}
