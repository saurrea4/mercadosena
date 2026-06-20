<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h1>MercadoSENA</h1>
    <hr>

    <a href="{{ url('/') }}" class="btn btn-primary">Inicio</a>

    <a href="{{ url('categorias') }}" class="btn btn-secondary">
        Categorías
    </a>

    <br><br>

    @yield('content')

</div>

</body>
</html>