<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuertoController extends Controller
{
    //
    private $arr_hortalizas = [
        'Frutas' => ['Tomates', 'Pepinos', 'Guindillas', 'Sandías', 'Melones'],
        'Hortalizas' => ['Cebollas', 'Lechugas', 'Espinacas', 'Patatas']
    ];

    public function index(){

        return view('huerto.index')
            ->with('hortalizas', $this->arr_hortalizas);
    }

    public function getFrutas(){
        sort($this->arr_hortalizas['Frutas']);
        return view(
            'huerto.index',
            ['hortalizas' => $this->arr_hortalizas['Frutas']]
        );
    }

    public function getHortalizas(){
        sort($this->arr_hortalizas['Hortalizas']);
        return view('huerto.index')
            ->with('hortalizas', $this->arr_hortalizas['Hortalizas']);
    }

    public function reversedHortalizas(){
        $all = array_merge($this->arr_hortalizas['Frutas'], $this->arr_hortalizas['Hortalizas']);
        $reversed_hortalizas = array_reverse($all);
        return view('huerto.index')
            ->with('hortalizas', $reversed_hortalizas);
    }
    public function orderedHortalizas(){
        $all = array_merge($this->arr_hortalizas['Frutas'], $this->arr_hortalizas['Hortalizas']);
        sort($all);

        return view('huerto.index')
            ->with('hortalizas', $all);
    }

    public function tomates(){
        return '<h2>Tomates</h2>';
    }

    public function cebollas(){
        return '<h2>Cebollas</h2>';
    }
}
