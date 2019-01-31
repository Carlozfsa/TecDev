<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use Illuminate\Http\Request;

class TutorPensamientosController extends Controller
{
    //

    public function create_pens_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;

        $f = Pensamiento::where('numero_control', 14021073)->first();

        if (Pensamiento::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->a;
            $f2_decode = $f->b;
            $f3_decode = $f->c;
            $f4_decode = $f->d;
            $f5_decode = $f->e;
            $f6_decode = $f->f;
            $f7_decode = $f->g;
            $f8_decode = $f->h;
            $f9_decode = $f->i;

            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return view('tutor.activities.8_Habilidades_del_Pensamiento.ejercicio_1', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode'));
    }

    public function create_pens_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;

        $f = Pensamiento::where('numero_control', 14021073)->first();

        if (Pensamiento::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->e2_p1;
            $f2_decode = $f->e2_p2;
            $f3_decode = $f->e2_p3;
            $f4_decode = $f->e2_p4;
            $f5_decode = $f->e2_p5;

            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }

        }

        return view('tutor.activities.8_Habilidades_del_Pensamiento.ejercicio_3', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode'));
    }

    public function create_pens_3(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;

        $f = Pensamiento::where('numero_control', 14021073)->first();

        if (Pensamiento::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->e3_1_1;
            $f2_decode = $f->e3_1_2;
            $f3_decode = $f->e3_1_3;
            $f4_decode = $f->e3_2_1;
            $f5_decode = $f->e3_2_2;
            $f6_decode = $f->e3_3_1;
            $f7_decode = $f->e3_3_2;
            $f8_decode = $f->e3_4_1;
            $f9_decode = $f->e3_4_2;
            $f10_decode = $f->e3_5_1;
            $f11_decode = $f->e3_5_2;

            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }

        }


        return view('tutor.activities.8_Habilidades_del_Pensamiento.ejercicio_4', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode'));
    }

    public function create_pens_4(){
        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $t1_1 = NULL;
        $t1_2 = NULL;
        $t1_3 = NULL;
        $t1_4 = NULL;
        $t1_5 = NULL;

        $t2_1 = NULL;
        $t2_2 = NULL;
        $t2_3 = NULL;
        $t2_4 = NULL;
        $t2_5 = NULL;

        $t3_1 = NULL;
        $t3_2 = NULL;
        $t3_3 = NULL;
        $t3_4 = NULL;
        $t3_5 = NULL;

        $t4_1 = NULL;
        $t4_2 = NULL;
        $t4_3 = NULL;
        $t4_4 = NULL;
        $t4_5 = NULL;



        if (Pensamiento::where('numero_control', 14021073)->exists()) {

            $f = Pensamiento::where('numero_control', 14021073)->first();
            $o1 = $f->o1;
            $o2 = $f->o2;
            $o3 = $f->o3;
            $o4 = $f->o4;

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

            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }

        }


        return view('tutor.activities.8_Habilidades_del_Pensamiento.ejercicio_5', compact('edit','retro','cal','t1_1', 't1_2','t1_3','t1_4', 't1_5','t2_1', 't2_2','t2_3','t2_4', 't2_5','t3_1', 't3_2','t3_3','t3_4', 't3_5','t4_1', 't4_2','t4_3','t4_4', 't4_5'));
    }

    public function store_pens_1(Request $request){


        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_1 = $request->retro1;
            $hi->cal_1 = $request->cal1;
            $hi->save();

            $c1 = $request->cal1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_1 = $request->retro1;
            $hi->cal_1 = $request->cal1;
            $hi->save();

            $c1 = $request->cal1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }


        return redirect()->back();
    }

    public function store_pens_2(Request $request){

        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_2 = $request->retro2;
            $hi->cal_2 = $request->cal2;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $request->cal2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_2 = $request->retro2;
            $hi->cal_2 = $request->cal2;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $request->cal2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }

        return redirect()->back();
    }

    public function store_pens_3(Request $request){

        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_3 = $request->retro3;
            $hi->cal_3 = $request->cal3;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $request->cal3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_3 = $request->retro3;
            $hi->cal_3 = $request->cal3;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $request->cal3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }

        return redirect()->back();
    }

    public function store_pens_4(Request $request){

        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_4 = $request->retro4;
            $hi->cal_4 = $request->cal4;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $request->cal4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_4 = $request->retro4;
            $hi->cal_4 = $request->cal4;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $request->cal4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }

        return redirect()->back();
    }


    public function edit_pens_1(Request $request){


        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_1 = $request->retro_e;
            $hi->cal_1 = $request->cal_e;
            $hi->save();

            $c1 = $request->cal_e;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_1 = $request->retro_e;
            $hi->cal_1 = $request->cal_e;
            $hi->save();

            $c1 = $request->cal_e;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }


        return redirect()->back();
    }

    public function edit_pens_2(Request $request){


        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_2 = $request->retro_e;
            $hi->cal_2 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $request->cal_e;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_2 = $request->retro_e;
            $hi->cal_2 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $request->cal_e;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }


        return redirect()->back();
    }

    public function edit_pens_3(Request $request){

        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_3 = $request->retro_e;
            $hi->cal_3 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $request->cal_e;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_3 = $request->retro_e;
            $hi->cal_3 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $request->cal_e;
            $c4 = $hi->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }


        return redirect()->back();
    }

    public function edit_pens_4(Request $request){

        if($hi = Pensamiento::where('numero_control', 14021073)->exists()){

            $hi = Pensamiento::where('numero_control', 14021073)->first();
            $hi->retro_4 = $request->retro_e;
            $hi->cal_4 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $request->cal_e;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Pensamiento();
            $hi->numero_control = 14021073;
            $hi->retro_4 = $request->retro_e;
            $hi->cal_4 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $request->cal_e;

            $t = ($c1+$c2+$c3+$c4)/4;
            $hi->cal_final = $t;

            $hi->save();
        }


        return redirect()->back();
    }


}
