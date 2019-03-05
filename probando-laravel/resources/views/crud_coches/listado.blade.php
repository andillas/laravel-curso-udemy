@extends('crud_coches.lyt')
@section('titulo')
    {{ isset($titulo)?$titulo:'' }}
@endsection

@section('contenido')

    <a href="{{ route('form_nuevo') }}">Nuevo coche</a>
    @if(isset($coches) && count($coches) > 0)
        <ul>
        @foreach($coches as $coche)
                <li><a href="{{ url('crud-coches/coche/' . $coche->id) }}">{{ $coche->marca }}{{ $coche->modelo }}</a>
                    <span>
                        <a href="{{ action('CrudCochesController@getFormUpdateCoche', ['id' => $coche->id]) }}">Editar</a>
                        <a href="{{ action('CrudCochesController@deleteCocheById', array('id' => $coche->id)) }}">Eliminar</a>
                    </span>
                </li>
        @endforeach
        </ul>
    @else
        <h4>Aún no hay coches para mostrar.</h4>
    @endif
@endsection