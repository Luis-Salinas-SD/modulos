<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App Laravel')</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS personalizado (opcional) -->
    @stack('styles')
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CATGEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="oficinasDropdownMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Oficinas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="oficinasDropdownMenu">
                            <li><a class="dropdown-item" href="#">Agregar Oficina</a></li>
                            <li><a class="dropdown-item" href="#">Asignar oficina</a></li>
                            <li><a class="dropdown-item" href="#">Gestión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="oficinasDropdownMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="oficinasDropdownMenu">
                            <li><a class="dropdown-item" href="#">Agregar Usuario</a></li>
                            <li><a class="dropdown-item" href="#">Gestión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="oficinasDropdownMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Modulos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="oficinasDropdownMenu">
                            <li><a class="dropdown-item" href="#">Agregar Modulo</a></li>
                            <li><a class="dropdown-item" href="#">Gestión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')




    <!-- Bootstrap JS Bundle (incluye Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tu JS personalizado (opcional) -->
    @stack('scripts')
</body>

</html>
