<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Http\Requests\StoreDietRequest;
use App\Http\Requests\UpdateDietRequest;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dinosaurs = Diet::all()[0]->dinosaurs[0]->type->name;
        dd($dinosaurs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDietRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diet $diet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDietRequest $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diet $diet)
    {
        //
    }
}
