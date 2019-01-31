<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PensamientosController extends Controller
{
    //
    public function create_pens_l_1(){
        return view('activities.8_Habilidades_del_Pensamiento.lecturas.lectura_1');
    }

    public function create_pens_l_2(){
        return view('activities.8_Habilidades_del_Pensamiento.lecturas.lectura_2');
    }

    public function create_pens_l_3(){
        return view('activities.8_Habilidades_del_Pensamiento.lecturas.lectura_3');
    }

    public function create_pens_l_4(){
        return view('activities.8_Habilidades_del_Pensamiento.lecturas.lectura_4');
    }






    public function create_pens_1(){
        if(Auth::User()->avance >= 8.1) {

            $edit = NULL;

            $int = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Pensamiento::where('numero_control', Auth::user()->numero_control)->exists() && $int->a!= NULL && $int->b!= NULL && $int->c!= NULL && $int->d!= NULL && $int->e!= NULL && $int->f!= NULL && $int->g!= NULL && $int->h!= NULL && $int->i!= NULL) {
                $edit = 1;

                $f_decode1 = $int->a;
                $f_decode2 = $int->b;
                $f_decode3 = $int->c;
                $f_decode4 = $int->d;
                $f_decode5 = $int->e;
                $f_decode6 = $int->f;
                $f_decode7 = $int->g;
                $f_decode8 = $int->h;
                $f_decode9 = $int->i;

            } else {
                $edit = 0;
            }

            return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_1', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9'));
        }else{
            return redirect()->back();
        }
    }

    public function create_pens_2()
    {
        if(Auth::User()->avance >= 8.2) {

            return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_2');
        }else{
            return redirect()->back();
        }
    }

    public function create_pens_3(){
        if(Auth::User()->avance >= 8.2) {

            $edit = NULL;

            $f = Pensamiento::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_2 > 0) {
                $edit = 1;

                $f_decode1 = $f->e2_p1;
                $f_decode2 = $f->e2_p2;
                $f_decode3 = $f->e2_p3;
                $f_decode4 = $f->e2_p4;
                $f_decode5 = $f->e2_p5;

            } else {
                $edit = 0;
            }
            return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_3', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5'));
        }else{
            return redirect()->back();
        }
        }


    public function create_pens_4(){
        if(Auth::User()->avance >= 8.4) {

            $edit = NULL;

            $f = Pensamiento::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_3 > 0) {
                $edit = 1;

                $f_decode1 = $f->e3_1_1;
                $f_decode2 = $f->e3_1_2;
                $f_decode3 = $f->e3_1_3;
                $f_decode4 = $f->e3_2_1;
                $f_decode5 = $f->e3_2_2;
                $f_decode6 = $f->e3_3_1;
                $f_decode7 = $f->e3_3_2;
                $f_decode8 = $f->e3_4_1;
                $f_decode9 = $f->e3_4_2;
                $f_decode10 = $f->e3_5_1;
                $f_decode11 = $f->e3_5_2;


            } else {
                $edit = 0;
            }

            return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_4', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11'));
        }else{
            return redirect()->back();
        }

        }

    public function create_pens_5(){
        if(Auth::User()->avance >= 8.5) {

            $edit = NULL;

            $f = Pensamiento::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_4 > 0) {
                $edit = 1;

                $f_decode1 = $f->o1;
                $f_decode2 = $f->o2;
                $f_decode3 = $f->o3;
                $f_decode4 = $f->o4;

            } else {
                $edit = 0;
            }

            return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_5', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4'));
        }else{
            return redirect()->back();
        }
        }

    public function store_pens_1(Request $request){

        if(Pensamiento::where('numero_control', Auth::user()->numero_control)->exists()){

            $e1 = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();

            $e1->a = $request->a;
            $e1->b = $request->b;
            $e1->c = $request->c;
            $e1->d = $request->d;
            $e1->e = $request->e;
            $e1->f = $request->f;
            $e1->g = $request->g;
            $e1->h = $request->h;
            $e1->i = $request->i;
            $e1->avance_1 = 1;

            $e1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 8.2;
            $u->save();
        }else{

            $e1 = new Pensamiento();
            $e1->numero_control = Auth::user()->numero_control;

            $e1->a = $request->a;
            $e1->b = $request->b;
            $e1->c = $request->c;
            $e1->d = $request->d;
            $e1->e = $request->e;
            $e1->f = $request->f;
            $e1->g = $request->g;
            $e1->h = $request->h;
            $e1->i = $request->i;
            $e1->avance_1 = 1;

            $e1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 8.2;
            $u->save();
        }

        return redirect('/pens_1');
    }

    public function store_pens_3(Request $request){

        $e3 = Pensamiento::where('numero_control',14021073)->first();
        $e3->e2_p1 = $request->text1;
        $e3->e2_p2 = $request->text2;
        $e3->e2_p3 = $request->text3;
        $e3->e2_p4 = $request->text4;
        $e3->e2_p5 = $request->text5;
        $e3->avance_2 = 1;

        $e3->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 8.4;
        $u->save();

        return redirect('/pens_3');

    }

    public function store_pens_4(Request $request){

        $e4 = Pensamiento::where('numero_control',14021073)->first();

        $e4->e3_1_1 = $request->text1;
        $e4->e3_1_2 = $request->text2;
        $e4->e3_1_3 = $request->text3;
        $e4->e3_2_1 = $request->text4;
        $e4->e3_2_2 = $request->text5;
        $e4->e3_3_1 = $request->text6;
        $e4->e3_3_2 = $request->text7;
        $e4->e3_4_1 = $request->text8;
        $e4->e3_4_2 = $request->text9;
        $e4->e3_5_1 = $request->text10;
        $e4->e3_5_2 = $request->text11;
        $e4->avance_3 = 1;

        $e4->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 8.5;
        $u->save();

        return redirect('/pens_4');

    }

    public function store_pens_5(Request $request){

        $o1 = (integer)$request->o1;
        $o2 = (integer)$request->o2;
        $o3 = (integer)$request->o3;
        $o4 = (integer)$request->o4;

        $p = Pensamiento::where('numero_control',14021073)->first();
        $p->o1 = $o1;
        $p->o2 = $o2;
        $p->o3 = $o3;
        $p->o4 = $o4;
        $p->avance_4 = 1;

        $p->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 9.1;
        $u->save();

        return redirect('/pens_5');

    }

    public function edit_pens_1(Request $request){

        $e = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();


        $e->a = $request->a_e;
        $e->b = $request->b_e;
        $e->c = $request->c_e;
        $e->d = $request->d_e;
        $e->e = $request->e_e;
        $e->f = $request->f_e;
        $e->g = $request->g_e;
        $e->h = $request->h_e;
        $e->i = $request->i_e;

        $e->save();

        return redirect()->back();
    }

    public function edit_pens_3(Request $request){

        $e = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();


        $e->e2_p1 = $request->text1_e;
        $e->e2_p2 = $request->text2_e;
        $e->e2_p3 = $request->text3_e;
        $e->e2_p4 = $request->text4_e;
        $e->e2_p5 = $request->text5_e;

        $e->save();

        return redirect()->back();
    }

    public function edit_pens_4(Request $request){

        $e = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();


        $e->e3_1_1 = $request->text1_e;
        $e->e3_1_2 = $request->text2_e;
        $e->e3_1_3 = $request->text3_e;
        $e->e3_2_1 = $request->text4_e;
        $e->e3_2_2 = $request->text5_e;
        $e->e3_3_1 = $request->text6_e;
        $e->e3_3_2 = $request->text7_e;
        $e->e3_4_1 = $request->text8_e;
        $e->e3_4_2 = $request->text9_e;
        $e->e3_5_1 = $request->text10_e;
        $e->e3_5_2 = $request->text11_e;

        $e->save();

        return redirect()->back();
    }

    public function edit_pens_5(Request $request){

        $e = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();

        $o1 = (integer)$request->o1_e;
        $o2 = (integer)$request->o2_e;
        $o3 = (integer)$request->o3_e;
        $o4 = (integer)$request->o4_e;

        $e->o1 = $o1;
        $e->o2 = $o2;
        $e->o3 = $o3;
        $e->o4 = $o4;

        $e->save();

        return redirect()->back();
    }

    }
