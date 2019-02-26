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

// ----------------------------- PRUEBAS MIDDLEWARE ----------------------------------------//
Route::prefix('bbatches')->group(function(){
    Route::get('home', function (){
        return view('beer_batches.home')->with('title', 'Home');
    })->name('rt_home');

    Route::get('lote/list', function (){
        return view('beer_batches.lote.list');
    })->name('rt_list_lote');

    Route::get('lote/nuevo', function(){
        return view('beer_batches.lote.new');
    })->name('rt_new_lote');

    Route::get('lupulo/list', function(){
        return view('beer_batches.lupulo.list');
    })->name('rt_list_lupulo');

    Route::get('lupulo/nuevo', function(){
        return view('beer_batches.lupulo.new');
    })->name('rt_new_lupulo');

    Route::get('malta/list', function(){
        return view('beer_batches.malta.list');
    })->name('rt_list_malta');

    Route::get('malta/nueva', function(){
        return view('beer_batches.malta.new');
    })->name('rt_new_malta');
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

