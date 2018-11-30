<?php

namespace App\Http\Controllers;

use App\Desarrollohumano;
use Illuminate\Http\Request;

class TutorDesarrolloHumanoController extends Controller
{
    //

    public function create_des_hum_int_1(){
        $op = Desarrollohumano::where('numero_control', 14021073)->first();
        $f_decode = json_decode($op->e1_difs);
        $f2_decode = json_decode($op->e2_difs);

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_1', compact('f_decode', 'f2_decode'));
    }

    public function create_des_hum_int_2(){
        $op = Desarrollohumano::where('numero_control', 14021073)->first();
        $f1_decode = $op->e2_a1;
        $f2_decode = $op->e2_a2;
        $f3_decode = $op->e2_a3;
        $f4_decode = $op->e2_a4;

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_2', compact('f1_decode', 'f2_decode', 'f3_decode', 'f4_decode'));
    }

    public function create_des_hum_int_3(){
        $op = Desarrollohumano::where('numero_control', 14021073)->first();
        $f1_decode = $op->e3_a1_1;
        $f2_decode = $op->e3_a1_2;
        $f3_decode = $op->e3_a2_1;
        $f4_decode = $op->e3_a2_2;

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_3', compact('f1_decode', 'f2_decode', 'f3_decode', 'f4_decode'));
    }

    public function create_des_hum_int_4(){
        $op = Desarrollohumano::where('numero_control', 14021073)->first();
        $f1_decode = $op->e4_a1_1;
        $f2_decode = $op->e4_a1_2;
        $f3_decode = $op->e4_a2_1;
        $f4_decode = $op->e4_a2_2;
        $f5_decode = $op->e4_a3_1;
        $f6_decode = $op->e4_a3_2;
        $f7_decode = $op->e4_a4_1;
        $f8_decode = $op->e4_a4_2;
        $f9_decode = $op->e4_a5_1;
        $f10_decode = $op->e4_a5_2;

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_4', compact('f1_decode', 'f2_decode', 'f3_decode', 'f4_decode', 'f5_decode', 'f6_decode', 'f7_decode', 'f8_decode', 'f9_decode', 'f10_decode'));
    }

    public function create_des_hum_int_5(){
        $op = Desarrollohumano::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($op->e5_a1);

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_5', compact('f1_decode'));
    }

    public function create_des_hum_int_6(){
        $op = Desarrollohumano::where('numero_control', 14021073)->first();
        $f1_decode = $op->e6_a1;

        return view('tutor.activities.4_desarrollo_humano_integral.ejercicio_6', compact('f1_decode'));
    }

    public function store_des_hum_int_1(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro;
        $tf->cal_1 = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_des_hum_int_2(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro;
        $tf->cal_2 = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_des_hum_int_3(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro;
        $tf->cal_3 = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_des_hum_int_4(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro;
        $tf->cal_4 = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_des_hum_int_5(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_5 = $request->retro;
        $tf->cal_5 = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_des_hum_int_6(Request $request){

        $tf = Desarrollohumano::where('numero_control', 14021073)->first();
        $tf->retro_6 = $request->retro;
        $tf->cal_6 = $request->cal;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $request->cal;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6)/6;

        $tf->cal_final = $t;

        $tf->save();

        return 'oks';
    }
}
