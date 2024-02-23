<?php

use Illuminate\Support\Facades\Route;

// include controllers
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\TechnologiesController;

Route::get('/', [ProjectsController::class, 'index']);

Route::get('/types', [TypesController::class, 'index']);

Route::get('/technologies', [TypesController::class, 'index']);