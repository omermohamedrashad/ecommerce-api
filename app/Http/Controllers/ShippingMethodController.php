<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShippingMethodRequest;
use App\Http\Requests\UpdateShippingMethodRequest;
use App\Models\ShippingMethod;

class ShippingMethodController extends Controller
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
     * @param  \App\Http\Requests\StoreShippingMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingMethodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingMethod  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingMethod $shipping_method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingMethod  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingMethod $shipping_method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingMethodRequest  $request
     * @param  \App\Models\ShippingMethod  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingMethodRequest $request, ShippingMethod $shipping_method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingMethod  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingMethod $shipping_method)
    {
        //
    }
}
