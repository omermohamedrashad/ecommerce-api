<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeorder_statusRequest;
use App\Http\Requests\Updateorder_statusRequest;
use App\Models\order_status;

class OrderStatusController extends Controller
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
     * @param  \App\Http\Requests\Storeorder_statusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_statusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function show(order_status $order_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function edit(order_status $order_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_statusRequest  $request
     * @param  \App\Models\order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_statusRequest $request, order_status $order_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_status $order_status)
    {
        //
    }
}
