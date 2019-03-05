<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola-mundo', function(){
    return view('extendidas.hola-mundo');
});

Route::get('/como-llegar', function(){
    return view('basicas.como-llegar');
});

Route::get('/contacto', function(){
    return view('basicas.contacto');
});

Route::get('/usr/{usrid}', function($usrid){
    return '<h5>' . $usrid . '</h5>';
});

Route::get('/id/{id}', function($id){
   return view('basicas.id', [
     'id' => $id
   ]);
})->where([
    'id' => '[0-9]+'
]);

Route::get('/usuario/{name?}/{surname?}', function($username = 'Default name', $usersurname = 'Default surname'){

    return view('basicas.usuario', array(
        'nombre' => $username,
        'apellido' => $usersurname
    ));
})->where(
    [
        'name' => '[a-zA-Z]+'
    ]
);

//alternativa al sistema anterior (el resultado es el mismo)
Route::get('con-with/{p1}/{p2}', function ($p1, $p2){
    return view('basicas.usuario')
        ->with('nombre', $p1)
        ->with('apellido', $p2);
})->where(
    [
        'p1' => '[0-9]+'
    ]
);

//Pruebas de Blade
Route::get('pruebas-blade/{p1?}', function($p1 = null){

    return view('basicas.prublade',[
        'param1' => $p1,
        'huerto' =>['tomates', 'pepinos', 'pimientos', 'guindillas', 'melones', 'sandías']
    ]);
});

// --------------------------- INICIO PRUEBAS CONTROLLERS -------------------------------//

Route::get('huerto', 'HuertoController@index');
Route::get('ordenado', 'HuertoController@orderedHortalizas');
Route::get('otreuh', 'HuertoController@reversedHortalizas');
Route::get('tomates/{typo?}', 'HuertoController@tomates');
Route::get('cebollas/{param?}', 'HuertoController@cebollas');


Route::prefix('huertin')->group(function(){
    Route::get('frutas', 'HuertoController@getFrutas')->name('route_get_frutas');
    Route::get('hortalizas', 'HuertoController@getHortalizas')->name('route_get_hortalizas');
});

// ----------------------------- PRUEBAS BEER BATCHES ----------------------------------------//
Route::prefix('bbatches')->group(function(){
    Route::get('/', function(){
        return view('beer_batches.home')->with('title', 'Home');
    })->name('rt_home');

    Route::get('home', function (){
        return redirect('/bbatches');
    });

    Route::get('lote/listado', function (){
        return view('beer_batches.lote.listado');
    })->name('rt_listado_lote');

    Route::get('lote/nuevo', function(){
        return view('beer_batches.lote.nuevo');
    })->name('rt_nuevo_lote');

    Route::get('lupulo/listado', 'Bbatches\LupuloController@listLupulos')->name('rt_listado_lupulo');
    Route::get('lupulo/nuevo', 'Bbatches\LupuloController@formNewLupulo')->name('rt_nuevo_lupulo');

    Route::get('malta/listado', function(){
        return view('beer_batches.malta.listado');
    })->name('rt_listado_malta');

    Route::get('malta/nuevo', function(){
        return view('beer_batches.malta.nuevo');
    })->name('rt_nuevo_malta');

});

// --------------------------- PRUEBAS MIDDLEWARE -------------------------------------//


Route::get('frutas/{fruta?}', [
    'middleware' => 'IsFruta',
    'uses' => 'HuertoController@getFrutas'
    ]
)->name('rt_get_frutas');

//-------------------------- PRUEBAS FORMULARIO -----------------------------------------//

Route::get('formulario', function(){
    return view('form.formu');
})->name('rt_formulario');
Route::post('send-formu', 'HuertoController@sendFormu')->name('rt_send_formu');

//-------------------------- PRUEBAS CRUD BÁSICO ---------------------------------------//

Route::prefix('crud-coches')->group(function(){
    Route::get('home', 'CrudCochesController@getListCoches')->name('listado_coches');
    Route::get('coche/{id}', 'CrudCochesController@getCocheById');
    Route::get('formulario', function(){
       return view('crud_coches.formnewcoche');
    })->name('form_nuevo');
    Route::get('editar-coche/{id}', 'CrudCochesController@getFormUpdateCoche');
    Route::get('save-coche/{id}', 'CrudCochesController@updateCocheById');
    Route::get('creacoche', 'CrudCochesController@createCoche');
    Route::get('delete/{id}', 'CrudCochesController@deleteCocheById');
});



