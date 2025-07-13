<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>WebPro - Soluciones Web</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>WebPro</h1>
        <nav>
            <ul>
                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- <section class="hero">
        <h2>Diseñamos tu presencia online</h2>
        <p>Desarrollamos páginas web modernas y efectivas para tu negocio.</p>
        <a href="#contacto" class="btn">Solicita tu web</a>
    </section> -->

    @yield('content')

    <footer>
        <p>&copy; 2025 WebPro. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>