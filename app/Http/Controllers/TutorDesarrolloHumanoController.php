<?php

namespace App\Http\Controllers;

use App\Desarrollohumano;
use Illuminate\Http\Request;

class TutorDesarrolloHumanoController extends Controller
{
    //

    public function create_des_hum_int_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $f = Desarrollohumano::where('numero_control', 14021073)->first();

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->e1_difs);
            $f2_decode = json_decode($f->e2_difs);


            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }



        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_1', compact('edit','retro','cal','f1_decode', 'f2_decode'));
    }

    public function create_des_hum_int_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $f = Desarrollohumano::where('numero_control', 14021073)->first();

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->e2_a1;
            $f2_decode = $f->e2_a2;
            $f3_decode = $f->e2_a3;
            $f4_decode = $f->e2_a4;


            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }

        }


        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_2', compact('edit','retro','cal','f1_decode', 'f2_decode', 'f3_decode', 'f4_decode'));
    }

    public function create_des_hum_int_3(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $f = Desarrollohumano::where('numero_control', 14021073)->first();

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->e3_a1_1;
            $f2_decode = $f->e3_a1_2;
            $f3_decode = $f->e3_a2_1;
            $f4_decode = $f->e3_a2_2;

            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }

        }

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_3', compact('edit','retro','cal','f1_decode', 'f2_decode', 'f3_decode', 'f4_decode'));
    }

    public function create_des_hum_int_4(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $f = Desarrollohumano::where('numero_control', 14021073)->first();

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->e4_a1_1;
            $f2_decode = $f->e4_a1_2;
            $f3_decode = $f->e4_a2_1;
            $f4_decode = $f->e4_a2_2;
            $f5_decode = $f->e4_a3_1;
            $f6_decode = $f->e4_a3_2;
            $f7_decode = $f->e4_a4_1;
            $f8_decode = $f->e4_a4_2;
            $f9_decode = $f->e4_a5_1;
            $f10_decode = $f->e4_a5_2;

            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }

        }

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_4', compact('edit','retro','cal','f1_decode', 'f2_decode', 'f3_decode', 'f4_decode', 'f5_decode', 'f6_decode', 'f7_decode', 'f8_decode', 'f9_decode', 'f10_decode'));
    }

    public function create_des_hum_int_5(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $f = Desarrollohumano::where('numero_control', 14021073)->first();

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->e5_a1);


            if ($f->retro_5 == NULL && $f->cal_5 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_5;
                $cal = $f->cal_5;
            }

        }

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_5', compact('edit','retro','cal','f1_decode'));
    }

    public function create_des_hum_int_6(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $f = Desarrollohumano::where('numero_control', 14021073)->first();

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->e6_a1;


            if ($f->retro_6 == NULL && $f->cal_6 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_6;
                $cal = $f->cal_6;
            }

        }

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_6', compact('edit','retro','cal','f1_decode'));
    }

    public function store_des_hum_int_1(Request $request)
    {

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $tf = Desarrollohumano::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        } else {
            $tf = new Desarrollohumano();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        }

        return redirect()->back();

    }

    public function store_des_hum_int_2(Request $request){


        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $tf = Desarrollohumano::where('numero_control', 14021073)->first();

            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        } else {
            $tf = new Desarrollohumano();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;


            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;

            $tf->save();

        }

        return redirect()->back();

    }

    public function store_des_hum_int_3(Request $request){

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $tf = Desarrollohumano::where('numero_control', 14021073)->first();

            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        } else {

            $tf = new Desarrollohumano();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;


            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;

            $tf->save();

        }

        return redirect()->back();


    }

    public function store_des_hum_int_4(Request $request){

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $tf = Desarrollohumano::where('numero_control', 14021073)->first();

            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        } else {

            $tf = new Desarrollohumano();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;


            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;

            $tf->save();

        }

        return redirect()->back();

    }

    public function store_des_hum_int_5(Request $request){

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $tf = Desarrollohumano::where('numero_control', 14021073)->first();

            $tf->retro_5 = $request->retro5;
            $tf->cal_5 = $request->cal5;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $request->cal5;
            $c6 = $tf->cal_6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        } else {

            $tf = new Desarrollohumano();

            $tf->numero_control = 14021073;

            $tf->retro_5 = $request->retro5;
            $tf->cal_5 = $request->cal5;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $request->cal5;
            $c6 = $tf->cal_6;


            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;

            $tf->save();

        }

        return redirect()->back();
    }

    public function store_des_hum_int_6(Request $request){

        if (Desarrollohumano::where('numero_control', 14021073)->exists()) {

            $tf = Desarrollohumano::where('numero_control', 14021073)->first();

            $tf->retro_6 = $request->retro6;
            $tf->cal_6 = $request->cal6;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $request->cal6;

            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;


            $tf->save();

        } else {

            $tf = new Desarrollohumano();

            $tf->numero_control = 14021073;

            $tf->retro_6 = $request->retro6;
            $tf->cal_6 = $request->cal6;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $request->cal6;


            $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
            $tf->cal_final = $t;

            $tf->save();

        }

        return redirect()->back();

    }

    public function edit_des_hum_int_1(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro_e;
        $tf->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;

        $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
        $tf->cal_final = $t;

        $tf->save();

        return redirect()->back();

    }

    public function edit_des_hum_int_2(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();

        $tf->retro_2 = $request->retro_e;
        $tf->cal_2 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $request->cal_e;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;

        $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
        $tf->cal_final = $t;

        $tf->save();

        return redirect()->back();

    }


    public function edit_des_hum_int_3(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();

        $tf->retro_3 = $request->retro_e;
        $tf->cal_3 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $request->cal3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;

        $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
        $tf->cal_final = $t;

        $tf->save();

        return redirect()->back();

    }

    public function edit_des_hum_int_4(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();

        $tf->retro_4 = $request->retro_e;
        $tf->cal_4 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;

        $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
        $tf->cal_final = $t;

        $tf->save();

        return redirect()->back();

    }


    public function edit_des_hum_int_5(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();

        $tf->retro_5 = $request->retro_e;
        $tf->cal_5 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $request->cal5;
        $c6 = $tf->cal_6;

        $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
        $tf->cal_final = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_des_hum_int_6(Request $request){
        $tf = Desarrollohumano::where('numero_control', 14021073)->first();

        $tf->retro_6 = $request->retro_e;
        $tf->cal_6 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $request->cal6;

        $t = ($c1 + $c2 + $c3 + $c4 + $c5 + $c6) / 6;
        $tf->cal_final = $t;

        $tf->save();

        return redirect()->back();

    }



    }
