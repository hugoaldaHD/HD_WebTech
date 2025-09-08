@extends('layouts.index')

@section('title', 'Opciones de entrega')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            <li class="breadcrumb-item active" aria-current="page">Opciones de entrega</li>
        </ol>
    </nav>
@endsection

@section('content')
@include('checkout.partials.steps', ['step' => 3])

<section class="container my-5">
    <h2 class="mb-4">Opciones de entrega</h2>
    <form action="{{ route('carrito.pago') }}" method="GET">
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="entrega" id="standard" checked>
            <label class="form-check-label" for="standard">
                Envío estándar (3-5 días) - Gratis
            </label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="entrega" id="express">
            <label class="form-check-label" for="express">
                Envío express (24h) - $9.99
            </label>
        </div>
        <div class="text-end">
            <a href="{{ route('carrito.direccion') }}" class="btn btn-outline-secondary">Atrás</a>
            <a href="{{ route('carrito.pago') }}" class="btn btn-primary w-100">
                Continuar con la compra
            </a>
        </div>
    </form>
</section>
@endsection