<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorEsquemasController extends Controller
{
    //

    public function create_esqs_1(){

        return view('tutor.activities.10_Esquema_y_cuadro_comparativo.ejercicio_1');
    }

    public function create_esqs_2(){

        return view('tutor.activities.10_Esquema_y_cuadro_comparativo.ejercicio_2');
    }
}
