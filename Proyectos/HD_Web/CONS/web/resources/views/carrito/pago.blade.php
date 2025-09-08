@extends('layouts.index')

@section('title', 'Método de pago')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            <li class="breadcrumb-item active" aria-current="page">Método de pago</li>
        </ol>
    </nav>
@endsection

@section('content')
@include('checkout.partials.steps', ['step' => 4])

<section class="container my-5">
    <h2 class="mb-4">Método de pago</h2>
    <form action="{{ route('carrito.resumen') }}" method="GET">
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="pago" id="tarjeta" checked>
            <label class="form-check-label" for="tarjeta">Tarjeta de crédito/débito</label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="pago" id="paypal">
            <label class="form-check-label" for="paypal">PayPal</label>
        </div>
        <div class="text-end">
            <a href="{{ route('carrito.entrega') }}" class="btn btn-outline-secondary">Atrás</a>
            <a href="{{ route('carrito.resumen') }}" class="btn btn-primary w-100">
                Continuar con la compra
            </a>
        </div>
    </form>
</section>
@endsection