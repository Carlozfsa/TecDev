<?php

namespace App\Http\Controllers;

use App\Humanointegral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorHumanointegralController extends Controller
{
    //


    public function create_hum_int_1(){

        $hi = Humanointegral::where('numero_control', 14021073)->first();


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;

        $f = Humanointegral::where('numero_control', 14021073)->first();

        if (Humanointegral::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->pres_per;
            $f2_decode = $f->salud;
            $f3_decode = $f->simpatia;


            if ($f->retro == NULL && $f->cal_final == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro;
                $cal = $f->cal_final;
            }

        }

        return view('tutor.activities.3_el_ser_humano_integral.ejercicio_1', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode'));
    }

    public function store_create_hum_int_1(Request $request){

        if(Humanointegral::where('numero_control', Auth::user()->numero_control)->exists()){

            $hi = Humanointegral::where('numero_control', Auth::user()->numero_control)->first();

            $hi->numero_control = Auth::user()->numero_control;
            $hi->retro = $request->retro;
            $hi->cal_final = $request->cal_final;
            $hi->save();

        }else{

            $hi = new Humanointegral();
            $hi->numero_control = Auth::user()->numero_control;
            $hi->retro = $request->retro;
            $hi->cal_final = $request->cal_final;
            $hi->save();

        }
        return redirect()->back();
    }

    public function edit_create_hum_int_1(Request $request){
        $tf = Humanointegral::where('numero_control', 14021073)->first();

        $tf->retro = $request->retro_e;
        $tf->cal_final = $request->cal_e;

        $tf->save();

        return redirect()->back();

    }


    }
