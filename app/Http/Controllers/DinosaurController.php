<?php

namespace App\Http\Controllers;

use App\Models\Dinosaur;
use App\Http\Requests\StoreDinosaurRequest;
use App\Http\Requests\UpdateDinosaurRequest;

class DinosaurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dinosaurs = Dinosaur::all();
        return view('dinosaurs.index', ['dinosaurs' => $dinosaurs]);
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
    public function store(StoreDinosaurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dinosaur $dinosaur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dinosaur $dinosaur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDinosaurRequest $request, Dinosaur $dinosaur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dinosaur $dinosaur)
    {
        //
    }
}
