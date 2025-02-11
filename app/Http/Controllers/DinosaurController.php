<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Dinosaur;
use App\Http\Requests\StoreDinosaurRequest;
use App\Http\Requests\UpdateDinosaurRequest;
use App\Models\Environment;
use App\Models\Type;

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
        $diets = Diet::all();
        $environments = Environment::all();
        $types = Type::all();
        return view('dinosaurs.create', ['diets' => $diets, 'environments' => $environments, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDinosaurRequest $request)
    {
        Dinosaur::create($request->all());
        return 'Tárolva';
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
        $diets = Diet::all();
        $environments = Environment::all();
        $types = Type::all();
        return view('dinosaurs.edit', [
            'dinosaur' => $dinosaur,
            'diets' => $diets,
            'environments' => $environments,
            'types' => $types
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDinosaurRequest $request, Dinosaur $dinosaur)
    {
        $dinosaur->update($request->all());
        return 'Frissítve';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dinosaur $dinosaur)
    {
        $dinosaur->delete();
        return 'Törölve';
    }
}
