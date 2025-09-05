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
            <a href="{{ route('carrito') }}" class="nav-link {{ request()->routeIs('carrito') ? 'active' : '' }}"><i class="fa-solid fa-cart-shopping" style="color: white;"></i></a>
        </nav>
    </header>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>