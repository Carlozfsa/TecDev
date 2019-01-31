<?php

namespace App\Http\Controllers;

use App\Inferencia;
use App\Inteligencia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InferenciasController extends Controller
{
    //
    public function create_inf_1(){

        if(Auth::user()->avance >=13.1) {

            $edit = NULL;

        $int = Inferencia::where('numero_control', Auth::user()->numero_control)->first();
        $f_decode = NULL;

        if (Inferencia::where('numero_control', Auth::user()->numero_control)->exists() && $int->o1 != NULL  && $int->o2 != NULL && $int->o3 != NULL && $int->o4 != NULL && $int->o5 != NULL && $int->o6 != NULL && $int->o7 != NULL && $int->o8 != NULL && $int->o9 != NULL && $int->o10 != NULL && $int->o11 != NULL && $int->o12 != NULL) {

            $edit = 1;

            $f_decode1 = $int->o1;
            $f_decode2 = $int->o2;
            $f_decode3 = $int->o3;
            $f_decode4 = $int->o4;
            $f_decode5 = $int->o5;
            $f_decode6 = $int->o6;
            $f_decode7 = $int->o7;
            $f_decode8 = $int->o8;
            $f_decode9 = $int->o9;
            $f_decode10 = $int->o10;
            $f_decode11 = $int->o11;
            $f_decode12 = $int->o12;

        } else {
            $edit = 0;

        }

        return view('activities.13_Inferencias_logicas.ejercicios.ejercicio_1', compact('edit', 'f_decode1','f_decode2','f_decode3','f_decode4','f_decode5','f_decode6','f_decode7','f_decode8','f_decode9','f_decode10','f_decode11','f_decode12'));
        }else{
            return redirect()->back();
        }
    }

    public function create_inf_2(){


        if(Auth::user()->avance >=13.2) {

        $edit = NULL;

        $f = Inferencia::where('numero_control', 14021073)->first();
        $f_decode1 = NULL;

        if ($f->avance_2 > 0) {
            $edit = 1;

            $f_decode1 = $f->t1;
            $f_decode2 = $f->t2;
            $f_decode3 = $f->t3;
            $f_decode4 = $f->t4;
            $f_decode5 = $f->t5;
            $f_decode6 = $f->t6;
            $f_decode7 = $f->t7;

        } else {
            $edit = 0;
        }

        return view('activities.13_Inferencias_logicas.ejercicios.ejercicio_2', compact('edit', 'f_decode1','f_decode2','f_decode3','f_decode4','f_decode5','f_decode6','f_decode7'));
        }else{
            return redirect()->back();
        }
    }

    public function store_inf_1(Request $request){

        if(Inferencia::where('numero_control', Auth::user()->numero_control)->exists()){
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

            $e1 = Inferencia::where('numero_control', 14021073)->first();
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
            $e1->avance_1 = 1;


            $e1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 13.2;
            $u->save();
        }else{
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
            $e1->avance_1 = 1;


            $e1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 13.2;
            $u->save();
        }


        return redirect()->back();
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
        $e2->avance_2 = 1;

        $e2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 14.1;
        $u->save();

        return redirect()->back();
    }

    public function edit_inf_1(Request $request){

        $o1 = (integer)$request->o1_e;
        $o2 = (integer)$request->o2_e;
        $o3 = (integer)$request->o3_e;
        $o4 = (integer)$request->o4_e;
        $o5 = (integer)$request->o5_e;
        $o6 = (integer)$request->o6_e;
        $o7 = (integer)$request->o7_e;
        $o8 = (integer)$request->o8_e;
        $o9 = (integer)$request->o9_e;
        $o10 = (integer)$request->o10_e;
        $o11 = (integer)$request->o11_e;
        $o12 = (integer)$request->o12_e;

        $e1 = Inferencia::where('numero_control',Auth::user()->numero_control)->first();

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

        $e1->save();

        return redirect()->back();
    }

    public function edit_inf_2(Request $request){

        $e2 = Inferencia::where('numero_control',14021073)->first();
        $e2->t1 = $request->t1_e;
        $e2->t2 = $request->t2_e;
        $e2->t3 = $request->t3_e;
        $e2->t4 = $request->t4_e;
        $e2->t5 = $request->t5_e;
        $e2->t6 = $request->t6_e;
        $e2->t7 = $request->t7_e;
        $e2->save();

        return redirect()->back();

    }



    }
