<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storepromotion_categoryRequest;
use App\Http\Requests\Updatepromotion_categoryRequest;
use App\Models\promotion_category;

class PromotionCategoryController extends Controller
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
     * @param  \App\Http\Requests\Storepromotion_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepromotion_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promotion_category  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function show(promotion_category $promotion_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promotion_category  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function edit(promotion_category $promotion_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepromotion_categoryRequest  $request
     * @param  \App\Models\promotion_category  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepromotion_categoryRequest $request, promotion_category $promotion_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promotion_category  $promotion_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(promotion_category $promotion_category)
    {
        //
    }
}
