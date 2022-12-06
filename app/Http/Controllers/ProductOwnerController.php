<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproduct_ownerRequest;
use App\Http\Requests\Updateproduct_ownerRequest;
use App\Models\product_owner;

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
     * @param  \App\Http\Requests\Storeproduct_ownerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_ownerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_owner  $product_owner
     * @return \Illuminate\Http\Response
     */
    public function show(product_owner $product_owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_owner  $product_owner
     * @return \Illuminate\Http\Response
     */
    public function edit(product_owner $product_owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_ownerRequest  $request
     * @param  \App\Models\product_owner  $product_owner
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_ownerRequest $request, product_owner $product_owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_owner  $product_owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_owner $product_owner)
    {
        //
    }
}
