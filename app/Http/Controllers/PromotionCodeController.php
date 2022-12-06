<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storepromotion_codeRequest;
use App\Http\Requests\Updatepromotion_codeRequest;
use App\Models\promotion_code;

class PromotionCodeController extends Controller
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
     * @param  \App\Http\Requests\Storepromotion_codeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepromotion_codeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promotion_code  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function show(promotion_code $promotion_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promotion_code  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function edit(promotion_code $promotion_code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepromotion_codeRequest  $request
     * @param  \App\Models\promotion_code  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepromotion_codeRequest $request, promotion_code $promotion_code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promotion_code  $promotion_code
     * @return \Illuminate\Http\Response
     */
    public function destroy(promotion_code $promotion_code)
    {
        //
    }
}
