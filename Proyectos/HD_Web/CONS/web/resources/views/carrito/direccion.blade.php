@extends('layouts.index')

@section('title', 'Dirección de envío')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            <li class="breadcrumb-item active" aria-current="page">Dirección de envío</li>
        </ol>
    </nav>
@endsection

@section('content')
@include('checkout.partials.steps', ['step' => 2])

<section class="container my-5">
    <h2 class="mb-4">Dirección de envío</h2>
    <form action="{{ route('carrito.entrega') }}" method="GET" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nombre completo</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Teléfono</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-12">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Ciudad</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Código Postal</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-12 text-end">
            <a href="{{ route('carrito') }}" class="btn btn-outline-secondary">Atrás</a>
            <a href="{{ route('carrito.entrega') }}" class="btn btn-primary w-100">
                Continuar con la compra
            </a>
        </div>
    </form>
</section>
@endsection