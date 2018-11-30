<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use Illuminate\Http\Request;

class PensamientosController extends Controller
{
    //

    public function create_pens_1(){
        return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_1');
    }

    public function create_pens_2(){
        return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_2');
    }

    public function create_pens_3(){
        return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_3');
    }

    public function create_pens_4(){
        return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_4');
    }

    public function create_pens_5(){
        return view('activities.8_Habilidades_del_Pensamiento.ejercicios.ejercicio_5');
    }

    public function store_pens_1(Request $request){

        $e1 = new Pensamiento();
        $e1->numero_control = 14021073;

        $e1->a = $request->a;
        $e1->b = $request->b;
        $e1->c = $request->c;
        $e1->d = $request->d;
        $e1->e = $request->e;
        $e1->f = $request->f;
        $e1->g = $request->g;
        $e1->h = $request->h;
        $e1->i = $request->i;

        $e1->retro_1 = "";
        $e1->cal_1 = 0;

        $e1->e2_p1 = "";
        $e1->e2_p2 = "";
        $e1->e2_p3 = "";
        $e1->e2_p4 = "";
        $e1->e2_p5 = "";

        $e1->retro_2 = "";
        $e1->cal_2 = 0;

        $e1->e3_1_1 = "";
        $e1->e3_1_2 = "";
        $e1->e3_1_3 = "";
        $e1->e3_2_1 = "";
        $e1->e3_2_2 = "";
        $e1->e3_3_1 = "";
        $e1->e3_3_2 = "";
        $e1->e3_4_1 = "";
        $e1->e3_4_2 = "";
        $e1->e3_5_1 = "";
        $e1->e3_5_2 = "";

        $e1->retro_3 = "";
        $e1->cal_3 = 0;

        $e1->o1 = "";
        $e1->o2 = "";
        $e1->o3 = "";
        $e1->o4 = "";

        $e1->retro_4 = "";
        $e1->cal_4 = 0;

        $e1->cal_final = 0;

        $e1->save();

        return 'oks';
    }

    public function store_pens_3(Request $request){

        $e3 = Pensamiento::where('numero_control',14021073)->first();
        $e3->e2_p1 = $request->text1;
        $e3->e2_p2 = $request->text2;
        $e3->e2_p3 = $request->text3;
        $e3->e2_p4 = $request->text4;
        $e3->e2_p5 = $request->text5;

        $e3->save();

        return 'oks 3';

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

        $e4->save();

        return 'oks';

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
        $p->save();

        return 'oks';

    }


    }
