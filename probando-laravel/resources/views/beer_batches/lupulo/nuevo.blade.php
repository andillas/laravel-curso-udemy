@extends('beer_batches.lyt')
@section('title', 'Nuevo Lúpulo')
@section('contenido')
<section class="container">
    <header><h2 class="titu-seccion">Nuevo lúpulo</h2></header>
    <article>
        <form>
            <div class="form-group">
                <label for="nombre_nuevo_lupulo">Nombre</label>
                <input type="text" class="form-control" id="nombre_nuevo_lupulo" name="nombre_nuevo_lupulo">
            </div>
            <div class="form-group">
                <label for="alfaacidos_nuevo_lupulo">Alfa Ácidos</label>
                <input type="text" class="form-control" id="alfaacidos_nuevo_lupulo" name="alfaacidos_nuevo_lupulo">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-default" onclick="saveLupulo(this.form)">Guardar</button>
                <button type="button" class="btn btn-checkout" onclick="window.location.href='{{route('rt_listado_lupulo')}}'">Cancelar</button>
            </div>
        </form>
    </article>
</section>
@endsection