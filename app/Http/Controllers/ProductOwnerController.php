<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductOwnerRequest;
use App\Http\Requests\UpdateProductOwnerRequest;
use App\Models\ProductOwner;

class ProductOwnerController extends Controller
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
     * @param  \App\Http\Requests\StoreProductOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductOwnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductOwner  $product_Owner
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOwner $product_Owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductOwner  $product_Owner
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOwner $product_Owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductOwnerRequest  $request
     * @param  \App\Models\ProductOwner  $product_Owner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductOwnerRequest $request, ProductOwner $product_Owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductOwner  $product_Owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOwner $product_Owner)
    {
        //
    }
}
