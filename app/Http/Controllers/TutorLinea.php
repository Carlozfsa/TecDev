<?php

namespace App\Http\Controllers;

use App\Linea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorLinea extends Controller
{
    //

    public function create_linea(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f_decode1 = NULL;
        $f_decode1e = NULL;

        $f_decode2 = NULL;
        $f_decode3 = NULL;
        $f_decode3e = NULL;

        $f = Linea::where('numero_control', Auth::user()->numero_control)->first();

        if (Linea::where('numero_control', 14021073)->exists()) {

            $int = Linea::where('numero_control', Auth::user()->numero_control)->first();

            $f_decode1 = str_replace('"','', (string) $int->edad);
            $f_decode1e = json_decode($int->edad);

            $f_decode2 = json_decode($int->evento);
            $f_decode3 = str_replace('"','', (string) $int->nivel);
            $f_decode3e = json_decode($int->nivel);

            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return  view('tutor.activities.0_linea_de_tiempo.tutor_grafica', compact('edit','retro','cal', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode1e', 'f_decode3e'));
    }


    public function store_linea(Request $request){

        if(Linea::where('numero_control', 14021073)->exists()){

            $tf = Linea::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $tf->save();

        }else{
            $tf = new Linea();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;


            $tf->save();
        }

        return redirect()->back();
    }

    public function edit_linea(Request $request){

        if(Linea::where('numero_control', 14021073)->exists()){

            $tf = Linea::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;

            $tf->save();

        }else{
            $tf = new Linea();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;


            $tf->save();
        }

        return redirect()->back();
    }


}
