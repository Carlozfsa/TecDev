<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Humanointegral;
use Illuminate\Support\Facades\Auth;

class HumanointegralController extends Controller
{

    public function create_hum_int_1(){
        if(Auth::User()->avance >= 3.10){

            $edit = NULL;

            $f = Humanointegral::where('numero_control', 14021073)->first();
            $f_decode = NULL;

            if (Humanointegral::where('numero_control', 14021073)->exists() && $f->pres_per =! NULL && $f->salud != NULL && $f->simpatia != NULL) {
                $edit = 1;

                $f_decode1 = $f->pres_per;
                $f_decode2 = $f->salud;
                $f_decode3 = $f->simpatia;

            } else {
                $edit = 0;
            }



            return view('activities.3_el_ser_humano_integral.ejercicios.ejercicio_1', compact ('edit', 'f_decode1', 'f_decode2', 'f_decode3'));
        }else{
            return redirect()->back();
        }
    }



    public function create_hum_l_1(){
        return view('activities.3_el_ser_humano_integral.lecturas.lectura_1');
    }


    public function create_hum_l_2(){
        return view('activities.3_el_ser_humano_integral.lecturas.lectura_2');
    }


    public function store_hum_int_ej_1(Request $request){

        if(Humanointegral::where('numero_control', Auth::user()->numero_control)->exists()){

            $hi = Humanointegral::where('numero_control', Auth::user()->numero_control)->first();

            $hi->numero_control = Auth::user()->numero_control;
            $hi->pres_per = $request->pres_per;
            $hi->salud = $request->salud;
            $hi->simpatia = $request->simpatia;


            $hi->save();

            $u = User::where('numero_control', 14021073)->first();
            $u->avance = 4.1;
            $u->save();

        }else{

            $hi = new Humanointegral();

            $hi->numero_control = Auth::user()->numero_control;
            $hi->pres_per = $request->pres_per;
            $hi->salud = $request->salud;
            $hi->simpatia = $request->simpatia;

            $hi->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 4.1;
            $u->save();
        }


        return redirect()->back();

    }


    public function edit_hum_int_ej_1(Request $request){

        $hi = Humanointegral::where('numero_control', 14021073)->first();
        $hi->pres_per = $request->pres_per_e;
        $hi->salud = $request->salud_e;
        $hi->simpatia = $request->simpatia_e;

        $hi->save();

        return redirect()->back();
    }

}
