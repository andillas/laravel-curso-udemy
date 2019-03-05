<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //

    public function listNotas(){
        $all_notas = DB::table('laravel_crud')->get();
        return view('crud_notas.listado', ['notas' => $all_notas]);
    }

    public function showNoteById($id){
        $nota = DB::table('laravel_crud')->where('id', $id)->first();

        if(empty($nota)){
            return redirect()->action('CrudController@listNotas');
        }

        return view('crud_notas.onenote', [
           'nota' => $nota,
           'id' => $id
        ]);
    }
}
