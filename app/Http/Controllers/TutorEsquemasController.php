<?php

namespace App\Http\Controllers;

use App\Esquema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorEsquemasController extends Controller
{
    //

    public function create_esqs_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;

        $f = Esquema::where('numero_control', 14021073)->first();

        if (Esquema::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->ruta_1;

            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return view('tutor.activities.10_Esquema_y_cuadro_comparativo.ejercicio_1', compact('edit','retro', 'cal','f1_decode'));
    }

    public function create_esqs_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;

        $f = Esquema::where('numero_control', 14021073)->first();

        if (Esquema::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->ruta_2;

            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }

        }

        return view('tutor.activities.10_Esquema_y_cuadro_comparativo.ejercicio_2', compact('edit','retro', 'cal', 'f1_decode'));
    }

    public function store_esqs_1(Request $request){


        if (Esquema::where('numero_control', 14021073)->exists()) {

            $tf = Esquema::where('numero_control', 14021073)->first();

            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }else{

            $tf = new Esquema();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }

            return redirect()->back();
    }

    public function store_esqs_2(Request $request){

        if (Esquema::where('numero_control', 14021073)->exists()) {

            $tf = Esquema::where('numero_control', 14021073)->first();

            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }else{

            $tf = new Esquema();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }

        return redirect()->back();

    }

    public function edit_esqs_1(Request $request){


        if (Esquema::where('numero_control', 14021073)->exists()) {

            $tf = Esquema::where('numero_control', 14021073)->first();

            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;

            $c1 = $request->cal_e;
            $c2 = $tf->cal_2;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }else{

            $tf = new Esquema();

            $tf->numero_control = 14021073;

            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;

            $c1 = $request->cal_e;
            $c2 = $tf->cal_2;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }

        return redirect()->back();
    }

    public function edit_esqs_2(Request $request){

        if (Esquema::where('numero_control', 14021073)->exists()) {

            $tf = Esquema::where('numero_control', 14021073)->first();

            $tf->retro_2 = $request->retro_e;
            $tf->cal_2 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $request->cal_e;

            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }else{

            $tf = new Esquema();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro_e;
            $tf->cal_2 = $request->cal_e;

            $c1 = $tf->cal_1;
            $c2 = $request->cal_e;


            $t = ($c1+$c2)/2;

            $tf->cal_general = $t;

            $tf->save();

        }

        return redirect()->back();

    }


}
