<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movies}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);

Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
