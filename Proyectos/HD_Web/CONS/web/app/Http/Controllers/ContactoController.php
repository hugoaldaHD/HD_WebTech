<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function servicios()
    {
        return view('servicios.index');
    }

    public function portfolio()
    {
        return view('portfolio.index');
    }

    public function contacto()
    {
        return view('contacto.index');
    }

    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'asunto' => 'required|string',
            'servicio' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        $precios = [
            'Landing Page' => '$100',
            'Web Corporativa' => '$250',
            'Web Personalizada' => 'Desde $400',
            'Ecommerce Básica' => '$350',
            'Ecommerce Avanzada' => '$550',
            'Ecommerce a Medida' => 'Desde $750',
        ];

        // Crear el array $datos con los campos que quieres enviar
        $datos = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'servicio' => $request->servicio,
            // Obtener el precio según el servicio seleccionado, o poner un texto por defecto
            'precio' => $precios[$request->servicio] ?? 'Precio no disponible',
            'mensaje' => $request->mensaje,
        ];

        Mail::to('hugo.aldacardenas@gmail.com')->send(new ContactoMail($datos));

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}