<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/dinosaurs', DinosaurController::class);
Route::resource('/types', TypeController::class);
Route::resource('/environments', EnvironmentController::class);
Route::resource('/diets', DietController::class);