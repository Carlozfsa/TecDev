<?php

namespace App\Http\Controllers;

use App\Inteligencia;
use Illuminate\Http\Request;

class TutorInteligenciasController extends Controller
{
    //

    public function create_int_mult_ej_1(){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $ling = $i->t_ling;
        $mat = $i->t_mat;
        $esp = $i->t_esp;
        $cin = $i->t_cin;
        $mus = $i->t_mus;
        $inter = $i->t_inter;
        $intra = $i->t_intra;

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_1', compact('ling', 'mat','esp','cin', 'mus', 'inter', 'intra'));

    }

    public function create_int_mult_ej_2(){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $num1 = $i->num_1;
        $num2 = $i->num_2;
        $num3 = $i->num_3;

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_2', compact('num1', 'num2','num3'));

    }

    public function create_int_mult_ej_3(){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $log1 = $i->log_1;

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_3', compact('log1'));

    }

    public function create_int_mult_ej_4(){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $prob1 = $i->prob_1;

        return view('tutor.activities.5_Inteligencias_multiples.ejercicio_4', compact('prob1'));

    }

    public function create_asign(){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $prob1 = $i->prob_1;

        return view('tutor.activities.5_Inteligencias_multiples.asign', compact('prob1'));

    }




    public function store_int_mult_ej_1(Request $request){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $i->retro_1 = $request->retro;
        $i->cal_1 = $request->cal;
        $i->save();

        return redirect()->back();
    }

    public function store_int_mult_ej_2(Request $request){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $i->retro_2 = $request->retro;
        $i->cal_2 = $request->cal;
        $i->save();

        return redirect()->back();
    }

    public function store_int_mult_ej_3(Request $request){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $i->retro_3 = $request->retro;
        $i->cal_3 = $request->cal;
        $i->save();

        return redirect()->back();
    }

    public function store_int_mult_ej_4(Request $request){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $i->retro_4 = $request->retro;
        $i->cal_4 = $request->cal;

        $c1 = $i->cal_1;
        $c2 = $i->cal_2;
        $c3 = $i->cal_3;
        $c4 = $request->cal;

        $t = ($c1+$c2+$c3+$c4)/4;
        $i->cal_general = $t;

        $i->save();

        return redirect()->back();
    }

    public function store_asign(Request $request){

        $i = Inteligencia::where('numero_control', 14021073)->first();
        $i->intel = $request->int;
        $i->save();

        return redirect()->back();
    }
}
