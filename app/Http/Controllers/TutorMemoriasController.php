<?php

namespace App\Http\Controllers;

use App\Memoria;
use Illuminate\Http\Request;

class TutorMemoriasController extends Controller
{

    public function create_mem_1(){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $f1_decode = $hi->ve;
        $f2_decode = $hi->vi;
        $f3_decode = $hi->c;

        return view('tutor.activities.7_Memoria.ejercicio_1', compact('f1_decode','f2_decode','f3_decode'));
    }

    public function create_mem_2(){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($hi->c1);
        $f2_decode = $hi->con1;

        return view('tutor.activities.7_Memoria.ejercicio_2', compact('f1_decode','f2_decode'));
    }

    public function create_mem_3(){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($hi->c2);
        $f2_decode = $hi->con2;

        return view('tutor.activities.7_Memoria.ejercicio_3', compact('f1_decode','f2_decode'));
    }

    public function create_mem_4(){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $f1_decode = $hi->esc;

        return view('tutor.activities.7_Memoria.ejercicio_4', compact('f1_decode'));
    }

    public function store_mem_1(Request $request){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $hi->retro_1 = $request->retro;
        $hi->cal_1 = $request->cal;
        $hi->save();

        return redirect()->back();
    }

    public function store_mem_2(Request $request){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $hi->retro_2 = $request->retro;
        $hi->cal_2 = $request->cal;
        $hi->save();

        return redirect()->back();
    }

    public function store_mem_3(Request $request){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $hi->retro_3 = $request->retro;
        $hi->cal_3 = $request->cal;
        $hi->save();

        return redirect()->back();
    }

    public function store_mem_4(Request $request){

        $hi = Memoria::where('numero_control', 14021073)->first();
        $hi->retro_4 = $request->retro;
        $hi->cal_4 = $request->cal;

        $c1 = $hi->cal_1;
        $c2 = $hi->cal_2;
        $c3 = $hi->cal_3;
        $c4 = $request->cal;

        $t = ($c1+$c2+$c3+$c4)/4;

        $hi->cal_final = $t;

        $hi->save();

        return redirect()->back();
    }
}
