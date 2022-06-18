<?php

namespace App\Http\Controllers;

use App\Models\Three;
use App\Http\Requests\StoreThreeRequest;
use App\Http\Requests\UpdateThreeRequest;

class ThreeController extends Controller
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
     * @param  \App\Http\Requests\StoreThreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function show(Three $three)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function edit(Three $three)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThreeRequest  $request
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThreeRequest $request, Three $three)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function destroy(Three $three)
    {
        //
    }
}
