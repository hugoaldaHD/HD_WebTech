@extends('layouts.index')

@section('title', 'Contacto')

@section('content')
    <section id="contacto" class="section contacto">
        <h2>Contáctanos</h2>
        @if(session('success'))
            <p class="mensaje-confirmacion">{{ session('success') }}</p>
        @endif

        <form action="{{ route('enviar') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="asunto">Asunto:</label>
            <select name="asunto" id="asunto" required>
                <option value="">-- Selecciona un asunto --</option>
                <option value="Pedido">Pedido</option>
                <option value="Incidencia">Incidencia</option>
                <option value="Consulta">Consulta</option>
            </select>

            <div id="servicio-container">
                <label for="servicio">Tipo de página</label>
                <select name="servicio" id="servicio">
                    <option value="">-- Selecciona un servicio --</option>
                    <optgroup label="Diseño Web">
                        <option value="Landing Page">Landing Page – $100</option>
                        <option value="Web Corporativa">Web Corporativa – $250</option>
                        <option value="Web Personalizada">Web Personalizada – Desde $400</option>
                    </optgroup>
                    <optgroup label="Tienda Online">
                        <option value="Ecommerce Básica">Ecommerce Básica – $350</option>
                        <option value="Ecommerce Avanzada">Ecommerce Avanzada – $550</option>
                        <option value="Ecommerce a Medida">Ecommerce a Medida – Desde $750</option>
                    </optgroup>
                </select>
            </div>

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5" required></textarea>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>
@endsection