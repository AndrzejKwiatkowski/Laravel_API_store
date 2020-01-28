<?php

namespace App\Http\Controllers;

use App\Articele;
use Illuminate\Http\Request;

class ArticeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Articele::get();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articele  $articele
     * @return \Illuminate\Http\Response
     */
    public function show(Articele $articele)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articele  $articele
     * @return \Illuminate\Http\Response
     */
    public function edit(Articele $articele)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articele  $articele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articele $articele)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articele  $articele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articele $articele)
    {
        //
    }
}
