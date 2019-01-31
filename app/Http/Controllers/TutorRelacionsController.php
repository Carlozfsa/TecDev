<?php

namespace App\Http\Controllers;

use App\Relacion;
use Illuminate\Http\Request;

class TutorRelacionsController extends Controller
{
    //

    public function create_rel_sim_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $e1 = NULL;
        $e2 = NULL;
        $e3 = NULL;
        $e4 = NULL;
        $e5 = NULL;
        $e6 = NULL;
        $e7 = NULL;
        $e8 = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $e1 = $f->e1_1;
            $e2 = $f->e1_2;
            $e3 = $f->e1_3;
            $e4 = $f->e1_4;
            $e5 = $f->e1_5;
            $e6 = $f->e1_6;
            $e7 = $f->e1_7;
            $e8 = $f->e1_8;

            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_1', compact('edit','retro','cal','e1','e2','e3','e4','e5','e6','e7','e8'));
    }

    public function create_rel_sim_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $e1 = NULL;
        $e2 = NULL;
        $e3 = NULL;
        $e4 = NULL;
        $e5 = NULL;
        $e6 = NULL;
        $e7 = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $e1 = $f->e2_1;
            $e2 = $f->e2_2;
            $e3 = $f->e2_3;
            $e4 = $f->e2_4;
            $e5 = $f->e2_5;
            $e6 = $f->e2_6;
            $e7 = $f->e2_7;

            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }

        }


        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_2', compact('edit','retro','cal','e1','e2','e3','e4','e5','e6','e7'));

    }

    public function create_rel_sim_3(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $e1 = NULL;


        $f = Relacion::where('numero_control', 14021073)->first();

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $e1 = $f->e3_1;

            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }

        }


        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_3', compact('edit','retro','cal','e1'));
    }

    public function create_rel_sim_4(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $e1 = NULL;
        $e2 = NULL;
        $e3 = NULL;


        $f = Relacion::where('numero_control', 14021073)->first();

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $e1 = $f->e4_1;
            $e2 = $f->e4_2;
            $e3 = $f->e4_3;

            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }

        }

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_4', compact('edit','retro','cal','e1','e2','e3'));
    }

    public function create_rel_sim_5(){

        $f = Relacion::where('numero_control', 14021073)->first();

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $e1 = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $e1 = $f->e5_1;

            if ($f->retro_5 == NULL && $f->cal_5 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_5;
                $cal = $f->cal_5;
            }

        }

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_5', compact('edit','retro','cal','e1'));
    }

    public function store_rel_sim_1(Request $request){

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $hi = Relacion::where('numero_control', 14021073)->first();
            $hi->retro_1 = $request->retro1;
            $hi->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Relacion();
            $hi->numero_control = 14021073;
            $hi->retro_1 = $request->retro1;
            $hi->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }

        return redirect()->back();
    }

    public function store_rel_sim_2(Request $request){

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $hi = Relacion::where('numero_control', 14021073)->first();
            $hi->retro_2 = $request->retro2;
            $hi->cal_2 = $request->cal2;

            $c1 = $hi->cal_1;
            $c2 = $request->cal2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Relacion();
            $hi->numero_control = 14021073;
            $hi->retro_2 = $request->retro2;
            $hi->cal_2 = $request->cal2;

            $c1 = $hi->cal_1;
            $c2 = $request->cal2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }

        return redirect()->back();
    }

    public function store_rel_sim_3(Request $request){

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $hi = Relacion::where('numero_control', 14021073)->first();
            $hi->retro_3 = $request->retro3;
            $hi->cal_3 = $request->cal3;

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $request->cal3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Relacion();
            $hi->numero_control = 14021073;
            $hi->retro_3 = $request->retro3;
            $hi->cal_3 = $request->cal3;

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $request->cal3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }

        return redirect()->back();
    }

    public function store_rel_sim_4(Request $request){

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $hi = Relacion::where('numero_control', 14021073)->first();
            $hi->retro_4 = $request->retro4;
            $hi->cal_4 = $request->cal4;

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $request->cal4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Relacion();
            $hi->numero_control = 14021073;
            $hi->retro_4 = $request->retro4;
            $hi->cal_4 = $request->cal4;

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $request->cal4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }

        return redirect()->back();
    }

    public function store_rel_sim_5(Request $request){

        if (Relacion::where('numero_control', 14021073)->exists()) {

            $hi = Relacion::where('numero_control', 14021073)->first();
            $hi->retro_5 = $request->retro5;
            $hi->cal_5 = $request->cal5;

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $request->cal5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }else{

            $hi = new Relacion();
            $hi->numero_control = 14021073;
            $hi->retro_5 = $request->retro5;
            $hi->cal_5 = $request->cal5;

            $c1 = $hi->cal_1;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $request->cal5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        }

        return redirect()->back();

    }


    public function edit_rel_sim_1(Request $request){

            $hi = Relacion::where('numero_control', 14021073)->first();
            $hi->retro_1 = $request->retro_e;
            $hi->cal_1 = $request->cal_e;

            $c1 = $request->cal_e;
            $c2 = $hi->cal_2;
            $c3 = $hi->cal_3;
            $c4 = $hi->cal_4;
            $c5 = $hi->cal_5;

            $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
            $hi->cal_final = $t;

            $hi->save();

        return redirect()->back();
    }

    public function edit_rel_sim_2(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_2 = $request->retro_e;
        $hi->cal_2 = $request->cal_e;

        $c1 = $hi->cal_1;
        $c2 = $request->cal_e;
        $c3 = $hi->cal_3;
        $c4 = $hi->cal_4;
        $c5 = $hi->cal_5;

        $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
        $hi->cal_final = $t;

        $hi->save();
        return redirect()->back();

    }

    public function edit_rel_sim_3(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_3 = $request->retro_e;
        $hi->cal_3 = $request->cal_e;

        $c1 = $hi->cal_1;
        $c2 = $hi->cal_2;
        $c3 = $request->cal_e;
        $c4 = $hi->cal_4;
        $c5 = $hi->cal_5;

        $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
        $hi->cal_final = $t;

        $hi->save();
        return redirect()->back();

    }

    public function edit_rel_sim_4(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_4 = $request->retro_e;
        $hi->cal_4 = $request->cal_e;

        $c1 = $hi->cal_1;
        $c2 = $hi->cal_2;
        $c3 = $hi->cal_3;
        $c4 = $request->cal_e;
        $c5 = $hi->cal_5;

        $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
        $hi->cal_final = $t;

        $hi->save();
        return redirect()->back();

    }

    public function edit_rel_sim_5(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_5 = $request->retro_e;
        $hi->cal_5 = $request->cal_e;

        $c1 = $hi->cal_1;
        $c2 = $hi->cal_2;
        $c3 = $hi->cal_3;
        $c4 = $hi->cal_4;
        $c5 = $request->cal_e;

        $t = ($c1 + $c2 + $c3 + $c4+ $c5) / 5;
        $hi->cal_final = $t;

        $hi->save();
        return redirect()->back();

    }

}
