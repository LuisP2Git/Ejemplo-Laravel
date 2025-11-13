<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Principal')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- NAVBAR SUPERIOR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Mi App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('productos*') ? 'active' : '' }}" href="{{ route('productos.index') }}">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('vendedores*') ? 'active' : '' }}" href="{{ route('vendedores.index') }}">
                            Vendedores
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- CONTENIDO PRINCIPAL --}}
    <main class="container mb-5">
        @yield('content')
    </main>

    {{-- PIE DE PÁGINA --}}
    <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <small>&copy; {{ date('Y') }} Mi Aplicación Laravel — Desarrollado por Luis Berdugo</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
