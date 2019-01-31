<?php

namespace App\Http\Controllers;

use App\Mapa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorMapasController extends Controller
{
    //

    public function create_mapas_1(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;

        $f = Mapa::where('numero_control', Auth::user()->numero_control)->first();

        if (Mapa::where('numero_control', 14021073)->exists()) {

            $f1_decode = $f->ruta;

            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return view('tutor.activities.9_Mapa_mental_y_conceptual.ejercicio_1', compact('edit','retro','cal', 'f1_decode'));
    }

    public function store_mapas_1(Request $request){

        if(Mapa::where('numero_control', 14021073)->exists()){

            $tf = Mapa::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;
            $tf->save();

        }else{

            $tf = new Mapa();
            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;
            $tf->save();

        }

        return redirect()->back();
    }

    public function edit_mapas_1(Request $request){

        if(Mapa::where('numero_control', 14021073)->exists()){

            $tf = Mapa::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;
            $tf->save();

        }else{

            $tf = new Mapa();
            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro_e;
            $tf->cal_1 = $request->cal_e;
            $tf->save();

        }

        return redirect()->back();
    }

}
