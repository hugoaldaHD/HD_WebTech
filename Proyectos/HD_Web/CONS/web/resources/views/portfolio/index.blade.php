@extends('layouts.index')

@section('title', 'Portfolio')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item" aria-current="page">Portfolio</li>
        </ol>
    </nav>
@endsection

@section('content')
    <section id="portafolio" class="section">
        <h2>Portfolio</h2>
        <div class="cards">
            <div class="card">
                <h3>Cliente A</h3>
                <p>Sitio moderno para una cafetería local.</p>
            </div>
            <div class="card">
                <h3>Cliente B</h3>
                <p>Tienda online para una marca de ropa.</p>
            </div>
        </div>
    </section>
@endsection