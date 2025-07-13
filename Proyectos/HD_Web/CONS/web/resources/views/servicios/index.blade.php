@extends('layouts.index')

@section('title', 'Servicios')

@section('content')
    <section id="servicios" class="section">
        <h2>Servicios</h2>
        <div class="cards">
            <!-- Servicio General 1 -->
            <div class="card">
                <h3>Diseño Web</h3>
                <p>Webs atractivas y funcionales que se adaptan a todos los dispositivos.</p>

                <ul style="text-align: left; padding-left: 1em;">
                    <li><strong>Landing Page</strong> – $100<br><small>Ideal para promociones o productos únicos.</small></li>
                    <li><strong>Web Corporativa</strong> – $250<br><small>Hasta 5 secciones (Inicio, Servicios, Nosotros, Contacto...)</small></li>
                    <li><strong>Web Personalizada</strong> – Desde $400<br><small>Diseño a medida con funcionalidades específicas.</small></li>
                </ul>
            </div>

            <!-- Servicio General 2 -->
            <div class="card">
                <h3>Tienda Online</h3>
                <p>Creamos tu ecommerce para que vendas por internet fácilmente.</p>

                <ul style="text-align: left; padding-left: 1em;">
                    <li><strong>Básica</strong> – $350<br><small>Hasta 20 productos, pagos integrados, diseño responsive.</small></li>
                    <li><strong>Avanzada</strong> – $550<br><small>Gestión de stock, cupones, envío, categorías avanzadas.</small></li>
                    <li><strong>A medida</strong> – Desde $750<br><small>Integraciones, panel de control personalizado, etc.</small></li>
                </ul>
            </div>
        </div>
    </section>
@endsection