<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneticTestController;

Route::get('/exames', [GeneticTestController::class, 'index'])->name('genetic-tests.index');
Route::get('/exames/novo', [GeneticTestController::class, 'create'])->name('genetic-tests.create');
Route::post('/exames', [GeneticTestController::class, 'store'])->name('genetic-tests.store');