<?php

namespace App\Http\Controllers;

use App\Memoria;
use Illuminate\Http\Request;

class TutorMemoriasController extends Controller
{

    public function create_mem_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;

        $hi = Memoria::where('numero_control', 14021073)->first();

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $f1_decode = $hi->ve;
            $f2_decode = $hi->vi;
            $f3_decode = $hi->c;


            if ($hi->retro_1 == NULL && $hi->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro_1;
                $cal = $hi->cal_1;
            }

        }

        return view('tutor.activities.7_Memoria.ejercicio_1', compact('edit','retro','cal','f1_decode','f2_decode','f3_decode'));
    }

    public function create_mem_2(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $hi = Memoria::where('numero_control', 14021073)->first();

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($hi->c1);
            $f2_decode = $hi->con1;


            if ($hi->retro_2 == NULL && $hi->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro_2;
                $cal = $hi->cal_2;
            }

        }

        return view('tutor.activities.7_Memoria.ejercicio_2', compact('edit','retro','cal','f1_decode','f2_decode'));
    }

    public function create_mem_3(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;

        $hi = Memoria::where('numero_control', 14021073)->first();

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($hi->c2);
            $f2_decode = $hi->con2;


            if ($hi->retro_3 == NULL && $hi->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro_3;
                $cal = $hi->cal_3;
            }

        }

        return view('tutor.activities.7_Memoria.ejercicio_3', compact('edit','retro','cal','f1_decode','f2_decode'));
    }

    public function create_mem_4(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;

        $hi = Memoria::where('numero_control', 14021073)->first();

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $f1_decode = $hi->esc;

            if ($hi->retro_4 == NULL && $hi->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro_4;
                $cal = $hi->cal_4;
            }

        }

        return view('tutor.activities.7_Memoria.ejercicio_4', compact('edit','retro','cal','f1_decode'));
    }

    public function store_mem_1(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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

    public function store_mem_2(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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

    public function store_mem_3(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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

    public function store_mem_4(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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

    public function edit_mem_1(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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

    public function edit_mem_2(Request $request)
    {

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
            $hi->retro_2 = $request->retro_e;
            $hi->cal_2 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $request->cal_e;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $hi->cal_final = $t;

            $hi->save();

        } else {

            $hi = new Memoria();
            $hi->numero_control = 14021073;
            $hi->retro_2 = $request->retro_e;
            $hi->cal_2 = $request->cal_e;
            $hi->save();

            $c1 = $hi->cal_1;
            $c2 = $request->cal_e;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $hi->cal_final = $t;

            $hi->save();

        }
        return redirect()->back();

    }

    public function edit_mem_3(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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


    public function edit_mem_4(Request $request){

        if (Memoria::where('numero_control', 14021073)->exists()) {

            $hi = Memoria::where('numero_control', 14021073)->first();
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

            $hi = new Memoria();
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
