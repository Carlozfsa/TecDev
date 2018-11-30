<?php

namespace App\Http\Controllers;

use App\Relacion;
use Illuminate\Http\Request;

class RelacionsController extends Controller
{
    //

    public function create_rel_sim_1(){
        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_1');
    }

    public function create_rel_sim_2(){
        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_2');
    }

    public function create_rel_sim_3(){
        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_3');
    }

    public function create_rel_sim_4(){
        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_4');
    }

    public function create_rel_sim_5(){
        return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_5');
    }


    public function store_rel_sim_1(Request $request){


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

        $r1->retro_1 = "";
        $r1->cal_1 = 0;

        $r1->e2_1 = '';
        $r1->e2_2 = '';
        $r1->e2_3 = '';
        $r1->e2_4 = '';
        $r1->e2_5 = '';
        $r1->e2_6 = '';
        $r1->e2_7 = '';

        $r1->retro_2 = "";
        $r1->cal_2 = 0;

        $r1->e3_1 = '';

        $r1->retro_3 = "";
        $r1->cal_3 = 0;

        $r1->e4_1 = '';
        $r1->e4_2 = '';
        $r1->e4_3 = '';

        $r1->retro_4 = "";
        $r1->cal_4 = 0;

        $r1->e5_1 = '';

        $r1->retro_5 = "";
        $r1->cal_5 = 0;

        $r1->cal_final = 0;

        $r1->save();

        return 'oks';
    }

    public function store_rel_sim_2(Request $request){

        $r2 = Relacion::where('numero_control',14021073)->first();

        $r2->e2_1 = $request->b;
        $r2->e2_2 = $request->c;
        $r2->e2_3 = $request->d;
        $r2->e2_4 = $request->e;
        $r2->e2_5 = $request->f;
        $r2->e2_6 = $request->g;
        $r2->e2_7 = $request->h;

        $r2->save();
        return 'oks';

    }

    public function store_rel_sim_3(Request $request){

        $r3 = Relacion::where('numero_control',14021073)->first();
        $r3->e3_1 = $request->a;

        $r3->save();

        return 'oks';

    }

    public function store_rel_sim_4(Request $request){

        $r4 = Relacion::where('numero_control',14021073)->first();
        $r4->e4_1 = $request->a;
        $r4->e4_2 = $request->b;
        $r4->e4_3 = $request->c;
        $r4->save();

        return 'oks';

    }

    public function store_rel_sim_5(Request $request){

        $r4 = Relacion::where('numero_control',14021073)->first();
        $r4->e5_1 = $request->a;

        $r4->save();

        return 'oks';

    }


    }
