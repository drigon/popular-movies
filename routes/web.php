<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{id}', [TvController::class, 'show'])->name('tv.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);
Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
