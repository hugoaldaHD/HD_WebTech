@extends('layouts.index')

@section('title', 'Carrito')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">WebPro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
        </ol>
    </nav>
@endsection

@section('content')

@include('checkout.partials.steps', ['step' => 1])

<!-- Sección carrito -->
<section id="carrito" class="container my-5">
    <div class="row">
        <!-- Productos -->
        <div class="col-lg-8">
            <h2 class="mb-4">Mi cesta</h2>
            <div class="list-group" id="carrito-items"></div>
        </div>
        <!-- Resumen compra -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-3 resumen-carrito">
                <h5 class="mb-3">Resumen de tu pedido</h5>
                <div id="carrito-total" class="fw-bold fs-5 text-success mb-3"></div>
                <ul id="carrito-resumen" class="list-unstyled small mb-3"></ul>
                <a href="{{ route('carrito.direccion') }}" class="btn btn-primary w-100">
                    Continuar con la compra
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const carritoItems = document.getElementById('carrito-items');
    const carritoTotal = document.getElementById('carrito-total');
    const carritoResumen = document.getElementById('carrito-resumen');
    const cartCount = document.getElementById('cart-count');
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    renderCarrito();

    function renderCarrito() {
        carritoItems.innerHTML = '';
        carritoTotal.innerHTML = '';
        carritoResumen.innerHTML = '';

        if (carrito.length === 0) {
            carritoItems.innerHTML = '<p class="p-3">Tu carrito está vacío.</p>';
            carritoTotal.innerText = '';
            carritoResumen.innerHTML = '';
            cartCount.innerText = 0;
            cartCount.style.display = 'none';
            return;
        }

        let total = 0;

        carrito.forEach((item, index) => {
            let precioNum = parseFloat(item.precio.replace(/[^0-9.]/g, '')) || 0;
            total += precioNum;

            const row = document.createElement('div');
            row.classList.add('list-group-item');
            row.innerHTML = `
                <div class="d-flex justify-content-between align-items-center">
                    <span><strong>${item.nombre}</strong></span>
                    <div>
                        <span class="text-success fw-bold me-3">${item.precio}</span>
                        <button class="btn btn-sm btn-info ver-detalles" data-index="${index}">
                            Ver detalles
                        </button>
                        <button class="btn btn-sm btn-danger eliminar" data-index="${index}">
                            Eliminar
                        </button>
                    </div>
                </div>
                <div class="detalles mt-3" id="detalles-${index}" style="display:none;">
                    <p class="text-muted mb-1">${item.soporte ?? ''}</p>
                    <ul class="mb-2">
                        ${(item.detalles ?? []).map(d => `<li>${d}</li>`).join('')}
                    </ul>
                </div>
            `;
            carritoItems.appendChild(row);

            // resumen
            const resumenItem = document.createElement('li');
            resumenItem.textContent = `${item.nombre} - ${item.precio}`;
            carritoResumen.appendChild(resumenItem);
        });

        carritoTotal.innerHTML = `Total: $${total}`;
        cartCount.innerText = carrito.length;
        cartCount.style.display = 'inline-block';

        // eliminar
        document.querySelectorAll('.eliminar').forEach(btn => {
            btn.addEventListener('click', () => {
                const index = btn.getAttribute('data-index');
                carrito.splice(index, 1);
                localStorage.setItem('carrito', JSON.stringify(carrito));
                renderCarrito();
            });
        });

        // ver detalles
        document.querySelectorAll('.ver-detalles').forEach(btn => {
            btn.addEventListener('click', () => {
                const index = btn.getAttribute('data-index');
                const detalles = document.getElementById('detalles-' + index);
                if (detalles.style.display === 'none') {
                    detalles.style.display = 'block';
                    btn.innerText = 'Ocultar detalles';
                } else {
                    detalles.style.display = 'none';
                    btn.innerText = 'Ver detalles';
                }
            });
        });
    }
});
</script>
@endsection