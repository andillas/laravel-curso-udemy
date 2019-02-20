{{-- Esto es un comentario --}}
@include('basicas.fragments.header', array('param' => $param1))
<h1>Plantilla para hacer pruebas con el sistema de Blade</h1>

<h2>param1: {{isset($param1) ? $param1 : 'no viene'}}</h2>

@if(is_null($param1))
    <p>No llega el parámetro</p>
@else
    <p>El parámetro contiene: {{$param1}}</p>
@endif

<?php
//Se pueden escribir bloques de PHP normalmente
//En este caso lo voy a utilizar para crear variables
//sin necesidad de recibirlo por medio de la plantilla

   $arr_animales = ['perro', 'gato', 'pájaro', 'jirafa', 'burro', 'gallina', 'oveja'];
   $counter = 0;
   $tabla = 8;
?>
@for($i = 1; $i <= 10; $i++)
    <p>{{$tabla}} x {{$i}} = {{($i * $tabla)}}</p>
@endfor
<h4>Granja</h4>
@foreach($arr_animales as $animal)
    {{$animal}}<br>
@endforeach
<h4>Huerto</h4>
@foreach($huerto as $hortaliza)
    {{$hortaliza}}<br>
@endforeach

@include('basicas.fragments.footer')
