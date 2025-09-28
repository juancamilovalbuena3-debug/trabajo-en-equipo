<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motrix</title>
    {{-- Laravel: usa mix o vite si tienes assets --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <nav>
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">Motrix</a>

                <!-- Menú Izquierda -->
                <div class="nav-left">
                    <a href="{{ url('/') }}">Inicio</a>
                    <a href="#">Carros</a>
                    <a href="#">Motos</a>
                    <a href="{{ url('vender') }}">Vender Vehículo</a>
                </div>

                <!-- Menú Derecha -->
                <div class="nav-right">
                    <a href="{{ route('login') }}">Inicia Sesión</a>
                    <a href="{{ route('register') }}">Regístrate</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <section class="header-content">
        <h1>Cotiza tu nuevo vehículo</h1>
        <p>Encuentra la mejor opción en Motrix para adquirir tu carro o moto.</p>
        <a href="#" class="btn-1">Más Información</a>
    </section>
</body>
</html>
