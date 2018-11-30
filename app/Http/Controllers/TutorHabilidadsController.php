<?php

namespace App\Http\Controllers;

use App\Habilidad;
use Illuminate\Http\Request;

class TutorHabilidadsController extends Controller
{
    //

    public function create_hab_est_1(){

        $hi = Habilidad::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($hi->h1);
        $f2_decode = json_decode($hi->h2);
        $f3_decode = json_decode($hi->h3);
        $f4_decode = json_decode($hi->h4);
        $f5_decode = json_decode($hi->h5);
        $f6_decode = json_decode($hi->h6);
        $f7_decode = json_decode($hi->h7);
        $f8_decode = json_decode($hi->h8);
        $f9_decode = json_decode($hi->h9);

        return view('tutor.activities.6_Habilidades_de_estudio.ejercicio_1', compact('f1_decode','f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode'));
    }

    public function store_hab_est_1(Request $request){

        $hi = Habilidad::where('numero_control', 14021073)->first();
        $hi->retro = $request->retro;
        $hi->cal_final = $request->cal_final;
        $hi->save();

        return 'oks s';
    }
}
