<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class CarritoController extends Controller
{
    public function carrito()
    {
        return view('carrito.index');
    }

    public function direccion()
    {
        return view('carrito.direccion');
    }

    public function entrega()
    {
        return view('carrito.entrega');
    }

    public function pago()
    {
        return view('carrito.pago');
    }

    public function resumen()
    {
        return view('carrito.resumen');
    }
}