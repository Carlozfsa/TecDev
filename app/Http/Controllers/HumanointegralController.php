<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humanointegral;
class HumanointegralController extends Controller
{

    public function create_hum_int_1(){
        return view('activities.3_el_ser_humano_integral.ejercicios.ejercicio_1');
    }



    public function store_hum_int_ej_1(Request $request){

        $hi = new Humanointegral();

        $hi->numero_control = 14021073;
        $hi->pres_per = $request->pres_per;
        $hi->salud = $request->salud;
        $hi->simpatia = $request->simpatia;

        $hi->retro = '';
        $hi->cal_final = 0;


        $hi->save();

        return 'oks';

    }





}
