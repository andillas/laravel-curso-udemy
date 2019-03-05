<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuertoController extends Controller
{
    //

    private $arr_hortalizas = [
        'Frutas' => ['Tomates', 'Pepinos', 'Guindillas', 'Sandías', 'Melones', 'Aguacates', 'Limones'],
        'Hortalizas' => ['Cebollas', 'Lechugas', 'Espinacas', 'Patatas']
    ];

    //private $arr_hortalizas = ['Tomates', 'Pepinos', 'Guindillas', 'Cebollas', 'Lechugas', 'Espinacas', 'Sandías', 'Melones', 'Patatas'];
    private $arr_frutas = ['Sandía', 'Melón', 'Aguacate', 'Tomate', 'Pepino', 'Guindilla'];


    public function index(){
        $all_hortalizas = array_merge($this->arr_hortalizas['Frutas'], $this->arr_hortalizas['Hortalizas']);
        return view('huerto.index')
            ->with('hortalizas', $all_hortalizas);
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

    public function tomates($tipo = 'Cherry Soto'){
        return '<h2>Tomates ' . $tipo . '</h2>';
    }

    public function cebollas($param = 'hh'){
        return '<h2>Cebollas - ' . $param . '</h2>';
    }

    public function getFrutas2(){
        return view('huerto.index')
            ->with('hortalizas', $this->arr_frutas)
            ->with('tipo' , 'Frutas');
    }

    //---------------- PRUEBAS FORMULARIO ------------------------//

    public function sendFormu(Request $request){
        $data = $request;

        return 'El nombre es : ' . $data->input('nombre') . '<br> Y la descripción es : ' . $data->input('desc');

//        return view('form.formu');
    }
}
