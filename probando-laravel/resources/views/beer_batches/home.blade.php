@extends('beer_batches.lyt')
@section('title', $title)
@section('contenido')
    <section class="container">
        <div class="row">
            <div class="col-lg-4">
                <p><a href="{{route('rt_list_lote')}}">Nuevo lote</a></p>
            </div>
            <div class="col-lg-4">
                <p><a href="{{ route('rt_list_lupulo') }}">Lúpulos</a></p>
            </div>
            <div class="col-lg-4">
                <p><a href="{{ route('rt_list_malta') }}">Maltas</a></p>
            </div>
        </div>
    </section>
@stop