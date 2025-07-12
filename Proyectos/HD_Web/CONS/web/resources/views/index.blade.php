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
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#portafolio">Portafolio</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Diseñamos tu presencia online</h2>
        <p>Desarrollamos páginas web modernas y efectivas para tu negocio.</p>
        <a href="#contacto" class="btn">Solicita tu web</a>
    </section>

    <section id="servicios" class="section">
      <h2>Servicios</h2>
    
      <div class="cards">
        <!-- Servicio General 1 -->
        <div class="card">
          <h3>Diseño Web</h3>
          <p>Webs atractivas y funcionales que se adaptan a todos los dispositivos.</p>
    
          <ul style="text-align: left; padding-left: 1em;">
            <li><strong>Landing Page</strong> – $100<br><small>Ideal para promociones o productos únicos.</small></li>
            <li><strong>Web Corporativa</strong> – $250<br><small>Hasta 5 secciones (Inicio, Servicios, Nosotros, Contacto...)</small></li>
            <li><strong>Web Personalizada</strong> – Desde $400<br><small>Diseño a medida con funcionalidades específicas.</small></li>
          </ul>
        </div>
    
        <!-- Servicio General 2 -->
        <div class="card">
          <h3>Tienda Online</h3>
          <p>Creamos tu ecommerce para que vendas por internet fácilmente.</p>
    
          <ul style="text-align: left; padding-left: 1em;">
            <li><strong>Básica</strong> – $350<br><small>Hasta 20 productos, pagos integrados, diseño responsive.</small></li>
            <li><strong>Avanzada</strong> – $550<br><small>Gestión de stock, cupones, envío, categorías avanzadas.</small></li>
            <li><strong>A medida</strong> – Desde $750<br><small>Integraciones, panel de control personalizado, etc.</small></li>
          </ul>
        </div>
      </div>
    </section>

    <section id="portafolio" class="section">
        <h2>Portafolio</h2>
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

    <section id="contacto" class="section contacto">
        <h2>Contáctanos</h2>
        @if(session('success'))
            <p class="mensaje-confirmacion">{{ session('success') }}</p>
        @endif

        <form action="{{ route('enviar') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="asunto">Asunto:</label>
            <select name="asunto" id="asunto" required>
                <option value="">-- Selecciona un asunto --</option>
                <option value="Pedido">Pedido</option>
                <option value="Incidencia">Incidencia</option>
                <option value="Consulta">Consulta</option>
            </select>

            <div id="servicio-container">
                <label for="servicio">Tipo de página</label>
                <select name="servicio" id="servicio">
                    <option value="">-- Selecciona un servicio --</option>
                    <optgroup label="Diseño Web">
                        <option value="Landing Page">Landing Page – $100</option>
                        <option value="Web Corporativa">Web Corporativa – $250</option>
                        <option value="Web Personalizada">Web Personalizada – Desde $400</option>
                    </optgroup>
                    <optgroup label="Tienda Online">
                        <option value="Ecommerce Básica">Ecommerce Básica – $350</option>
                        <option value="Ecommerce Avanzada">Ecommerce Avanzada – $550</option>
                        <option value="Ecommerce a Medida">Ecommerce a Medida – Desde $750</option>
                    </optgroup>
                </select>
            </div>

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5" required></textarea>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 WebPro. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>