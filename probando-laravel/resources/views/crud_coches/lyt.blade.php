<html>
<meta charset="utf-8">
<head>
<title>CRUD Cars - @yield('titulo')</title>
    <style>
        *{
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        header{display: block;
            width: 100%;
            background: chocolate;
            text-align: center;
            color: cornsilk;
        }
        footer{
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 120px;
        }
    </style>
</head>
<body>
<header>
    <h1>Crud Coches</h1>
</header>
<div id="contenido">
    @section('contenido')

    @show
</div>
<footer> -- Coches -- </footer>
</body>
</html>