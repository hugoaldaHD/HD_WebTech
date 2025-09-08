@extends('layouts.index')

@section('title', 'Servicios')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item" aria-current="page">Servicios</li>
        </ol>
    </nav>
@endsection

@section('content')
<section id="servicios" class="section">
    <h2 class="text-center mb-5">Servicios</h2>

    <!-- Tabs estilo header con barra inferior -->
    <ul class="nav-servicios mb-4" id="serviciosTab" role="tablist">
        <li role="presentation">
            <button class="nav-servicios-link active" id="diseño-tab" data-bs-toggle="tab" data-bs-target="#diseño" type="button" role="tab" aria-controls="diseño" aria-selected="true">
                Diseño Web
            </button>
        </li>
        <li role="presentation">
            <button class="nav-servicios-link" id="tienda-tab" data-bs-toggle="tab" data-bs-target="#tienda" type="button" role="tab" aria-controls="tienda" aria-selected="false">
                Tienda Online
            </button>
        </li>
    </ul>

    <!-- Contenido de las tabs -->
    <div class="tab-content" id="serviciosTabContent">
        <!-- Diseño Web -->
        <div class="tab-pane fade show active" id="diseño" role="tabpanel" aria-labelledby="diseño-tab">
            <div class="d-flex flex-wrap justify-content-center gap-4">
                
                <!-- Landing Page -->
                <div class="card shadow d-flex flex-column w-100" style="max-width:320px;">
                    <div class="card-body d-flex flex-column flex-grow-1 text-center">
                        <h5 class="card-title">Landing Page</h5>
                        <p class="card-text flex-grow-1">
                            Página ideal para campañas específicas, promociones o productos únicos.
                        </p>
                        <ul class="text-start small mx-auto">
                            <li>Diseño moderno y responsive</li>
                            <li>Sección de contacto integrada</li>
                            <li>Optimización básica en buscadores (SEO)</li>
                            <li>Entrega en 5 días hábiles</li>
                        </ul>
                        <p class="mb-1"><strong>Soporte:</strong> 1 mes gratuito</p>
                        <h6 class="card-subtitle mb-3"><strong>Precio: $100</strong></h6>
                    </div>
                    <a href="/carrito" class="btn btn-success">Contratar ahora</a>
                </div>

                <!-- Web Corporativa -->
                <div class="card shadow d-flex flex-column w-100" style="max-width:320px;">
                    <div class="card-body d-flex flex-column flex-grow-1 text-center">
                        <h5 class="card-title">Web Corporativa</h5>
                        <p class="card-text flex-grow-1">
                            Perfecta para empresas que necesitan presencia sólida en Internet.
                        </p>
                        <ul class="text-start small mx-auto">
                            <li>Hasta 5 secciones: Inicio, Servicios, Nosotros, Contacto...</li>
                            <li>Integración con WhatsApp, Google Maps y redes sociales</li>
                            <li>Diseño adaptable y profesional</li>
                            <li>Entrega en 10 días hábiles</li>
                        </ul>
                        <p class="mb-1"><strong>Soporte:</strong> 2 meses gratuitos</p>
                        <h6 class="card-subtitle mb-3"><strong>Precio: $250</strong></h6>
                    </div>
                    <a href="/carrito" class="btn btn-success">Contratar ahora</a>
                </div>

                <!-- Web Personalizada -->
                <div class="card shadow d-flex flex-column w-100" style="max-width:320px;">
                    <div class="card-body d-flex flex-column flex-grow-1 text-center">
                        <h5 class="card-title">Web Personalizada</h5>
                        <p class="card-text flex-grow-1">
                            Ideal para proyectos grandes que requieren funcionalidades únicas.
                        </p>
                        <ul class="text-start small mx-auto">
                            <li>Diseño completamente a medida</li>
                            <li>Funcionalidades avanzadas (blogs, reservas, panel admin)</li>
                            <li>Escalable y adaptable a tu negocio</li>
                            <li>Entrega según el alcance del proyecto</li>
                        </ul>
                        <p class="mb-1"><strong>Soporte:</strong> 3 meses gratuitos</p>
                        <h6 class="card-subtitle mb-3"><strong>Precio a partir de: $400</strong></h6>
                    </div>
                    <a href="/carrito" class="btn btn-success">Contratar ahora</a>
                </div>

            </div>
        </div>

        <!-- Tienda Online -->
        <div class="tab-pane fade" id="tienda" role="tabpanel" aria-labelledby="tienda-tab">
            <div class="d-flex flex-wrap justify-content-center gap-4">
                
                <!-- Básica -->
                <div class="card shadow d-flex flex-column w-100" style="max-width:320px;">
                    <div class="card-body d-flex flex-column flex-grow-1 text-center">
                        <h5 class="card-title">Tienda Básica</h5>
                        <p class="card-text flex-grow-1">
                            Perfecta para pequeños negocios que desean empezar a vender online.
                        </p>
                        <ul class="text-start small mx-auto">
                            <li>Hasta 20 productos</li>
                            <li>Pagos integrados (PayPal/Stripe)</li>
                            <li>Carrito de compras funcional</li>
                            <li>Diseño responsive</li>
                        </ul>
                        <p class="me-2"><strong>Soporte:</strong> 1 mes gratuito</p>
                        <h6 class="card-subtitle mb-3"><strong>Precio: $350</strong></h6>
                    </div>
                    <a href="/carrito" class="btn btn-success">Contratar ahora</a>
                </div>

                <!-- Avanzada -->
                <div class="card shadow d-flex flex-column w-100" style="max-width:320px;">
                    <div class="card-body d-flex flex-column flex-grow-1 text-center">
                        <h5 class="card-title">Tienda Avanzada</h5>
                        <p class="card-text flex-grow-1">
                            Para negocios que requieren mayor control y opciones de venta.
                        </p>
                        <ul class="text-start small mx-auto">
                            <li>Gestión de stock</li>
                            <li>Categorías avanzadas y cupones de descuento</li>
                            <li>Opciones de envío configurables</li>
                            <li>Soporte multimoneda</li>
                        </ul>
                        <p class="mb-1"><strong>Soporte:</strong> 2 meses gratuitos</p>
                        <h6 class="card-subtitle mb-3"><strong>Precio: $550</strong></h6>
                    </div>
                    <a href="/carrito" class="btn btn-success">Contratar ahora</a>
                </div>

                <!-- A medida -->
                <div class="card shadow d-flex flex-column w-100" style="max-width:320px;">
                    <div class="card-body d-flex flex-column flex-grow-1 text-center">
                        <h5 class="card-title">Tienda a Medida</h5>
                        <p class="card-text flex-grow-1">
                            La mejor opción para proyectos grandes con necesidades específicas.
                        </p>
                        <ul class="text-start small mx-auto">
                            <li>Integraciones con ERP o CRM</li>
                            <li>Panel de control personalizado</li>
                            <li>Funcionalidades avanzadas (suscripciones, membresías)</li>
                            <li>Escalabilidad total</li>
                        </ul>
                        <p class="mb-1"><strong>Soporte:</strong> 3 meses gratuitos</p>
                        <h6 class="card-subtitle mb-3"><strong>Precio a partir de: $750</strong></h6>
                    </div>
                    <a href="/carrito" class="btn btn-success">Contratar ahora</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Carrito dinámico -->
    <div id="carrito" class="card shadow mt-5 p-3" style="max-width:600px; margin: 0 auto; display:none;">
        <h5>Servicio seleccionado:</h5>
        <p id="carrito-nombre"></p>
        <p id="carrito-precio"></p>
        <a id="carrito-contratar" href="/carrito" class="btn btn-success w-100">Contratar</a>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const breadcrumbList = document.getElementById("breadcrumb-list");

        // Mostrar Diseño Web por defecto
        actualizarBreadcrumb("Diseño Web");

        // Ver cambios en los tabs
        document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(tabBtn => {
            tabBtn.addEventListener("shown.bs.tab", (e) => {
                const label = e.target.innerText.trim();
                actualizarBreadcrumb(label);
            });
        });

        function actualizarBreadcrumb(label) {
            breadcrumbList.innerHTML = `
                <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
                <li class="breadcrumb-item"><a>Servicios</a></li>
                <li class="breadcrumb-item active" aria-current="page">${label}</li>
            `;
        }
    });
</script>
@endsection