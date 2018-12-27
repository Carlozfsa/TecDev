<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineasController extends Controller
{
    //

    public function create_lineas(){

        return view('activities.0_linea_de_tiempo.grafica');
    }
}
