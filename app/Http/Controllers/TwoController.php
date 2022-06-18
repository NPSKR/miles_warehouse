<?php

namespace App\Http\Controllers;

use App\Models\Two;
use App\Http\Requests\StoreTwoRequest;
use App\Http\Requests\UpdateTwoRequest;

class TwoController extends Controller
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
     * @param  \App\Http\Requests\StoreTwoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTwoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Two  $two
     * @return \Illuminate\Http\Response
     */
    public function show(Two $two)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Two  $two
     * @return \Illuminate\Http\Response
     */
    public function edit(Two $two)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTwoRequest  $request
     * @param  \App\Models\Two  $two
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTwoRequest $request, Two $two)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Two  $two
     * @return \Illuminate\Http\Response
     */
    public function destroy(Two $two)
    {
        //
    }
}
