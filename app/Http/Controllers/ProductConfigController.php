<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproduct_configRequest;
use App\Http\Requests\Updateproduct_configRequest;
use App\Models\product_config;

class ProductConfigController extends Controller
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
     * @param  \App\Http\Requests\Storeproduct_configRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_configRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_config  $product_config
     * @return \Illuminate\Http\Response
     */
    public function show(product_config $product_config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_config  $product_config
     * @return \Illuminate\Http\Response
     */
    public function edit(product_config $product_config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_configRequest  $request
     * @param  \App\Models\product_config  $product_config
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_configRequest $request, product_config $product_config)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_config  $product_config
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_config $product_config)
    {
        //
    }
}
