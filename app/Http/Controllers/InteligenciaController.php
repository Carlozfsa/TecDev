<?php

namespace App\Http\Controllers;

use App\Inteligencia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteligenciaController extends Controller
{
    //

    public function create_int_mult_l_1(){
        return view('activities.5_Inteligencias_multiples.lecturas.lectura_1');
    }

    public function create_int_mult_l_2(){
        return view('activities.5_Inteligencias_multiples.lecturas.lectura_2');
    }

    public function create_int_mult_l_3(){
        return view('activities.5_Inteligencias_multiples.lecturas.lectura_3');
    }



    public function create_int_mult_ej_1(){
        if(Auth::User()->avance >= 5.1){

            $edit = NULL;

            $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Inteligencia::where('numero_control', Auth::user()->numero_control)->exists() && $int->ar_1 && $int->ar_2 && $int->ar_3 && $int->ar_4 && $int->ar_5 && $int->ar_6 && $int->ar_7) {
                $edit = 1;

                $ar_1 = json_decode($int->ar_1, true);
                $ar_2 = json_decode($int->ar_2, true);
                $ar_3 = json_decode($int->ar_3, true);
                $ar_4 = json_decode($int->ar_4, true);
                $ar_5 = json_decode($int->ar_5, true);
                $ar_6 = json_decode($int->ar_6, true);
                $ar_7 = json_decode($int->ar_7, true);

            } else {
                $edit = 0;
            }

            return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_1', compact('edit', 'ar_1', 'ar_2', 'ar_3', 'ar_4', 'ar_5', 'ar_6', 'ar_7'));
        }else{
            return redirect()->back();
        }
    }

    public function create_int_mult_ej_2(){
        if(Auth::User()->avance >= 5.2){

            $edit = NULL;

            $f = Inteligencia::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_2 > 0) {
                $edit = 1;

                $f_decode1 = $f->num_1;
                $f_decode2 = $f->num_2;
                $f_decode3 = $f->num_3;

            } else {
                $edit = 0;
            }

            return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3'));
        }else{
            return redirect()->back();
        }
    }

    public function create_int_mult_ej_3(){
        if(Auth::User()->avance >= 5.3){

            $edit = NULL;

            $f = Inteligencia::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_3 > 0) {
                $edit = 1;

                $f_decode1 = $f->log_1;

            } else {
                $edit = 0;
            }



            return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_3', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
    }

    public function create_int_mult_ej_4(){
        if(Auth::User()->avance >= 5.4){

            $edit = NULL;

            $f = Inteligencia::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_4 > 0) {
                $edit = 1;

                $f_decode1 = $f->prob_1;

            } else {
                $edit = 0;
            }


            return view('activities.5_Inteligencias_multiples.ejercicios.ejercicio_4', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
    }


    public function create_int_mult_res(){
        if(Auth::User()->avance >= 6.1){

            $t = Inteligencia::where('numero_control', 14021073)->first();

            $t1 = $t->t_ling;
            $t2 = $t->t_mat;
            $t3 = $t->t_esp;
            $t4 = $t->t_cin;
            $t5 = $t->t_mus;
            $t6 = $t->t_inter;
            $t7 = $t->t_intra;

            return view('activities.5_Inteligencias_multiples.ejercicios.resultados_ejercicio_1', compact('t1','t2','t3','t4','t5','t6','t7'));
        }else{
            return redirect()->back();
        }
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

        $intra1 = (integer)$request->intra1;
        $intra2 = (integer)$request->intra2;
        $intra3 = (integer)$request->intra3;
        $intra4 = (integer)$request->intra4;
        $intra5 = (integer)$request->intra5;
        $intra6 = (integer)$request->intra6;
        $intra7 = (integer)$request->intra7;
        $intra8 = (integer)$request->intra8;
        $intra9 = (integer)$request->intra9;
        $intra10 = (integer)$request->intra10;

        $t_ling = $l1+$l2+$l3+$l4+$l5+$l6+$l7+$l8+$l9+$l10;
        $t_mat = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
        $t_esp = $e1+$e2+$e3+$e4+$e5+$e6+$e7+$e8+$e9+$e10;
        $t_cin = $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;
        $t_mus = $mu1+$mu2+$mu3+$mu4+$mu5+$mu6+$mu7+$mu8+$mu9+$mu10;
        $t_inter = $i1+$i2+$i3+$i4+$i5+$i6+$i7+$i8+$i9+$i10;
        $t_intra = $intra1+$intra2+$intra3+$intra4+$intra5+$intra6+$intra7+$intra8+$intra9+$intra10;


        $a1 = array(1=>$l1,2=>$l2,3=>$l3,4=>$l4,5=>$l5,6=>$l6,7=>$l7,8=>$l8,9=>$l9,10=>$l10);
        $a2 = array(1=>$m1,2=>$m2,3=>$m3,4=>$m4,5=>$m5,6=>$m6,7=>$m7,8=>$m8);
        $a3 = array(1=>$e1,2=>$e2,3=>$e3,4=>$e4,5=>$e5,6=>$e6,7=>$e7,8=>$e8,9=>$e9);
        $a4 = array(1=>$s1,2=>$s2,3=>$s3,4=>$s4,5=>$s5,6=>$s6,7=>$s7,8=>$s8,9=>$s9,10=>$s10);
        $a5 = array(1=>$mu1,2=>$mu2,3=>$mu3,4=>$mu4,5=>$mu5,6=>$mu6,7=>$mu7,8=>$mu8);
        $a6 = array(1=>$i1,2=>$i2,3=>$i3,4=>$i4,5=>$i5,6=>$i6,7=>$i7,8=>$i8,9=>$i9,10=>$i10);
        $a7 = array(1=>$intra1,2=>$intra2,3=>$intra3,4=>$intra4,5=>$intra5,6=>$intra6,7=>$intra7,8=>$intra8,9=>$intra9,10=>$intra10);

        $ar1 = json_encode($a1);
        $ar2 = json_encode($a2);
        $ar3 = json_encode($a3);
        $ar4 = json_encode($a4);
        $ar5 = json_encode($a5);
        $ar6 = json_encode($a6);
        $ar7 = json_encode($a7);

        if(Inteligencia::where('numero_control', Auth::user()->numero_control)->exists()){

            $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();
            $int->numero_control = 14021073;

            $int->t_ling = $t_ling;
            $int->t_mat = $t_mat;
            $int->t_esp = $t_esp;
            $int->t_cin = $t_cin;
            $int->t_mus = $t_mus;
            $int->t_inter = $t_inter;
            $int->t_intra = $t_intra;

            $int->ar_1 = $ar1;
            $int->ar_2 = $ar2;
            $int->ar_3 = $ar3;
            $int->ar_4 = $ar4;
            $int->ar_5 = $ar5;
            $int->ar_6 = $ar6;
            $int->ar_7 = $ar7;

            $int->avance_1 = 1;

            $int->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 5.2;
            $u->save();
        }else{
            $int = new Inteligencia();
            $int->numero_control = 14021073;

            $int->t_ling = $t_ling;
            $int->t_mat = $t_mat;
            $int->t_esp = $t_esp;
            $int->t_cin = $t_cin;
            $int->t_mus = $t_mus;
            $int->t_inter = $t_inter;
            $int->t_intra = $t_intra;

            $int->ar_1 = $ar1;
            $int->ar_2 = $ar2;
            $int->ar_3 = $ar3;
            $int->ar_4 = $ar4;
            $int->ar_5 = $ar5;
            $int->ar_6 = $ar6;
            $int->ar_7 = $ar7;

            $int->avance_1 = 1;

            $int->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 5.2;
            $u->save();

        }

        return redirect('/int_mult_ej_1');
    }

    public function store_int_mult_ej_2(Request $request){

        $int = Inteligencia::where('numero_control', 14021073)->first();

        $int->num_1 = $request->num_1;
        $int->num_2 = $request->num_2;
        $int->num_3 = $request->num_3;
        $int->avance_2 = 1;
        $int->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 5.3;
        $u->save();

        return redirect('/int_mult_ej_2');

    }

    public function store_int_mult_ej_3(Request $request){

        $int = Inteligencia::where('numero_control', 14021073)->first();

        $int->log_1 = $request->log_1;
        $int->avance_3 = 1;
        $int->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 5.4;
        $u->save();

        return redirect('/int_mult_ej_3');

    }

    public function store_int_mult_ej_4(Request $request){

        $int = Inteligencia::where('numero_control', 14021073)->first();

        $int->prob_1 = $request->prob_1;
        $int->avance_4 = 1;
        $int->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 6.1;
        $u->save();

        return redirect('/int_mult_ej_4');

    }


    public function edit_int_mult_ej_1(Request $request){


        $l1 = (integer)$request->ling1_e;
        $l2 = (integer)$request->ling2_e;
        $l3 = (integer)$request->ling3_e;
        $l4 = (integer)$request->ling4_e;
        $l5 = (integer)$request->ling5_e;
        $l6 = (integer)$request->ling6_e;
        $l7 = (integer)$request->ling7_e;
        $l8 = (integer)$request->ling8_e;
        $l9 = (integer)$request->ling9_e;
        $l10 = (integer)$request->ling10_e;

        $m1 = (integer)$request->mat1_e;
        $m2 = (integer)$request->mat2_e;
        $m3 = (integer)$request->mat3_e;
        $m4 = (integer)$request->mat4_e;
        $m5 = (integer)$request->mat5_e;
        $m6 = (integer)$request->mat6_e;
        $m7 = (integer)$request->mat7_e;
        $m8 = (integer)$request->mat8_e;
        $m9 = (integer)$request->mat9_e;
        $m10 = (integer)$request->mat10_e;

        $e1 = (integer)$request->esp1_e;
        $e2 = (integer)$request->esp2_e;
        $e3 = (integer)$request->esp3_e;
        $e4 = (integer)$request->esp4_e;
        $e5 = (integer)$request->esp5_e;
        $e6 = (integer)$request->esp6_e;
        $e7 = (integer)$request->esp7_e;
        $e8 = (integer)$request->esp8_e;
        $e9 = (integer)$request->esp9_e;
        $e10 = (integer)$request->esp10_e;

        $s1 = (integer)$request->sin1_e;
        $s2 = (integer)$request->sin2_e;
        $s3 = (integer)$request->sin3_e;
        $s4 = (integer)$request->sin4_e;
        $s5 = (integer)$request->sin5_e;
        $s6 = (integer)$request->sin6_e;
        $s7 = (integer)$request->sin7_e;
        $s8 = (integer)$request->sin8_e;
        $s9 = (integer)$request->sin9_e;
        $s10 = (integer)$request->sin10_e;

        $mu1 = (integer)$request->mus1_e;
        $mu2 = (integer)$request->mus2_e;
        $mu3 = (integer)$request->mus3_e;
        $mu4 = (integer)$request->mus4_e;
        $mu5 = (integer)$request->mus5_e;
        $mu6 = (integer)$request->mus6_e;
        $mu7 = (integer)$request->mus7_e;
        $mu8 = (integer)$request->mus8_e;
        $mu9 = (integer)$request->mus9_e;
        $mu10 = (integer)$request->mus10_e;

        $i1 = (integer)$request->int1_e;
        $i2 = (integer)$request->int2_e;
        $i3 = (integer)$request->int3_e;
        $i4 = (integer)$request->int4_e;
        $i5 = (integer)$request->int5_e;
        $i6 = (integer)$request->int6_e;
        $i7 = (integer)$request->int7_e;
        $i8 = (integer)$request->int8_e;
        $i9 = (integer)$request->int9_e;
        $i10 = (integer)$request->int10_e;

        $intra1 = (integer)$request->intra1_e;
        $intra2 = (integer)$request->intra2_e;
        $intra3 = (integer)$request->intra3_e;
        $intra4 = (integer)$request->intra4_e;
        $intra5 = (integer)$request->intra5_e;
        $intra6 = (integer)$request->intra6_e;
        $intra7 = (integer)$request->intra7_e;
        $intra8 = (integer)$request->intra8_e;
        $intra9 = (integer)$request->intra9_e;
        $intra10 = (integer)$request->intra10_e;

        $t_ling = $l1+$l2+$l3+$l4+$l5+$l6+$l7+$l8+$l9+$l10;
        $t_mat = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
        $t_esp = $e1+$e2+$e3+$e4+$e5+$e6+$e7+$e8+$e9+$e10;
        $t_cin = $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;
        $t_mus = $mu1+$mu2+$mu3+$mu4+$mu5+$mu6+$mu7+$mu8+$mu9+$mu10;
        $t_inter = $i1+$i2+$i3+$i4+$i5+$i6+$i7+$i8+$i9+$i10;
        $t_intra = $intra1+$intra2+$intra3+$intra4+$intra5+$intra6+$intra7+$intra8+$intra9+$intra10;


        $a1 = array(1=>$l1,2=>$l2,3=>$l3,4=>$l4,5=>$l5,6=>$l6,7=>$l7,8=>$l8,9=>$l9,10=>$l10);
        $a2 = array(1=>$m1,2=>$m2,3=>$m3,4=>$m4,5=>$m5,6=>$m6,7=>$m7,8=>$m8);
        $a3 = array(1=>$e1,2=>$e2,3=>$e3,4=>$e4,5=>$e5,6=>$e6,7=>$e7,8=>$e8,9=>$e9);
        $a4 = array(1=>$s1,2=>$s2,3=>$s3,4=>$s4,5=>$s5,6=>$s6,7=>$s7,8=>$s8,9=>$s9,10=>$s10);
        $a5 = array(1=>$mu1,2=>$mu2,3=>$mu3,4=>$mu4,5=>$mu5,6=>$mu6,7=>$mu7,8=>$mu8);
        $a6 = array(1=>$i1,2=>$i2,3=>$i3,4=>$i4,5=>$i5,6=>$i6,7=>$i7,8=>$i8,9=>$i9,10=>$i10);
        $a7 = array(1=>$intra1,2=>$intra2,3=>$intra3,4=>$intra4,5=>$intra5,6=>$intra6,7=>$intra7,8=>$intra8,9=>$intra9,10=>$intra10);

        $ar1 = json_encode($a1);
        $ar2 = json_encode($a2);
        $ar3 = json_encode($a3);
        $ar4 = json_encode($a4);
        $ar5 = json_encode($a5);
        $ar6 = json_encode($a6);
        $ar7 = json_encode($a7);

        $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();

        $int->t_ling = $t_ling;
        $int->t_mat = $t_mat;
        $int->t_esp = $t_esp;
        $int->t_cin = $t_cin;
        $int->t_mus = $t_mus;
        $int->t_inter = $t_inter;
        $int->t_intra = $t_intra;

        $int->ar_1 = $ar1;
        $int->ar_2 = $ar2;
        $int->ar_3 = $ar3;
        $int->ar_4 = $ar4;
        $int->ar_5 = $ar5;
        $int->ar_6 = $ar6;
        $int->ar_7 = $ar7;

        $int->save();


        return redirect()->back();


    }

    public function edit_int_mult_ej_2(Request $request){

        $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();

        $int->num_1 = $request->num_1_e;
        $int->num_2 = $request->num_2_e;
        $int->num_3 = $request->num_3_e;
        $int->save();

        return redirect()->back();

    }

    public function edit_int_mult_ej_3(Request $request){

        $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();

        $int->log_1 = $request->log_1_e;
        $int->save();

        return redirect()->back();

    }

    public function edit_int_mult_ej_4(Request $request){

        $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();

        $int->log_1 = $request->prob_1_e;
        $int->save();

        return redirect()->back();

    }
}
