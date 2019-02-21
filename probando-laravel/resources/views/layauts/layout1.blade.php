<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style>
        header{
            display: block;
            padding: 20px;
            margin: auto;
            background-color: cornflowerblue;
            color: antiquewhite;
        }
        #container{
            display: block;
            min-height: 350px;
        }
        footer{
            background-color: cornflowerblue;
            color: cornsilk;
            padding: 20px
        }
        .center{
            text-align: center
        }
    </style>
</head>
<body>
    @section('header')
        <header>
            <h1 class="center">Header</h1>
        </header>
    @show

    <div id="container">
        @yield('content')
    </div>

    @section('footer')
        <footer>
            <p class="center">Footer</p>
        </footer>
    @show
</body>
</html>