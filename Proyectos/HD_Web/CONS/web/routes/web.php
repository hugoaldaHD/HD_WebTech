<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('index');
});

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('enviar');