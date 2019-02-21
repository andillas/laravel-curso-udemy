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

