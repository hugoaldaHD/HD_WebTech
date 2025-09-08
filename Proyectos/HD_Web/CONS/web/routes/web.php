<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\CarritoController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/servicios', [ServiciosController::class, 'servicios'])->name('servicios');
Route::get('/nosotros', [NosotrosController::class, 'nosotros'])->name('nosotros');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('enviar');

// Carrito
Route::get('/carrito', [CarritoController::class, 'carrito'])->name('carrito');
Route::get('/carrito/direccion', [CarritoController::class, 'direccion'])->name('carrito.direccion');
Route::get('/carrito/entrega', [CarritoController::class, 'entrega'])->name('carrito.entrega');
Route::get('/carrito/pago', [CarritoController::class, 'pago'])->name('carrito.pago');
Route::get('/carrito/resumen', [CarritoController::class, 'resumen'])->name('carrito.resumen');