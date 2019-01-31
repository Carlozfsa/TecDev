<?php

namespace App\Http\Controllers;

use App\Habilidad;
use Illuminate\Http\Request;

class TutorHabilidadsController extends Controller
{
    //

    public function create_hab_est_1(){

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


        $hi = Habilidad::where('numero_control', 14021073)->first();

        if (Habilidad::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($hi->h1);
            $f2_decode = json_decode($hi->h2);
            $f3_decode = json_decode($hi->h3);
            $f4_decode = json_decode($hi->h4);
            $f5_decode = json_decode($hi->h5);
            $f6_decode = json_decode($hi->h6);
            $f7_decode = json_decode($hi->h7);
            $f8_decode = json_decode($hi->h8);
            $f9_decode = json_decode($hi->h9);

            if ($hi->retro == NULL && $hi->cal_final == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $hi->retro;
                $cal = $hi->cal_final;
            }

        }

        return view('tutor.activities.6_Habilidades_de_estudio.ejercicio_1', compact('edit','retro','cal','f1_decode','f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode'));

    }

    public function store_hab_est_1(Request $request){

        if(Habilidad::where('numero_control', 14021073)->exists()){

            $hi = Habilidad::where('numero_control', 14021073)->first();
            $hi->retro = $request->retro1;
            $hi->cal_final = $request->cal1;
            $hi->save();

        }else{
            $hi = new Habilidad();
            $hi->numero_control = 14021073;
            $hi->retro = $request->retro1;
            $hi->cal_final = $request->cal1;
            $hi->save();
        }


            return redirect()->back();
    }

    public function edit_hab_est_1(Request $request){

        if(Habilidad::where('numero_control', 14021073)->exists()){

            $hi = Habilidad::where('numero_control', 14021073)->first();
            $hi->retro = $request->retro_e;
            $hi->cal_final = $request->cal_e;
            $hi->save();

        }else{
            $hi = new Habilidad();
            $hi->numero_control = 14021073;
            $hi->retro = $request->retro_e;
            $hi->cal_final = $request->cal_e;
            $hi->save();
        }


        return redirect()->back();
    }
}
