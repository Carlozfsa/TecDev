<?php

namespace App\Http\Controllers;

use App\Mat;
use Illuminate\Http\Request;

class TutorMatsController extends Controller
{
    //
    public function create_mat_1(){

        $f = Mat::where('numero_control', 14021073)->first();
        $o1 = $f->p1;
        $o2 = $f->p2;
        $o3 = $f->p3;
        $o4 = $f->p4;
        $o5 = $f->p5;
        $o6 = $f->p6;
        $o7 = $f->p7;
        $o8 = $f->p8;
        $o9 = $f->p9;
        $o10 = $f->p10;

        $t1_1 = false;
        $t1_2 = false;
        $t1_3 = false;
        $t1_4 = false;
        $t1_5 = false;

        $t2_1 = false;
        $t2_2 = false;
        $t2_3 = false;
        $t2_4 = false;
        $t2_5 = false;

        $t3_1 = false;
        $t3_2 = false;
        $t3_3 = false;
        $t3_4 = false;
        $t3_5 = false;

        $t4_1 = false;
        $t4_2 = false;
        $t4_3 = false;
        $t4_4 = false;
        $t4_5 = false;

        $t5_1 = false;
        $t5_2 = false;
        $t5_3 = false;
        $t5_4 = false;
        $t5_5 = false;

        $t6_1 = false;
        $t6_2 = false;
        $t6_3 = false;
        $t6_4 = false;
        $t6_5 = false;

        $t7_1 = false;
        $t7_2 = false;
        $t7_3 = false;
        $t7_4 = false;
        $t7_5 = false;

        $t8_1 = false;
        $t8_2 = false;
        $t8_3 = false;
        $t8_4 = false;
        $t8_5 = false;

        $t9_1 = false;
        $t9_2 = false;
        $t9_3 = false;
        $t9_4 = false;
        $t9_5 = false;

        $t10_1 = false;
        $t10_2 = false;
        $t10_3 = false;
        $t10_4 = false;
        $t10_5 = false;

        switch($o1){

            case 1:
                $t1_1 = true;
                break;

            case 2:
                $t1_2 = true;
                break;

            case 3:
                $t1_3 = true;
                break;

            case 4:
                $t1_4 = true;
                break;

            case 5:
                $t1_5 = true;
                break;
        }

        switch($o2){

            case 1:
                $t2_1 = true;
                break;

            case 2:
                $t2_2 = true;
                break;

            case 3:
                $t2_3 = true;
                break;

            case 4:
                $t2_4 = true;
                break;

            case 5:
                $t2_5 = true;
                break;
        }

        switch($o3){

            case 1:
                $t3_1 = true;
                break;

            case 2:
                $t3_2 = true;
                break;

            case 3:
                $t3_3 = true;
                break;

            case 4:
                $t3_4 = true;
                break;

            case 5:
                $t3_5 = true;
                break;
        }

        switch($o4){

            case 1:
                $t4_1 = true;
                break;

            case 2:
                $t4_2 = true;
                break;

            case 3:
                $t4_3 = true;
                break;

            case 4:
                $t4_4 = true;
                break;

            case 5:
                $t4_5 = true;
                break;
        }

        switch($o5){

            case 1:
                $t5_1 = true;
                break;

            case 2:
                $t5_2 = true;
                break;

            case 3:
                $t5_3 = true;
                break;

            case 4:
                $t5_4 = true;
                break;

            case 5:
                $t5_5 = true;
                break;
        }

        switch($o6){

            case 1:
                $t6_1 = true;
                break;

            case 2:
                $t6_2 = true;
                break;

            case 3:
                $t6_3 = true;
                break;

            case 4:
                $t6_4 = true;
                break;

            case 5:
                $t6_5 = true;
                break;
        }

        switch($o7){

            case 1:
                $t7_1 = true;
                break;

            case 2:
                $t7_2 = true;
                break;

            case 3:
                $t7_3 = true;
                break;

            case 4:
                $t7_4 = true;
                break;

            case 5:
                $t7_5 = true;
                break;
        }

        switch($o8){

            case 1:
                $t8_1 = true;
                break;

            case 2:
                $t8_2 = true;
                break;

            case 3:
                $t8_3 = true;
                break;

            case 4:
                $t8_4 = true;
                break;

            case 5:
                $t8_5 = true;
                break;
        }

        switch($o9){

            case 1:
                $t9_1 = true;
                break;

            case 2:
                $t9_2 = true;
                break;

            case 3:
                $t9_3 = true;
                break;

            case 4:
                $t9_4 = true;
                break;

            case 5:
                $t9_5 = true;
                break;
        }

        switch($o10){

            case 1:
                $t10_1 = true;
                break;

            case 2:
                $t10_2 = true;
                break;

            case 3:
                $t10_3 = true;
                break;

            case 4:
                $t10_4 = true;
                break;

            case 5:
                $t10_5 = true;
                break;
        }

        return view('tutor.activities.12_Aprendizaje_matematicas.ejercicio_1', compact('t1_1','t1_2', 't1_3', 't1_4', 't1_5', 't2_1','t2_2','t2_3','t2_4','t2_5', 't3_1','t3_2','t3_3','t3_4','t3_5','t4_1','t4_2','t4_3','t4_4','t4_5','t5_1','t5_2','t5_3','t5_4','t5_5','t6_1','t6_2','t6_3','t6_4','t6_5','t7_1','t7_2','t7_3','t7_4','t7_5','t8_1','t8_2','t8_3','t8_4','t8_5','t9_1','t9_2','t9_3','t9_4','t9_5','t10_1','t10_2','t10_3','t10_4','t10_5'));
    }

    public function create_mat_2(){

        $f = Mat::where('numero_control', 14021073)->first();
        $o1 = $f->a;
        $o2 = $f->b;
        $o3 = $f->c;

        $o4 = $f->t1;
        $o5 = $f->t2;
        $o6 = $f->t3;
        $o7 = $f->t4;
        $o8 = $f->t5;
        $o9 = $f->t6;

        $t1_1 = false;
        $t1_2 = false;
        $t1_3 = false;
        $t1_4 = false;
        $t1_5 = false;

        $t2_1 = false;
        $t2_2 = false;
        $t2_3 = false;
        $t2_4 = false;
        $t2_5 = false;

        $t3_1 = false;
        $t3_2 = false;
        $t3_3 = false;
        $t3_4 = false;
        $t3_5 = false;


        switch($o1){

            case 1:
                $t1_1 = true;
                break;

            case 2:
                $t1_2 = true;
                break;

            case 3:
                $t1_3 = true;
                break;

            case 4:
                $t1_4 = true;
                break;

            case 5:
                $t1_5 = true;
                break;
        }

        switch($o2){

            case 1:
                $t2_1 = true;
                break;

            case 2:
                $t2_2 = true;
                break;

            case 3:
                $t2_3 = true;
                break;

            case 4:
                $t2_4 = true;
                break;

            case 5:
                $t2_5 = true;
                break;
        }

        switch($o3){

            case 1:
                $t3_1 = true;
                break;

            case 2:
                $t3_2 = true;
                break;

            case 3:
                $t3_3 = true;
                break;

            case 4:
                $t3_4 = true;
                break;

            case 5:
                $t3_5 = true;
                break;
        }

        return view('tutor.activities.12_Aprendizaje_matematicas.ejercicio_2', compact('t1_1','t1_2', 't1_3', 't1_4', 't1_5', 't2_1','t2_2','t2_3','t2_4','t2_5', 't3_1','t3_2','t3_3','t3_4','t3_5', 'o4','o5','o6','o7','o8','o9'));
    }

    public function store_mat_1(Request $request){

        $hi = Mat::where('numero_control', 14021073)->first();
        $hi->retro_1 = $request->retro;
        $hi->cal_1 = $request->cal;
        $hi->save();

        return 'oks s';
    }

    public function store_mat_2(Request $request){

        $hi = Mat::where('numero_control', 14021073)->first();
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
