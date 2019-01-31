<?php

namespace App\Http\Controllers;

use App\Relacion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelacionsController extends Controller
{
    //

    public function create_rel_sim_1()
    {
        if(Auth::user()->avance >=14.1) {

            $edit = NULL;

        $int = Relacion::where('numero_control', Auth::user()->numero_control)->first();


        if (Relacion::where('numero_control', Auth::user()->numero_control)->exists() && $int->e1_1 != NULL && $int->e1_2 != NULL && $int->e1_3 != NULL && $int->e1_4 != NULL && $int->e1_5 != NULL && $int->e1_6 != NULL && $int->e1_7 != NULL && $int->e1_8 != NULL) {

            $edit = 1;

            $f_decode1 = $int->e1_1;
            $f_decode2 = $int->e1_2;
            $f_decode3 = $int->e1_3;
            $f_decode4 = $int->e1_4;
            $f_decode5 = $int->e1_5;
            $f_decode6 = $int->e1_6;
            $f_decode7 = $int->e1_7;
            $f_decode8 = $int->e1_8;

        } else {
            $edit = 0;

        }

        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_1', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        }else{
            return redirect()->back();
        }
    }

    public function create_rel_sim_2()
    {
        if(Auth::user()->avance >=14.2) {


            $edit = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();
        $f_decode1 = NULL;

        if ($f->avance_2 > 0) {
            $edit = 1;

            $f_decode1 = $f->e2_1;
            $f_decode2 = $f->e2_2;
            $f_decode3 = $f->e2_3;
            $f_decode4 = $f->e2_4;
            $f_decode5 = $f->e2_5;
            $f_decode6 = $f->e2_6;
            $f_decode7 = $f->e2_7;

        } else {
            $edit = 0;
        }

        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7'));
        }else{
            return redirect()->back();
        }
        }

    public function create_rel_sim_3()
    {
        if(Auth::user()->avance >=14.3) {


            $edit = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();
        $f_decode1 = NULL;

        if ($f->avance_3 > 0) {
            $edit = 1;

            $f_decode1 = $f->e3_1;

        } else {
            $edit = 0;
        }

        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_3', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
        }

    public function create_rel_sim_4()
    {
        if(Auth::user()->avance >=14.4) {


            $edit = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();
        $f_decode1 = NULL;

        if ($f->avance_4 > 0) {
            $edit = 1;

            $f_decode1 = $f->e4_1;
            $f_decode2 = $f->e4_2;
            $f_decode3 = $f->e4_3;

        } else {
            $edit = 0;
        }

        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_4', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3'));
        }else{
            return redirect()->back();
        }
    }

    public function create_rel_sim_5()
    {
        if(Auth::user()->avance >=14.5) {


            $edit = NULL;

        $f = Relacion::where('numero_control', 14021073)->first();
        $f_decode1 = NULL;

        if ($f->avance_5 > 0) {
            $edit = 1;

            $f_decode1 = $f->e5_1;

        } else {
            $edit = 0;
        }

        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_5', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
        }


    public function store_rel_sim_1(Request $request)
    {

        if(Relacion::where('numero_control', Auth::user()->numero_control)->exists()){

            $r1 = Relacion::where('numero_control', Auth::user()->numero_control)->first();

            $r1->e1_1 = $request->a;
            $r1->e1_2 = $request->b;
            $r1->e1_3 = $request->c;
            $r1->e1_4 = $request->d;
            $r1->e1_5 = $request->e;
            $r1->e1_6 = $request->f;
            $r1->e1_7 = $request->g;
            $r1->e1_8 = $request->h;

            $r1->avance_1 = 1;

            $r1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 14.2;
            $u->save();

        }else{

            $r1 = new Relacion();

            $r1->numero_control = 14021073;

            $r1->e1_1 = $request->a;
            $r1->e1_2 = $request->b;
            $r1->e1_3 = $request->c;
            $r1->e1_4 = $request->d;
            $r1->e1_5 = $request->e;
            $r1->e1_6 = $request->f;
            $r1->e1_7 = $request->g;
            $r1->e1_8 = $request->h;

            $r1->avance_1 = 1;

            $r1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 14.2;
            $u->save();

        }

        return redirect('/rel_sim_1');
    }

    public function store_rel_sim_2(Request $request)
    {

        $r2 = Relacion::where('numero_control', 14021073)->first();

        $r2->e2_1 = $request->b;
        $r2->e2_2 = $request->c;
        $r2->e2_3 = $request->d;
        $r2->e2_4 = $request->e;
        $r2->e2_5 = $request->f;
        $r2->e2_6 = $request->g;
        $r2->e2_7 = $request->h;
        $r2->avance_2 = 1;
        $r2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 14.3;
        $u->save();

        return redirect('/rel_sim_2');

    }

    public function store_rel_sim_3(Request $request)
    {

        $r3 = Relacion::where('numero_control', 14021073)->first();
        $r3->e3_1 = $request->a;
        $r3->avance_3 = 1;
        $r3->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 14.4;
        $u->save();

        return redirect('/rel_sim_3');

    }

    public function store_rel_sim_4(Request $request)
    {

        $r4 = Relacion::where('numero_control', 14021073)->first();
        $r4->e4_1 = $request->a;
        $r4->e4_2 = $request->b;
        $r4->e4_3 = $request->c;
        $r4->avance_4 = 1;
        $r4->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 14.5;
        $u->save();

        return redirect('/rel_sim_4');

    }

    public function store_rel_sim_5(Request $request)
    {

        $r4 = Relacion::where('numero_control', 14021073)->first();
        $r4->e5_1 = $request->a;
        $r4->avance_5 = 1;
        $r4->save();

        return redirect('/rel_sim_5');

    }

    public function edit_rel_sim_1(Request $request)
    {

        $r1 = Relacion::where('numero_control', 14021073)->first();

        $r1->e1_1 = $request->a_e;
        $r1->e1_2 = $request->b_e;
        $r1->e1_3 = $request->c_e;
        $r1->e1_4 = $request->d_e;
        $r1->e1_5 = $request->e_e;
        $r1->e1_6 = $request->f_e;
        $r1->e1_7 = $request->g_e;
        $r1->e1_8 = $request->h_e;
        $r1->save();

        return redirect()->back();

    }


    public function edit_rel_sim_2(Request $request)
    {

        $r2 = Relacion::where('numero_control', 14021073)->first();

        $r2->e2_1 = $request->b_e;
        $r2->e2_2 = $request->c_e;
        $r2->e2_3 = $request->d_e;
        $r2->e2_4 = $request->e_e;
        $r2->e2_5 = $request->f_e;
        $r2->e2_6 = $request->g_e;
        $r2->e2_7 = $request->h_e;
        $r2->save();

        return redirect()->back();

    }

    public function edit_rel_sim_3(Request $request)
    {

        $r2 = Relacion::where('numero_control', 14021073)->first();

        $r2->e3_1 = $request->a_e;
        $r2->save();

        return redirect()->back();

    }

    public function edit_rel_sim_4(Request $request)
    {

        $r2 = Relacion::where('numero_control', 14021073)->first();

        $r2->e4_1 = $request->a_e;
        $r2->e4_2 = $request->b_e;
        $r2->e4_3 = $request->c_e;

        $r2->save();

        return redirect()->back();

    }

    public function edit_rel_sim_5(Request $request)
    {

        $r2 = Relacion::where('numero_control', 14021073)->first();

        $r2->e5_1 = $request->a_e;

        $r2->save();

        return redirect()->back();

    }


}
