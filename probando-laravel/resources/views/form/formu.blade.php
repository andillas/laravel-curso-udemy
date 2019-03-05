@extends('layauts.layout1')
@section('title', 'Formulario')
@section('content')
    <h1>Formulario en Laravel</h1>
    <form action="{{ route('rt_send_formu') }}" method="post">

        {{--
        Para evitar el error TokenMismatchException
         Se puede hacer de las siguientes dos maneras:

         Así:
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        O así:
        csrf_field()
        --}}

        {{ csrf_field() }}
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="desc">Descripción</label>
            <textarea name="desc"></textarea>
        </p>
        <button>Enviar</button>
    </form>
@endsection