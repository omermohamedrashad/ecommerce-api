<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderLineRequest;
use App\Http\Requests\UpdateOrderLineRequest;
use App\Models\OrderLine;

class OrderLineController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderLineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderLineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderLine  $order_line
     * @return \Illuminate\Http\Response
     */
    public function show(OrderLine $order_line)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderLine  $order_line
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderLine $order_line)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderLineRequest  $request
     * @param  \App\Models\OrderLine  $order_line
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderLineRequest $request, OrderLine $order_line)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderLine  $order_line
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderLine $order_line)
    {
        //
    }
}
