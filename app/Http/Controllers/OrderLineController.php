<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeorder_lineRequest;
use App\Http\Requests\Updateorder_lineRequest;
use App\Models\order_line;

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
     * @param  \App\Http\Requests\Storeorder_lineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_lineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_line  $order_line
     * @return \Illuminate\Http\Response
     */
    public function show(order_line $order_line)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_line  $order_line
     * @return \Illuminate\Http\Response
     */
    public function edit(order_line $order_line)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_lineRequest  $request
     * @param  \App\Models\order_line  $order_line
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_lineRequest $request, order_line $order_line)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_line  $order_line
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_line $order_line)
    {
        //
    }
}
