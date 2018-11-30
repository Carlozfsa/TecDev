<?php

namespace App\Http\Controllers;

use App\Mat;
use Illuminate\Http\Request;

class MatsController extends Controller
{
    //

    public function create_mat_1(){
        return view('activities.12_Aprendizaje_matematicas.ejercicios.ejercicio_1');
    }

    public function create_mat_2(){
        return view('activities.12_Aprendizaje_matematicas.ejercicios.ejercicio_2');
    }


    public function store_mat_1(Request $request){

        $p1 = $request->p1;
        $p2 = $request->p2;
        $p3 = $request->p3;
        $p4 = $request->p4;
        $p5 = $request->p5;
        $p6 = $request->p6;
        $p7 = $request->p7;
        $p8 = $request->p8;
        $p9 = $request->p9;
        $p10 = $request->p10;


        $m1 = new Mat();
        $m1->numero_control = 14021073;
        $m1->p1 =$p1;
        $m1->p2 =$p2;
        $m1->p3 =$p3;
        $m1->p4 =$p4;
        $m1->p5 =$p5;
        $m1->p6 =$p6;
        $m1->p7 =$p7;
        $m1->p8 =$p8;
        $m1->p9 =$p9;
        $m1->p10 =$p10;

        $m1->retro_1 ="";
        $m1->cal_1 =0;

        $m1->a = 0;
        $m1->b = 0;
        $m1->c = 0;

        $m1->t1 = '';
        $m1->t2 = '';
        $m1->t3 = '';
        $m1->t4 = '';
        $m1->t5 = '';
        $m1->t6 = '';

        $m1->retro_2 ="";
        $m1->cal_2 =0;

        $m1->cal_final =0;

        $m1->save();

        return $p3;

    }

    public function store_mat_2(Request $request){

        $m2 = Mat::where('numero_control',14021073)->first();
        $m2->a = $request->p1;
        $m2->b = $request->p2;
        $m2->c = $request->p3;

        $m2->t1 = $request->t1;
        $m2->t2 = $request->t2;
        $m2->t3 = $request->t3;
        $m2->t4 = $request->t4;
        $m2->t5 = $request->t5;
        $m2->t6 = $request->t6;

        $m2->save();

        return 'oks';

    }







}
