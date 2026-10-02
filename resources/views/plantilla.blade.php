<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Venda de Cotxes')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Mi Venda Coches</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inici</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/nosaltres') }}">Nosaltres</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/onestem') }}">On estem</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/inserir') }}">Inserir</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/listar') }}">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/modificar') }}">Modificar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/borrar') }}">Borrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="container">
        @yield('contingut')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5 py-3 border-top">
        <div class="text-center p-3">
            © 2026 - Pràctica Pt2.1 DAW2
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>