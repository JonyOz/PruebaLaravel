<!--Esto de aqui es el layaout o la base que se repite en todas las vistas-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img class="logo" src="{{ asset('img/logo.jpeg') }}" alt="logo">
            <a class="navbar-brand" href="/">Prueba</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/acerca">Acerca</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portafolio">Portafolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/formulario">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="/formularios">Mensajes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <p>Copyright @ 2025. Jonathan Moreno derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>