<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteligenciaController extends Controller
{
    //

    public function create_int_mult_ej_1(){
        return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_1');
    }

    public function create_int_mult_ej_2(){
        return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_2');
    }

    public function create_int_mult_ej_3(){
        return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_3');
    }

    public function create_int_mult_ej_4(){
        return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_4');
    }

    public function create_int_mult_res(){
        return view('activities.5_Inteligencias_multiples.ejercicios.resultados_ejercicio_1');
    }


    public function store_int_mult_ej_1(Request $request){

        $l1 = (integer)$request->ling1;
        $l2 = (integer)$request->ling2;
        $l3 = (integer)$request->ling3;
        $l4 = (integer)$request->ling4;
        $l5 = (integer)$request->ling5;
        $l6 = (integer)$request->ling6;
        $l7 = (integer)$request->ling7;
        $l8 = (integer)$request->ling8;
        $l9 = (integer)$request->ling9;
        $l10 = (integer)$request->ling10;

        $m1 = (integer)$request->mat1;
        $m2 = (integer)$request->mat2;
        $m3 = (integer)$request->mat3;
        $m4 = (integer)$request->mat4;
        $m5 = (integer)$request->mat5;
        $m6 = (integer)$request->mat6;
        $m7 = (integer)$request->mat7;
        $m8 = (integer)$request->mat8;
        $m9 = (integer)$request->mat9;
        $m10 = (integer)$request->mat10;

        $e1 = (integer)$request->esp1;
        $e2 = (integer)$request->esp2;
        $e3 = (integer)$request->esp3;
        $e4 = (integer)$request->esp4;
        $e5 = (integer)$request->esp5;
        $e6 = (integer)$request->esp6;
        $e7 = (integer)$request->esp7;
        $e8 = (integer)$request->esp8;
        $e9 = (integer)$request->esp9;
        $e10 = (integer)$request->esp10;

        $s1 = (integer)$request->sin1;
        $s2 = (integer)$request->sin2;
        $s3 = (integer)$request->sin3;
        $s4 = (integer)$request->sin4;
        $s5 = (integer)$request->sin5;
        $s6 = (integer)$request->sin6;
        $s7 = (integer)$request->sin7;
        $s8 = (integer)$request->sin8;
        $s9 = (integer)$request->sin9;
        $s10 = (integer)$request->sin10;

        $mu1 = (integer)$request->mus1;
        $mu2 = (integer)$request->mus2;
        $mu3 = (integer)$request->mus3;
        $mu4 = (integer)$request->mus4;
        $mu5 = (integer)$request->mus5;
        $mu6 = (integer)$request->mus6;
        $mu7 = (integer)$request->mus7;
        $mu8 = (integer)$request->mus8;
        $mu9 = (integer)$request->mus9;
        $mu10 = (integer)$request->mus10;

        $i1 = (integer)$request->int1;
        $i2 = (integer)$request->int2;
        $i3 = (integer)$request->int3;
        $i4 = (integer)$request->int4;
        $i5 = (integer)$request->int5;
        $i6 = (integer)$request->int6;
        $i7 = (integer)$request->int7;
        $i8 = (integer)$request->int8;
        $i9 = (integer)$request->int9;
        $i10 = (integer)$request->int10;

        $intra1 = (integer)$request->int1;
        $intra2 = (integer)$request->int2;
        $intra3 = (integer)$request->int3;
        $intra4 = (integer)$request->int4;
        $intra5 = (integer)$request->int5;
        $intra6 = (integer)$request->int6;
        $intra7 = (integer)$request->int7;
        $intra8 = (integer)$request->int8;
        $intra9 = (integer)$request->int9;
        $intra10 = (integer)$request->int10;

        $r1 = $l1+$l2+$l3+$l4+$l5+$l6+$l7+$l8+$l9+$l10;
        $r2 = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
        $r3 = $e1+$e2+$e3+$e4+$e5+$e6+$e7+$e8+$e9+$e10;
        $r4 = $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;
        $r5 = $mu1+$mu2+$mu3+$mu4+$mu5+$mu6+$mu7+$mu8+$mu9+$mu10;



        return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_1', compact('r1', 'r2'));

        return 'oks';
    }
}
