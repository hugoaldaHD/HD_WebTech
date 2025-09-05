@extends('layouts.index')

@section('title', 'Nosotros')

@section('content')
    <section id="nosotros" class="section">
        <h2>Sobre Nosotros</h2>
        <p>
            En <strong>WebPro</strong> creemos en la innovación, el diseño atractivo y las soluciones digitales que generan impacto real. 
            Llevamos más de <strong>5 años</strong> ayudando a pequeñas y medianas empresas a crecer en el mundo online.
        </p>
    </section>

    <section id="mision-vision" class="section">
        <div class="cards">
            <div class="card">
                <h3>Nuestra Misión</h3>
                <p>
                    Impulsar a empresas y emprendedores a través de herramientas digitales modernas, 
                    creando sitios web que combinen funcionalidad, diseño y estrategia.
                </p>
            </div>
            <div class="card">
                <h3>Nuestra Visión</h3>
                <p>
                    Ser un referente en el desarrollo web a nivel nacional, reconocidos por la 
                    calidad, compromiso y creatividad de nuestros proyectos.
                </p>
            </div>
        </div>
    </section>

    <section id="equipo" class="section">
        <h2>Nuestro Equipo</h2>
        <div class="cards">
            <div class="card">
                <h3>Ana Gómez</h3>
                <p><em>CEO & Fundadora</em></p>
                <p>Apasionada por el diseño y la estrategia digital. Lidera el equipo con visión y energía.</p>
            </div>
            <div class="card">
                <h3>David López</h3>
                <p><em>Desarrollador Full Stack</em></p>
                <p>Especialista en Laravel, JavaScript y optimización de rendimiento web.</p>
            </div>
            <div class="card">
                <h3>Laura Martínez</h3>
                <p><em>Diseñadora UX/UI</em></p>
                <p>Convierte ideas en interfaces atractivas y fáciles de usar.</p>
            </div>
        </div>
    </section>
@endsection