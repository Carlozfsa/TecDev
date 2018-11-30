<?php

namespace App\Http\Controllers;

use App\Humanointegral;
use Illuminate\Http\Request;

class TutorHumanointegralController extends Controller
{
    //


    public function create_hum_int_1(){

        $hi = Humanointegral::where('numero_control', 14021073)->first();
        $f1_decode = $hi->pres_per;
        $f2_decode = $hi->salud;
        $f3_decode = $hi->simpatia;

        return view('tutor.activities.3_el_ser_humano_integral.ejercicio_1', compact('f1_decode', 'f2_decode','f3_decode'));
    }

    public function store_create_hum_int_1(Request $request){

        $hi = Humanointegral::where('numero_control', 14021073)->first();
        $hi->retro = $request->retro;
        $hi->cal_final = $request->cal_final;
        $hi->save();

        return 'oks s';
    }


    }
