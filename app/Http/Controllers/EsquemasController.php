<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsquemasController extends Controller
{
    //

    public function create_esqs_l_1(){
        return view('activities.10_Esquema_y_cuadro_comparativo.lecturas.lectura_1');
    }

    public function create_esqs_l_2(){
        return view('activities.10_Esquema_y_cuadro_comparativo.lecturas.lectura_2');
    }



    public function create_esqs_1(){
        return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_1');
    }

    public function create_esqs_2(){
        return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_2');
    }
}
