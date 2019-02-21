@extends('layauts.layout1')
@section('title', 'Pruebas huerto')
@section('content')
    <h2>Huerto</h2>
    <div>
        <nav>{{}}</nav>
        <ol>
        @foreach($hortalizas as $hortaliza)
            <li>{{ $hortaliza }}</li>
        @endforeach
        </ol>
    </div>
@stop