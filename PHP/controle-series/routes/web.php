<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/series');
});


// View -> Route -> Controller > Action...


// 1º Modelo Inicial de Rotas
// Route::get('/series', [SeriesController::class, 'index']);
// Route::get('/series/criar', [SeriesController::class, 'create']);
// Route::post('/series/salvar', [SeriesController::class, 'store']);
// ====================

// 2º Modelo de Rotas
// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::post('/series/salvar', 'store')->name('series.store');
// });
// ====================

// 3º Modelo de Rotas
// Route::post('/series/destroy/{id}', [SeriesController::class, 'destroy']);
// Route::post('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy');
// Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy');
// Route::resource('/series', SeriesController::class);

// Route::resource('/series', SeriesController::class)
//     ->only(['index', 'create', 'store', 'destroy', 'edit']);


Route::resource('/series', SeriesController::class)
    ->except(['show']);


// Responsável por Buscar temporadas da série informada.
Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

Route::get('seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');