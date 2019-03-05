<?php

namespace App\Http\Controllers\Bbatches;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LupuloController extends Controller
{

    public function listLupulos(){
        return view('beer_batches.lupulo.listado');
    }

    public function formNewLupulo(){
        return view('beer_batches.lupulo.nuevo');
    }
}
