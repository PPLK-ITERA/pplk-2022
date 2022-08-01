<?php

namespace App\Http\Controllers\Client;

use App\Models\Keluhan;
use App\Http\Requests\StoreKeluhanRequest;
use App\Http\Requests\UpdateKeluhanRequest;

class ClientKeluhanController extends Controller
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
     * @param  \App\Http\Requests\StoreKeluhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeluhanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhan $Keluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhan $Keluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluhanRequest  $request
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluhanRequest $request, Keluhan $Keluhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhan $Keluhan)
    {
        //
    }
}
