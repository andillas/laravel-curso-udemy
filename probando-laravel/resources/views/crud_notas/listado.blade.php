@extends('crud_notas.lyt.base')
@section('titulo', 'Listado de Notas')
@section('contenido')

    <h2>Aquí irá el listado de todas las notas.</h2>

    @foreach($notas as $nota)
        <a href="{{ url('crud/nota/' . $nota->id) }}">
        <p>{{ $nota->nombre }}
        <br>
            {{ $nota->descripcion }}
        </p>
        </a>
    @endforeach

@endsection