@extends('crud_coches.lyt')
@section('titulo', isset($titulo)?$titulo:'')
@section('contenido')
    <form action="{{ !isset($coche) ? action('CrudCochesController@createCoche') : action('CrudCochesController@updateCocheById', ['id' => $coche->id]) }}">
        <p>
            <label>Marca</label>
            <input type="text" name="marca" value="{{ isset($coche)?$coche->marca:'' }}">
        </p>
        <p>
            <label>Modelo</label>
            <input type="text" name="modelo" value="{{ isset($coche) ? $coche->modelo : '' }}">
        </p>
        <p>
            <button>{{ isset($coche) ? 'Modificar coche' : 'Crear Coche' }}</button>
        </p>
    </form>
@endsection