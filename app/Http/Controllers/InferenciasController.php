<?php

namespace App\Http\Controllers;

use App\Inferencia;
use Illuminate\Http\Request;

class InferenciasController extends Controller
{
    //
    public function create_inf_1(){
        return view('activities.13_Inferencias_logicas.ejercicios.ejercicio_1');
    }

    public function create_inf_2(){
        return view('activities.13_Inferencias_logicas.ejercicios.ejercicio_2');
    }

    public function store_inf_1(Request $request){

        $o1 = (integer)$request->o1;
        $o2 = (integer)$request->o2;
        $o3 = (integer)$request->o3;
        $o4 = (integer)$request->o4;
        $o5 = (integer)$request->o5;
        $o6 = (integer)$request->o6;
        $o7 = (integer)$request->o7;
        $o8 = (integer)$request->o8;
        $o9 = (integer)$request->o9;
        $o10 = (integer)$request->o10;
        $o11 = (integer)$request->o11;
        $o12 = (integer)$request->o12;

        $e1 = new Inferencia();
        $e1->numero_control = 14021073;

        $e1->o1 = $o1;
        $e1->o2 = $o2;
        $e1->o3 = $o3;
        $e1->o4 = $o4;
        $e1->o5 = $o5;
        $e1->o6 = $o6;
        $e1->o7 = $o7;
        $e1->o8 = $o8;
        $e1->o9 = $o9;
        $e1->o10 = $o10;
        $e1->o11 = $o11;
        $e1->o12 = $o12;

        $e1->retro_1 = "";
        $e1->cal_1 = 0;

        $e1->t1 = '';
        $e1->t2 = '';
        $e1->t3 = '';
        $e1->t4 = '';
        $e1->t5 = '';
        $e1->t6 = '';
        $e1->t7 = '';

        $e1->retro_2 = "";
        $e1->cal_2 = 0;

        $e1->cal_final= 0;

        $e1->save();

        return '';
    }

    public function store_inf_2(Request $request){

        $e2 = Inferencia::where('numero_control',14021073)->first();
        $e2->t1 = $request->t1;
        $e2->t2 = $request->t2;
        $e2->t3 = $request->t3;
        $e2->t4 = $request->t4;
        $e2->t5 = $request->t5;
        $e2->t6 = $request->t6;
        $e2->t7 = $request->t7;
        $e2->save();

        return '';
    }



    }
