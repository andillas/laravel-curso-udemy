@extends('layauts.layout1')
@section('title', 'Pruebas huerto')
@section('content')
    <h2>Huerto</h2>
    <div>
        <nav>
            <a href="{{ action('HuertoController@orderedHortalizas') }}">Ordered</a>
            <a href="{{ action('HuertoController@reversedHortalizas') }}">Reverse</a>
            <a href="{{ route('route_get_frutas') }}">Sólo Frutas</a>
            <a href="{{ route('route_get_hortalizas') }}">Sólo Hortalizas</a>
        </nav>
        <ol>
        @foreach($hortalizas as $hortaliza)
            <li>{{ $hortaliza }}</li>
        @endforeach
        </ol>
    </div>
@stop