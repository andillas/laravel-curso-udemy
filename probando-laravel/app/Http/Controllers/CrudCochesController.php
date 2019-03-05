<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudCochesController extends Controller
{
    //CONTROLLER PARA HACER PRUEBAS CON UN CRUD DE COCHES
    public function getListCoches(){
        $all_coches = DB::table('crud_coches')->get();

        return view('crud_coches.listado')
            ->with('titulo', 'Listado de coches')
            ->with('coches', $all_coches);
    }
    public function getCocheById($id){
        $coche = DB::table('crud_coches')->where('id', $id)->first();
        return view('crud_coches.detallecoche')->with('coche', $coche);
    }
    public function createCoche(Request $request){

        if(isset($request)){
            $nuevo_coche = DB::table('crud_coches')->insert(
                array(
                    'marca' => $request->marca,
                    'modelo' =>$request->modelo
                )
            );
        }
        return redirect()->route('listado_coches');
    }
    public function getFormUpdateCoche($id){
        $coche = DB::table('crud_coches')->where('id', $id)->first();

        return view('crud_coches.formnewcoche')->with('coche', $coche);
    }
    public function updateCocheById($id, Request $request){

    }
    public function deleteCocheById($id){
        DB::table('crud_coches')->where('id', $id)->delete();

        return redirect()->route('listado_coches');
    }
}
