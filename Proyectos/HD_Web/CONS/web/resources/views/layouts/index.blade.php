<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <title>WebPro - Soluciones Web</title>
</head>
<body>
    <header>
        <h1><a href="{{ route('home') }}">WebPro</a></h1>
        <nav class="nav justify-content-center">
            <a href="{{ route('servicios') }}" class="nav-link {{ request()->routeIs('servicios') ? 'active' : '' }}">Servicios</a>
            <a href="{{ route('nosotros') }}" class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
            <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
            <a href="{{ route('contacto') }}" class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a>
            <a href="{{ route('carrito') }}" class="nav-link {{ request()->routeIs('carrito') ? 'active' : '' }}">
                <i class="fa-solid fa-cart-shopping" style="color: white; position:relative;">
                    <span id="cart-count" class="badge bg-danger rounded-pill" style="position:absolute; top:-10px; right:-15px; font-size:0.7rem;"></span>
                </i>
            </a>
        </nav>
    </header>

    @hasSection('breadcrumbs')
        <div class="container mt-3">
            @yield('breadcrumbs')
        </div>
    @endif

    @yield('content')

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WebPro - Todos los derechos reservados</p>
        <p>
          <a href="#" style="color:#fff; margin:0 10px;">Twitter</a> |
          <a href="#" style="color:#fff; margin:0 10px;">Instagram</a> |
          <a href="#" style="color:#fff; margin:0 10px;">LinkedIn</a>
        </p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const botones = document.querySelectorAll('.card .btn-success');
            const cartCount = document.getElementById('cart-count');
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        
            // Actualizar contador al cargar
            actualizarContador();
        
            botones.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const card = btn.closest('.card');
                
                    const nombre = card.querySelector('.card-title').innerText;
                    const precio = card.querySelector('.card-subtitle').innerText;
                    const soporteElem = card.querySelector('p strong') 
                        ? card.querySelector('p strong').parentNode 
                        : null;
                    const soporte = soporteElem ? soporteElem.innerText : '';
                
                    // Obtener detalles (lista de <li>)
                    const detalles = Array.from(card.querySelectorAll('ul li'))
                                          .map(li => li.innerText);
                
                    // Crear objeto del item
                    const item = {
                        nombre,
                        precio,
                        soporte,
                        detalles
                    };
                
                    // Añadir al carrito
                    carrito.push(item);
                    localStorage.setItem('carrito', JSON.stringify(carrito));
                
                    actualizarContador();
                });
            });
        
            function actualizarContador() {
                cartCount.innerText = carrito.length;
                cartCount.style.display = carrito.length > 0 ? 'inline-block' : 'none';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>