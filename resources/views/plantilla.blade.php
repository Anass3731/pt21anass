<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título dinámico de la pestaña del navegador -->
    <title>@yield('titulo', 'Venta de Coches')</title>
    
    <!-- Bootstrap 5 CSS: Estilos prediseñados para botones, tablas y formularios -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Menú de navegación superior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            
            <!-- Logo o título de la web con tu imagen local coche1.jpg -->
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
                Venta de Coches
            </a>
            
            <!-- Botón desplegable para pantallas móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Lista de enlaces del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/dondeestamos') }}">Donde estamos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/inserir') }}">Añadir coche</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/listar') }}">Ver catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url ('/buscar') }}">Buscar coche</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url ('/borrar') }}">Coche vendido</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url ('/modificar') }}">Modificar coche</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico principal -->
    <div class="container">
        @yield('contingut')
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>