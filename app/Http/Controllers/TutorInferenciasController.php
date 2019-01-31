<?php

namespace App\Http\Controllers;

use App\Inferencia;
use Illuminate\Http\Request;

class TutorInferenciasController extends Controller
{
    //

    public function create_inf_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $o1 = NULL;
        $o2 = NULL;
        $o3 = NULL;
        $o4 = NULL;
        $o5 = NULL;
        $o6 = NULL;
        $o7 = NULL;
        $o8 = NULL;
        $o9 = NULL;
        $o10 = NULL;
        $o11 = NULL;
        $o12 = NULL;


        $hi = Inferencia::where('numero_control', 14021073)->first();

        if (Inferencia::where('numero_control', 14021073)->exists()) {

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

            if ($hi->retro_1 == NULL && $hi->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro_1;
                $cal = $hi->cal_1;
            }

        }


        return view('tutor.activities.13_Inferencias_logicas.ejercicio_1', compact('edit','retro','cal','o1','o2','o3','o4','o5','o6','o7','o8','o9','o10','o11','o12'));
    }

    public function create_inf_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $t1 = NULL;
        $t2 = NULL;
        $t3 = NULL;
        $t4 = NULL;
        $t5 = NULL;
        $t6 = NULL;
        $t7 = NULL;


        $hi = Inferencia::where('numero_control', 14021073)->first();

        if (Inferencia::where('numero_control', 14021073)->exists()) {

            $t1 = $hi->t1;
            $t2 = $hi->t2;
            $t3 = $hi->t3;
            $t4 = $hi->t4;
            $t5 = $hi->t5;
            $t6 = $hi->t6;
            $t7 = $hi->t7;

            if ($hi->retro_2 == NULL && $hi->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro_2;
                $cal = $hi->cal_2;
            }

        }

        return view('tutor.activities.13_Inferencias_logicas.ejercicio_2', compact('edit','retro','cal','t1','t2','t3','t4','t5','t6','t7'));
    }

    public function store_inf_1(Request $request){

        if(Inferencia::where('numero_control', 14021073)->exists()){

            $hi = Inferencia::where('numero_control', 14021073)->first();
            $hi->retro_1 = $request->retro1;
            $hi->cal_1 = $request->cal1;

            $c1 = $request->cal_1;
            $c2 = $hi->cal_2;

            $t = ($c1+$c2)/2;

            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Inferencia();
            $hi->numero_control = 14021073;
            $hi->retro_1 = $request->retro1;
            $hi->cal_1 = $request->cal1;

            $c1 = $request->cal_1;
            $c2 = $hi->cal_2;

            $t = ($c1+$c2)/2;

            $hi->cal_final = $t;

            $hi->save();
        }




        return redirect()->back();
    }

    public function store_inf_2(Request $request){

        if(Inferencia::where('numero_control', 14021073)->exists()){

            $hi = Inferencia::where('numero_control', 14021073)->first();
            $hi->retro_2 = $request->retro2;
            $hi->cal_2 = $request->cal2;

            $c1 = $hi->cal_2;
            $c2 = $request->cal2;

            $t = ($c1+$c2)/2;

            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = Inferencia::where('numero_control', 14021073)->first();

            $hi = new Inferencia();
            $hi->numero_control = 14021073;
            $hi->retro_2 = $request->retro2;
            $hi->cal_2 = $request->cal2;

            $c1 = $hi->cal_2;
            $c2 = $request->cal2;

            $t = ($c1+$c2)/2;

            $hi->cal_final = $t;

            $hi->save();

        }


        return redirect()->back();
    }

    public function edit_inf_1(Request $request){

        $hi = Inferencia::where('numero_control', 14021073)->first();
        $hi->retro_1 = $request->retro_e;
        $hi->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $hi->cal_2;

        $t = ($c1+$c2)/2;

        $hi->cal_final = $t;

        $hi->save();

        return redirect()->back();

    }

    public function edit_inf_2(Request $request){

        $hi = Inferencia::where('numero_control', 14021073)->first();
        $hi->retro_2 = $request->retro_e;
        $hi->cal_2 = $request->cal_e;

        $c1 = $hi->cal_1;
        $c2 = $request->cal_e ;

        $t = ($c1+$c2)/2;

        $hi->cal_final = $t;

        $hi->save();

        return redirect()->back();

    }


}
