@extends('layauts.layout1')
@section('title', 'Pruebas huerto')
@section('content')
    <h2>{{ (isset($tipo) && !is_null($tipo)) ? $tipo : 'Huerto'  }}</h2>
    <div>
        <nav>
            <a href="{{ action('HuertoController@orderedHortalizas') }}">Ordered</a>
            <a href="{{ action('HuertoController@reversedHortalizas') }}">Reverse</a>
        </nav>
        <ol>
        @foreach($hortalizas as $hortaliza)
            <li>{{ $hortaliza }}</li>
        @endforeach
        </ol>
    </div>
@stop