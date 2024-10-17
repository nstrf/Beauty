<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CosmetologistController;
use App\Http\Controllers\CosmetologistSessionController;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/cosmetologist-sessions/{id}', [CosmetologistSessionController::class, 'show'])->name('cosmetologist-sessions.show');
Route::get('/cosmetologist-sessions', [CosmetologistSessionController::class, 'index'])->name('cosmetologist-sessions.index');
Route::get('/cosmetologists/{id}', [CosmetologistController::class, 'show'])->name('cosmetologists.show');
Route::get('/cosmetologists', [CosmetologistController::class, 'index'])->name('cosmetologists.index');
