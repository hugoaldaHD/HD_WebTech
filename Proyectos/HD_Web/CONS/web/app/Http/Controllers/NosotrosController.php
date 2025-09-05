<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class NosotrosController extends Controller
{
    public function nosotros()
    {
        return view('nosotros.index');
    }
}