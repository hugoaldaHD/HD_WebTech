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
}