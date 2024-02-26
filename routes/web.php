<?php

use Illuminate\Support\Facades\Route;

// include controllers
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\TechnologiesController;

Route::get('/', [ProjectsController::class, 'index'])->name('route.index');

Route::get('/types', [TypesController::class, 'index']);

Route::get('/technologies', [TechnologiesController::class, 'index']);

Route::get('/create', [ProjectsController::class, 'create'])->name('route.createNewProject');

Route::post('/create', [ProjectsController::class, 'store'])->name('route.storeNewProject');

Route::get('/{id}/edit', [ProjectsController::class, 'edit'])->name('route.editProject');

Route::put('/{id}', [ProjectsController::class, 'update'])->name('route.updateProject');