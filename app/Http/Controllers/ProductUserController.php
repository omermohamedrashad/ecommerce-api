<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductUserRequest;
use App\Http\Requests\UpdateProductUserRequest;
use App\Models\ProductUser;

class ProductUserController extends Controller
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
     * @param  \App\Http\Requests\StoreProductUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductUser  $product_user
     * @return \Illuminate\Http\Response
     */
    public function show(ProductUser $product_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductUser  $product_user
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductUser $product_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductUserRequest  $request
     * @param  \App\Models\ProductUser  $product_user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductUserRequest $request, ProductUser $product_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductUser  $product_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductUser $product_user)
    {
        //
    }
}
