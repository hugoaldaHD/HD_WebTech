<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ServiciosController extends Controller
{
    public function servicios()
    {
        return view('servicios.index');
    }
}