<?php

namespace App\Http\Controllers;

use App\Inteligencia;
use Illuminate\Http\Request;

class TutorInteligenciasController extends Controller
{
    //

    public function create_int_mult_ej_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $ling = NULL;
        $mat = NULL;
        $esp = NULL;
        $cin = NULL;
        $mus = NULL;
        $inter = NULL;
        $intra = NULL;

        $i = Inteligencia::where('numero_control', 14021073)->first();

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $ling = $i->t_ling;
            $mat = $i->t_mat;
            $esp = $i->t_esp;
            $cin = $i->t_cin;
            $mus = $i->t_mus;
            $inter = $i->t_inter;
            $intra = $i->t_intra;

            if ($i->retro_1 == NULL && $i->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $i->retro_1;
                $cal = $i->cal_1;
            }

        }

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_1', compact('edit','retro','cal','ling', 'mat','esp','cin', 'mus', 'inter', 'intra'));

    }

    public function create_int_mult_ej_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f_1  = NULL;
        $f_2 = NULL;
        $f_3 = NULL;

        $i = Inteligencia::where('numero_control', 14021073)->first();

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $f_1 = $i->num_1;
            $f_2 = $i->num_2;
            $f_3 = $i->num_3;

            if ($i->retro_2 == NULL && $i->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $i->retro_2;
                $cal = $i->cal_2;
            }

        }


        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_2', compact('edit','retro','cal','f_1', 'f_2','f_3'));

    }

    public function create_int_mult_ej_3(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $log1 = NULL;


        $i = Inteligencia::where('numero_control', 14021073)->first();

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $log1 = $i->log_1;

            if ($i->retro_3 == NULL && $i->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $i->retro_3;
                $cal = $i->cal_3;
            }

        }

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_3', compact('edit','retro','cal','log1'));

    }

    public function create_int_mult_ej_4(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $prob1 = NULL;


        $i = Inteligencia::where('numero_control', 14021073)->first();

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $prob1 = $i->prob_1;

            if ($i->retro_4 == NULL && $i->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $i->retro_4;
                $cal = $i->cal_4;
            }

        }

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_4', compact('edit','retro','cal','prob1'));

    }

    public function create_asign(){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $prob1 = $i->prob_1;

        return view('tutor.activities.5_Inteligencias_multiples.asign', compact('prob1'));

    }


    public function store_int_mult_ej_1(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

        }

    public function store_int_mult_ej_2(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

    }

    public function store_int_mult_ej_3(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

    }

    public function store_int_mult_ej_4(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;


            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();
    }

    public function store_asign(Request $request){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $i->intel = $request->int;
        $i->save();

        return redirect()->back();
    }


    public function edit_int_mult_ej_1(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;

            $c1 = $request->cal_e;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;

            $c1 = $request->cal_e;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

    }

    public function edit_int_mult_ej_2(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro_e;
            $tf->cal_2 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $request->cal_e;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro_e;
            $tf->cal_2 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $request->cal_e;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

    }

    public function edit_int_mult_ej_3(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro_e;
            $tf->cal_3 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal_e;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro_e;
            $tf->cal_3 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal_e;
            $c4 = $tf->cal_4;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

    }


    public function edit_int_mult_ej_4(Request $request){

        if (Inteligencia::where('numero_control', 14021073)->exists()) {

            $tf = Inteligencia::where('numero_control', 14021073)->first();
            $tf->retro_4 = $request->retro_e;
            $tf->cal_4 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal_e;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        } else {
            $tf = new Inteligencia();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro_e;
            $tf->cal_4 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal_e;

            $t = ($c1 + $c2 + $c3 + $c4) / 4;
            $tf->cal_general = $t;


            $tf->save();

        }

        return redirect()->back();

    }

}
