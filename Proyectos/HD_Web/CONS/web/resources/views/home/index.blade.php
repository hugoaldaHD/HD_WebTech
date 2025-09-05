@extends('layouts.index')

@section('title', 'Inicio')

@section('content')

    <!-- Hero con fondo de imagen -->
    <section class="hero text-center text-white" style="background:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/img/hero-bg.jpg') center/cover no-repeat; padding:8em 2em;">
        <h1 class="display-4 mb-3">Impulsa tu negocio al mundo digital</h1>
        <p class="lead mb-4">Creamos soluciones web modernas, creativas y efectivas</p>
        <a href="/servicios" class="btn btn-primary btn-lg">Descubre nuestros servicios</a>
    </section>

    <!-- Servicios destacados -->
    <section class="section text-center">
        <h2 class="mb-4">Lo que ofrecemos</h2>
        <div class="cards">
            <div class="card p-4">
                <h3 class="mb-4">Diseño Web</h3>
                <p>Sitios elegantes, seguros y optimizados para cualquier dispositivo.</p>
            </div>
            <div class="card p-4">
                <h3 class="mb-4">Marketing Digital</h3>
                <p>Estrategias creativas para atraer clientes y aumentar tus ventas.</p>
            </div>
            <div class="card p-4">
                <h3 class="mb-4">Soporte Técnico</h3>
                <p>Asistencia rápida y confiable para mantener tu negocio online activo.</p>
            </div>
        </div>
        <a href="/servicios" class="btn btn-primary mt-5">Ver todos los servicios</a>
    </section>

    <!-- Sección Nosotros -->
    <section class="section bg-light text-center">
        <h2>Sobre Nosotros</h2>
        <p class="mx-auto" style="max-width:700px; font-size:1.1em; line-height:1.6;">
            Somos un equipo apasionado por el desarrollo web y el marketing digital. 
            Nuestra misión es ayudar a empresas y emprendedores a crecer en el mundo online 
            con soluciones innovadoras y personalizadas.
        </p>
        <a href="/nosotros" class="btn btn-primary mt-5">Conócenos</a>
    </section>

    <!-- Portfolio reducido en Home --><!-- Ocultado de momento no tenemos -->
    <!-- <section class="section">
        <h2 class="text-center mb-4">Proyectos Destacados</h2>
        <div class="row justify-content-center g-4">
            <div class="col-md-5 col-lg-2">
                <div class="card h-100">
                    <img src="img/proyecto1.jpg" alt="Proyecto 1" class="card-img-top rounded">
                    <div class="card-body text-center">
                        <h3>Cliente A</h3>
                        <p>Sitio moderno para una cafetería local.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-2">
                <div class="card h-100">
                    <img src="img/proyecto2.jpg" alt="Proyecto 2" class="card-img-top rounded">
                    <div class="card-body text-center">
                        <h3>Cliente B</h3>
                        <p>Tienda online para una marca de ropa.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/portfolio" class="btn btn-primary">Ver todos los proyectos</a>
        </div>
    </section> -->

    <!-- CTA Final -->
    <section class="section text-center text-white" style="background:linear-gradient(to right,#0d6efd,#0056d2); padding:4em 2em;">
        <h2 class="mb-3">¿Listo para tu proyecto?</h2>
        <p class="mb-4">Hablemos y llevemos tu negocio al siguiente nivel. Contactanos para algo mas personalizado o consulta nuestro catálogo de servicios.</p>
        <a href="/contacto" class="btn btn-light me-2">Contáctanos</a>
        <a href="/servicios" class="btn btn-light">Servicios</a>
    </section>

@endsection