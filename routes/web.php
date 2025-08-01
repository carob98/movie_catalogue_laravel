<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('pages.homepage');
Route::get('/films', [FilmController::class, 'index'])->name('films.index'); //ci vorrà middleware che controlla se auth
// solo admin
Route::get('/films/aggiungi-film', [FilmController::class, 'create'])->name('films.create');
Route::post('/films', [FilmController::class, 'store'])->name('films.store');
