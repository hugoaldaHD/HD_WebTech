@extends('layouts.index')

@section('title', 'Nosotros')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item" aria-current="page">Nosotros</li>
        </ol>
    </nav>
@endsection

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
                <h3>Hugo Alda</h3>
                <p><em>CEO & Fundador</em></p>
                <p>Especialista en Laravel, JavaScript y optimización de rendimiento web. Lidera el equipo con visión y energía.</p>
            </div>
            <div class="card">
                <h3>Dylan Castles</h3>
                <p><em>CEO & Fundador</em></p>
                <p>Especialista en Laravel, JavaScript y optimización de rendimiento web. Apasionado por el diseño y la estrategia digital.</p>
            </div>
        </div>
    </section>
@endsection