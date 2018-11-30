<?php

namespace App\Http\Controllers;

use App\Relacion;
use Illuminate\Http\Request;

class TutorRelacionsController extends Controller
{
    //

    public function create_rel_sim_1(){

        $f = Relacion::where('numero_control', 14021073)->first();
        $e1 = $f->e1_1;
        $e2 = $f->e1_2;
        $e3 = $f->e1_3;
        $e4 = $f->e1_4;
        $e5 = $f->e1_5;
        $e6 = $f->e1_6;
        $e7 = $f->e1_7;
        $e8 = $f->e1_8;

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_1', compact('e1','e2','e3','e4','e5','e6','e7','e8'));
    }

    public function create_rel_sim_2(){

        $f = Relacion::where('numero_control', 14021073)->first();
        $e1 = $f->e2_1;
        $e2 = $f->e2_2;
        $e3 = $f->e2_3;
        $e4 = $f->e2_4;
        $e5 = $f->e2_5;
        $e6 = $f->e2_6;
        $e7 = $f->e2_7;

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_2', compact('e1','e2','e3','e4','e5','e6','e7'));

    }

    public function create_rel_sim_3(){

        $f = Relacion::where('numero_control', 14021073)->first();
        $e1 = $f->e3_1;

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_3', compact('e1'));
    }

    public function create_rel_sim_4(){

        $f = Relacion::where('numero_control', 14021073)->first();
        $e1 = $f->e4_1;
        $e2 = $f->e4_2;
        $e3 = $f->e4_3;

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_4', compact('e1','e2','e3'));
    }

    public function create_rel_sim_5(){

        $f = Relacion::where('numero_control', 14021073)->first();
        $e1 = $f->e5_1;

        return view('tutor.activities.14_Relacion_y_simbolizacion.ejercicio_5', compact('e1'));
    }

    public function store_rel_sim_1(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_1 = $request->retro;
        $hi->cal_1 = $request->cal;
        $hi->save();

        return 'oks s';
    }

    public function store_rel_sim_2(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_2 = $request->retro;
        $hi->cal_2 = $request->cal;
        $hi->save();

        return 'oks s';
    }

    public function store_rel_sim_3(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_3 = $request->retro;
        $hi->cal_3 = $request->cal;
        $hi->save();

        return 'oks s';
    }

    public function store_rel_sim_4(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_4 = $request->retro;
        $hi->cal_4 = $request->cal;
        $hi->save();

        return 'oks s';
    }

    public function store_rel_sim_5(Request $request){

        $hi = Relacion::where('numero_control', 14021073)->first();
        $hi->retro_5 = $request->retro;
        $hi->cal_5 = $request->cal;

        $c1 = $hi->cal_1;
        $c2 = $hi->cal_2;
        $c3 = $hi->cal_3;
        $c4 = $hi->cal_4;
        $c5 = $request->cal;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $hi->cal_final = $t;

        $hi->save();

        return 'oks';
    }
}
