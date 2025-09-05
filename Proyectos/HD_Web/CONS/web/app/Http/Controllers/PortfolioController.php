<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('portfolio.index');
    }
}