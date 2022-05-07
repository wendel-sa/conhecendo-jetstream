<?php

namespace App\Http\Controllers;

use App\Models\professores;
use App\Http\Requests\StoreprofessoresRequest;
use App\Http\Requests\UpdateprofessoresRequest;

class ProfessoresController extends Controller
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
     * @param  \App\Http\Requests\StoreprofessoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofessoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function show(professores $professores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function edit(professores $professores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofessoresRequest  $request
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofessoresRequest $request, professores $professores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function destroy(professores $professores)
    {
        //
    }
}
