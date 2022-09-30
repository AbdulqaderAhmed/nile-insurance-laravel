<?php

use App\Http\Controllers\InsurancesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::controller(InsurancesController::class)->middleware(['isAdmin'])->group(function () {
    Route::get('/dashboard', 'dashboard');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/show/{id}', 'show');
    Route::put('/edit/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
});

Route::controller(InsurancesController::class)->middleware(['auth'])->group(function () {
    Route::get('/', 'index');
});
