<?php

namespace App\Http\Controllers\Client;

use App\Models\Kamusgaul;
use App\Http\Requests\StoreKamusgaulRequest;
use App\Http\Requests\UpdateKamusgaulRequest;

class ClientKamusgaulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamus_gauls = Kamusgaul::all();
        return view('client.kamus-gaul', compact('kamus_gauls'));
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
     * @param  \App\Http\Requests\StoreKamusgaulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKamusgaulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */
    public function show(Kamusgaul $kamusgaul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamusgaul $kamusgaul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKamusgaulRequest  $request
     * @param  \App\Models\Kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKamusgaulRequest $request, Kamusgaul $kamusgaul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamusgaul $kamusgaul)
    {
        //
    }
}
