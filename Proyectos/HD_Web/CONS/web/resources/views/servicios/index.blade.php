@extends('layouts.index')

@section('title', 'Servicios')

@section('content')
<section id="servicios" class="section">
    <h2 class="text-center mb-5">Servicios</h2>

    <!-- Tabs de selección -->
    <ul class="nav nav-tabs justify-content-center mb-4" id="serviciosTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="diseño-tab" data-bs-toggle="tab" data-bs-target="#diseño" type="button" role="tab" aria-controls="diseño" aria-selected="true">
                Diseño Web
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tienda-tab" data-bs-toggle="tab" data-bs-target="#tienda" type="button" role="tab" aria-controls="tienda" aria-selected="false">
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
                <div class="card shadow d-flex flex-column" style="max-width: 300px; transition: transform 0.3s, box-shadow 0.3s;">
                    <!-- Contenido que crece -->
                    <div class="card-body flex-grow-1 d-flex flex-column">
                        <h5 class="card-title text-center">Landing Page</h5>
                        <p class="card-text text-center">Ideal para promociones o productos únicos. Diseño rápido y moderno.</p>
                        <h6 class="card-subtitle mb-2 text-center">$100</h6>
                    </div>
                    <!-- Botón pegado al fondo -->
                    <a href="/contacto" class="btn btn-light w-100 mt-auto">Contratar</a>
                </div>

                <!-- Web Corporativa -->
                <div class="card shadow d-flex flex-column" style="max-width:300px; transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">Web Corporativa</h5>
                        <p class="card-text">Hasta 5 secciones: Inicio, Servicios, Nosotros, Contacto... Diseño profesional.</p>
                        <h6 class="card-subtitle mb-2">$250</h6>
                    </div>
                    <a href="/contacto" class="btn btn-light w-100 mt-auto">Contratar</a>
                </div>

                <!-- Web Personalizada -->
                <div class="card shadow d-flex flex-column" style="max-width:300px; transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">Web Personalizada</h5>
                        <p class="card-text">Diseño a medida con funcionalidades específicas. Ideal para grandes proyectos.</p>
                        <h6 class="card-subtitle mb-2">Desde $400</h6>
                    </div>
                    <a href="/contacto" class="btn btn-light w-100 mt-auto">Contratar</a>
                </div>
            </div>
        </div>

        <!-- Tienda Online -->
        <div class="tab-pane fade" id="tienda" role="tabpanel" aria-labelledby="tienda-tab">
            <div class="d-flex flex-wrap justify-content-center gap-4">
                <!-- Básica -->
                <div class="card shadow d-flex flex-column" style="max-width:300px; transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">Básica</h5>
                        <p class="card-text">Hasta 20 productos, pagos integrados, diseño responsive.</p>
                        <h6 class="card-subtitle mb-2">$350</h6>
                    </div>
                    <a href="/contacto" class="btn btn-light w-100 mt-auto">Contratar</a>
                </div>

                <!-- Avanzada -->
                <div class="card shadow d-flex flex-column" style="max-width:300px; transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">Avanzada</h5>
                        <p class="card-text">Gestión de stock, cupones, envío, categorías avanzadas.</p>
                        <h6 class="card-subtitle mb-2">$550</h6>
                    </div>
                    <a href="/contacto" class="btn btn-light w-100 mt-auto">Contratar</a>
                </div>

                <!-- A medida -->
                <div class="card shadow d-flex flex-column" style="max-width:300px; transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">A medida</h5>
                        <p class="card-text">Integraciones, panel de control personalizado, funcionalidades avanzadas.</p>
                        <h6 class="card-subtitle mb-2">Desde $750</h6>
                    </div>
                    <a href="/contacto" class="btn btn-light w-100 mt-auto">Contratar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection