<?php

namespace App\Http\Controllers;

use App\Models\One;
use App\Http\Requests\StoreOneRequest;
use App\Http\Requests\UpdateOneRequest;

class OneController extends Controller
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
     * @param  \App\Http\Requests\StoreOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function show(One $one)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function edit(One $one)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOneRequest  $request
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOneRequest $request, One $one)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function destroy(One $one)
    {
        //
    }
}
