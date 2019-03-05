@extends('crud_notas.lyt.base')
@section('titulo', 'Nota ' . $id)
@section('contenido')
    <p>
        {{ $nota->id }}
        <br>
        {{ $nota->nombre }}
        <br>
        {{ $nota->descripcion }}
        <br>
        {{ $nota->created_at }}
        <br>
        {{ $nota->updated_at }}
    </p>

    <p><a href="{{ action('CrudController@listNotas') }}">Volver al listado</a></p>
    <p><a href="{{ route('listado_notas') }}">Volver al listado</a></p>
@endsection