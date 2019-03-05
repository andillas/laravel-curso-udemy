@extends('crud_coches.lyt')
@section('titulo', isset($titulo)?$titulo:'')
@section('contenido')
    @if(isset($coche) && !empty($coche))
        <div>
            <p>
                MARCA <br>
                {{ $coche->marca }}
            </p>
            <p>
                MODELO <br>
                {{ $coche->modelo }}
            </p>
            <a href="{{ route('listado_coches') }}">Volver al listado</a>
        </div>
    @else
        No se encuentra el coche
    @endif
@endsection