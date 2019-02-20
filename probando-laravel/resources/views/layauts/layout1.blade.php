<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
        <h1>Default header</h1>
    @show
    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        <footer>Default footer</footer>
    @show
</body>
</html>