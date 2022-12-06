<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storecart_itemRequest;
use App\Http\Requests\Updatecart_itemRequest;
use App\Models\cart_item;

class CartItemController extends Controller
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
     * @param  \App\Http\Requests\Storecart_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecart_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function show(cart_item $cart_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function edit(cart_item $cart_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecart_itemRequest  $request
     * @param  \App\Models\cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecart_itemRequest $request, cart_item $cart_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart_item $cart_item)
    {
        //
    }
}
