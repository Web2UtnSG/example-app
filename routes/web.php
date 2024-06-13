<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'showWelcome']);
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{movie}', [MoviesController::class, 'show']);

