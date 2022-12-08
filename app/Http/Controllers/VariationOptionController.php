<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVariationOptionRequest;
use App\Http\Requests\UpdateVariationOptionRequest;
use App\Models\VariationOption;

class VariationOptionController extends Controller
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
     * @param  \App\Http\Requests\StoreVariationOptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVariationOptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VariationOption  $variation_Option
     * @return \Illuminate\Http\Response
     */
    public function show(VariationOption $variation_Option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VariationOption  $variation_Option
     * @return \Illuminate\Http\Response
     */
    public function edit(VariationOption $variation_Option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVariationOptionRequest  $request
     * @param  \App\Models\VariationOption  $variation_Option
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVariationOptionRequest $request, VariationOption $variation_Option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VariationOption  $variation_Option
     * @return \Illuminate\Http\Response
     */
    public function destroy(VariationOption $variation_Option)
    {
        //
    }
}
