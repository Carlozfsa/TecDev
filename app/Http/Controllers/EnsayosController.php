<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnsayosController extends Controller
{
    //

    public function create_ens_l_1(){
        return view('activities.11_Resumen_y_ensayo.lecturas.lectura_1');
    }

    public function create_ens_l_2(){
        return view('activities.11_Resumen_y_ensayo.lecturas.lectura_2');
    }

    public function create_ens_l_3(){
        return view('activities.11_Resumen_y_ensayo.lecturas.lectura_3');
    }





    public function create_ens_1(){
        return view('activities.11_Resumen_y_ensayo.ejercicios.ejercicio_1');
    }

}
