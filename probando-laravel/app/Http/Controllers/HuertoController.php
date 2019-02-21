<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuertoController extends Controller
{
    //
    private $arr_hortalizas = ['Tomates', 'Pepinos', 'Guindillas', 'Cebollas', 'Lechugas', 'Espinacas', 'Sandías', 'Melones', 'Patatas'];

    public function index(){

        return view('huerto.index')
            ->with('hortalizas', $this->arr_hortalizas);
    }

    public function reversedHortalizas(){
        $reversed_hortalizas = array_reverse($this->arr_hortalizas);
        return view('huerto.index')
            ->with('hortalizas', $reversed_hortalizas);
    }
    public function orderedHortalizas(){

//        sort($this->arr_hortalizas);

        return view('huerto.index')
            ->with('hortalizas', $this->arr_hortalizas);
    }

    public function tomates(){
        return '<h2>Tomates</h2>';
    }

    public function cebollas(){
        return '<h2>Cebollas</h2>';
    }
}
