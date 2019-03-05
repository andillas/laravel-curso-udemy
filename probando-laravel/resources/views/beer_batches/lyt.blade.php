{{-- Layout beerbatches admin --}}
<html>
<meta charset="utf-8">
<head>
<title>@yield('title')  - Beer Batches Administrator</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>

<header>
    <div class="jumbotron container">
        <h1 class="container">Gestor de lotes</h1>
    </div>
</header>
<nav class="container">
    <ul class="nav nav-tabs">
        <li id="nav_lote"><a href="{{route('rt_listado_lote')}}">Lotes</a></li>
        <li id="nav_lupulo"><a href="{{route('rt_listado_lupulo')}}">Lúpulos</a></li>
        <li id="nav_malta"><a href="{{ route('rt_listado_malta') }}">Maltas</a></li>
    </ul>
</nav>

@section('contenido')
    <h2>Aquí va el contenido</h2>
@show


<footer class="page-footer font-small blue pt-4" style="margin-top: 100px;">
    <div class="panel panel-default container">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">BEER BATCHES ADMINISTRADOR</h5>
                    <p>Desde aquí se puede acceder a todas las secciones del administrador.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Andillas.com</a>
        </div>
        <!-- Copyright -->
    </div>


  </footer>
</body>
</html>