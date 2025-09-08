@extends('layouts.index')

@section('title', 'Resumen')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            <li class="breadcrumb-item active" aria-current="page">Resumen</li>
        </ol>
    </nav>
@endsection

@section('content')
@include('checkout.partials.steps', ['step' => 5])

<section class="container my-5">
    <h2 class="mb-4">Resumen</h2>
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
            <a href="{{ route('carrito.pago') }}" class="btn btn-outline-secondary">Atrás</a>
            <a href="{{ route('home') }}" class="btn btn-success w-100">
                Finalizar compra
            </a>
        </div>
    </form>
</section>
@endsection