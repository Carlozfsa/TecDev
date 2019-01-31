<?php

namespace App\Http\Controllers;

use App\Mat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatsController extends Controller
{
    //

    public function create_mat_l_1(){
        return view('activities.12_Aprendizaje_matematicas.lecturas.lectura_1');
    }

    public function create_mat_l_2(){
        return view('activities.12_Aprendizaje_matematicas.lecturas.lectura_2');
    }



    public function create_mat_1(){

        if(Auth::user()->avance >=12.1) {

            $edit = NULL;

            $int = Mat::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Mat::where('numero_control', 14021073)->exists() && $int->p1 != NULL && $int->p2 != NULL && $int->p3 != NULL && $int->p4 != NULL && $int->p5 != NULL && $int->p6 != NULL && $int->p7 != NULL && $int->p8 != NULL && $int->p9 != NULL && $int->p10 != NULL) {
                $edit = 1;

                $f_decode1 = $int->p1;
                $f_decode2 = $int->p2;
                $f_decode3 = $int->p3;
                $f_decode4 = $int->p4;
                $f_decode5 = $int->p5;
                $f_decode6 = $int->p6;
                $f_decode7 = $int->p7;
                $f_decode8 = $int->p8;
                $f_decode9 = $int->p9;
                $f_decode10 = $int->p10;

            } else {
                $edit = 0;
            }

            return view('activities.12_Aprendizaje_matematicas.ejercicios.ejercicio_1', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10'));
        }else{
            return redirect()->back();
            }
        }

    public function create_mat_2(){

        if(Auth::user()->avance >=12.2) {

            $edit = NULL;

            $f = Mat::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_2 > 0) {
                $edit = 1;

                $f_decode1 = $f->a;
                $f_decode2 = $f->b;
                $f_decode3 = $f->c;

                $f_decode4 = $f->t1;
                $f_decode5 = $f->t2;
                $f_decode6 = $f->t3;
                $f_decode7 = $f->t4;
                $f_decode8 = $f->t5;
                $f_decode9 = $f->t6;

            } else {
                $edit = 0;
            }

            return view('activities.12_Aprendizaje_matematicas.ejercicios.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9'));
        }else{
            return redirect()->back();
            }
        }


    public function store_mat_1(Request $request){

        if(Mat::where('numero_control', Auth::user()->numero_control)->exists()){


            $m1 = Mat::where('numero_control', Auth::user()->numero_control)->first();

            $m1->p1 =$request->p1;
            $m1->p2 =$request->p2;
            $m1->p3 =$request->p3;
            $m1->p4 =$request->p4;
            $m1->p5 =$request->p5;
            $m1->p6 =$request->p6;
            $m1->p7 =$request->p7;
            $m1->p8 =$request->p8;
            $m1->p9 =$request->p9;
            $m1->p10 =$request->p10;
            $m1->avance_1 = 1;

            $m1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 12.2;
            $u->save();

        }else{

            $m1 = new Mat();
            $m1->numero_control = Auth::user()->numero_control;
            $m1->p1 =$request->p1;
            $m1->p2 =$request->p2;
            $m1->p3 =$request->p3;
            $m1->p4 =$request->p4;
            $m1->p5 =$request->p5;
            $m1->p6 =$request->p6;
            $m1->p7 =$request->p7;
            $m1->p8 =$request->p8;
            $m1->p9 =$request->p9;
            $m1->p10 =$request->p10;
            $m1->avance_1 = 1;

            $m1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 12.2;
            $u->save();

        }

        return redirect('/mat_1');
    }

    public function store_mat_2(Request $request){

        $m2 = Mat::where('numero_control',Auth::user()->numero_control)->first();
        $m2->a = $request->p1;
        $m2->b = $request->p2;
        $m2->c = $request->p3;

        $m2->t1 = $request->t1;
        $m2->t2 = $request->t2;
        $m2->t3 = $request->t3;
        $m2->t4 = $request->t4;
        $m2->t5 = $request->t5;
        $m2->t6 = $request->t6;
        $m2->avance_2 = 1;

        $m2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 13.1;
        $u->save();

        return redirect('/mat_2');

    }



    public function edit_mat_1(Request $request){

        $m = Mat::where('numero_control', Auth::user()->numero_control)->first();

        $m->p1 = $request->p1_e;
        $m->p2 = $request->p2_e;
        $m->p3 = $request->p3_e;
        $m->p4 = $request->p4_e;
        $m->p5 = $request->p5_e;
        $m->p6 = $request->p6_e;
        $m->p7 = $request->p7_e;
        $m->p8 = $request->p8_e;
        $m->p9 = $request->p9_e;
        $m->p10 = $request->p10_e;

        $m->save();

        return redirect()->back();
    }


    public function edit_mat_2(Request $request){

        $m2 = Mat::where('numero_control',14021073)->first();
        $m2->a = $request->p1_e;
        $m2->b = $request->p2_e;
        $m2->c = $request->p3_e;

        $m2->t1 = $request->t1_e;
        $m2->t2 = $request->t2_e;
        $m2->t3 = $request->t3_e;
        $m2->t4 = $request->t4_e;
        $m2->t5 = $request->t5_e;
        $m2->t6 = $request->t6_e;

        $m2->save();

        return redirect()->back();
    }

}
