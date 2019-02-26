<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuertoController extends Controller
{
    //
    private $arr_hortalizas = ['Tomates', 'Pepinos', 'Guindillas', 'Cebollas', 'Lechugas', 'Espinacas', 'Sandías', 'Melones', 'Patatas'];
    private $arr_frutas = ['Sandía', 'Melón', 'Aguacate', 'Tomate', 'Pepino', 'Guindilla'];

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

        sort($this->arr_hortalizas);

        return view('huerto.index')
            ->with('hortalizas', $this->arr_hortalizas);
    }

    public function tomates($tipo = 'Cherry Soto'){
        return '<h2>Tomates ' . $tipo . '</h2>';
    }

    public function cebollas($param = 'hh'){
        return '<h2>Cebollas - ' . $param . '</h2>';
    }

    public function getFrutas(){
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
