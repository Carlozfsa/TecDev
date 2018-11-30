<?php

namespace App\Http\Controllers;

use App\Inferencia;
use Illuminate\Http\Request;

class TutorInferenciasController extends Controller
{
    //

    public function create_inf_1(){

        $hi = Inferencia::where('numero_control', 14021073)->first();
        $o1 = $hi->o1;
        $o2 = $hi->o2;
        $o3 = $hi->o3;
        $o4 = $hi->o4;
        $o5 = $hi->o5;
        $o6 = $hi->o6;
        $o7 = $hi->o7;
        $o8 = $hi->o8;
        $o9 = $hi->o9;
        $o10 = $hi->o10;
        $o11 = $hi->o11;
        $o12 = $hi->o12;

        return view('tutor.activities.13_Inferencias_logicas.ejercicio_1', compact('o1','o2','o3','o4','o5','o6','o7','o8','o9','o10','o11','o12'));
    }

    public function create_inf_2(){

        $hi = Inferencia::where('numero_control', 14021073)->first();
        $t1 = $hi->t1;
        $t2 = $hi->t2;
        $t3 = $hi->t3;
        $t4 = $hi->t4;
        $t5 = $hi->t5;
        $t6 = $hi->t6;
        $t7 = $hi->t7;

        return view('tutor.activities.13_Inferencias_logicas.ejercicio_2', compact('t1','t2','t3','t4','t5','t6','t7'));
    }

    public function store_inf_1(Request $request){

        $hi = Inferencia::where('numero_control', 14021073)->first();
        $hi->retro_1 = $request->retro;
        $hi->cal_1 = $request->cal;
        $hi->save();

        return redirect()->back();
    }

    public function store_inf_2(Request $request){

        $hi = Inferencia::where('numero_control', 14021073)->first();
        $hi->retro_2 = $request->retro;
        $hi->cal_2 = $request->cal;

        $c1 = $hi->cal_1;
        $c2 = $request->cal;

        $t = ($c1+$c2)/2;

        $hi->cal_final = $t;

        $hi->save();

        return redirect()->back();
    }
}
