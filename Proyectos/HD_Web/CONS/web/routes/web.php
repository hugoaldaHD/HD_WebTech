<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/servicios', [ContactoController::class, 'servicios'])->name('servicios');
Route::get('/portfolio', [ContactoController::class, 'portfolio'])->name('portfolio');
Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('enviar');