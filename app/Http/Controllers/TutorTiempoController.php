<?php

namespace App\Http\Controllers;

use App\Tiempo;
use Illuminate\Http\Request;

class TutorTiempoController extends Controller
{
    //

    public function create_t2(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->lunes_h1);
        $f2_decode = json_decode($f->lunes_h2);
        $f3_decode = json_decode($f->lunes_h3);
        $f4_decode = json_decode($f->lunes_h4);
        $f5_decode = json_decode($f->lunes_h5);
        $f6_decode = json_decode($f->lunes_h6);
        $f7_decode = json_decode($f->lunes_h7);
        $f8_decode = json_decode($f->lunes_h8);
        $f9_decode = json_decode($f->lunes_h9);
        $f10_decode = json_decode($f->lunes_h10);
        $f11_decode = json_decode($f->lunes_h11);
        $f12_decode = json_decode($f->lunes_h12);
        $f13_decode = json_decode($f->lunes_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_2', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t3(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->martes_h1);
        $f2_decode = json_decode($f->martes_h2);
        $f3_decode = json_decode($f->martes_h3);
        $f4_decode = json_decode($f->martes_h4);
        $f5_decode = json_decode($f->martes_h5);
        $f6_decode = json_decode($f->martes_h6);
        $f7_decode = json_decode($f->martes_h7);
        $f8_decode = json_decode($f->martes_h8);
        $f9_decode = json_decode($f->martes_h9);
        $f10_decode = json_decode($f->martes_h10);
        $f11_decode = json_decode($f->martes_h11);
        $f12_decode = json_decode($f->martes_h12);
        $f13_decode = json_decode($f->martes_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_3', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t4(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->miercoles_h1);
        $f2_decode = json_decode($f->miercoles_h2);
        $f3_decode = json_decode($f->miercoles_h3);
        $f4_decode = json_decode($f->miercoles_h4);
        $f5_decode = json_decode($f->miercoles_h5);
        $f6_decode = json_decode($f->miercoles_h6);
        $f7_decode = json_decode($f->miercoles_h7);
        $f8_decode = json_decode($f->miercoles_h8);
        $f9_decode = json_decode($f->miercoles_h9);
        $f10_decode = json_decode($f->miercoles_h10);
        $f11_decode = json_decode($f->miercoles_h11);
        $f12_decode = json_decode($f->miercoles_h12);
        $f13_decode = json_decode($f->miercoles_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_4', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t5(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->jueves_h1);
        $f2_decode = json_decode($f->jueves_h2);
        $f3_decode = json_decode($f->jueves_h3);
        $f4_decode = json_decode($f->jueves_h4);
        $f5_decode = json_decode($f->jueves_h5);
        $f6_decode = json_decode($f->jueves_h6);
        $f7_decode = json_decode($f->jueves_h7);
        $f8_decode = json_decode($f->jueves_h8);
        $f9_decode = json_decode($f->jueves_h9);
        $f10_decode = json_decode($f->jueves_h10);
        $f11_decode = json_decode($f->jueves_h11);
        $f12_decode = json_decode($f->jueves_h12);
        $f13_decode = json_decode($f->jueves_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_5', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t6(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->viernes_h1);
        $f2_decode = json_decode($f->viernes_h2);
        $f3_decode = json_decode($f->viernes_h3);
        $f4_decode = json_decode($f->viernes_h4);
        $f5_decode = json_decode($f->viernes_h5);
        $f6_decode = json_decode($f->viernes_h6);
        $f7_decode = json_decode($f->viernes_h7);
        $f8_decode = json_decode($f->viernes_h8);
        $f9_decode = json_decode($f->viernes_h9);
        $f10_decode = json_decode($f->viernes_h10);
        $f11_decode = json_decode($f->viernes_h11);
        $f12_decode = json_decode($f->viernes_h12);
        $f13_decode = json_decode($f->viernes_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_6', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t7(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sabado_h1);
        $f2_decode = json_decode($f->sabado_h2);
        $f3_decode = json_decode($f->sabado_h3);
        $f4_decode = json_decode($f->sabado_h4);
        $f5_decode = json_decode($f->sabado_h5);
        $f6_decode = json_decode($f->sabado_h6);
        $f7_decode = json_decode($f->sabado_h7);
        $f8_decode = json_decode($f->sabado_h8);
        $f9_decode = json_decode($f->sabado_h9);
        $f10_decode = json_decode($f->sabado_h10);
        $f11_decode = json_decode($f->sabado_h11);
        $f12_decode = json_decode($f->sabado_h12);
        $f13_decode = json_decode($f->sabado_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_7', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t8(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->domingo_h1);
        $f2_decode = json_decode($f->domingo_h2);
        $f3_decode = json_decode($f->domingo_h3);
        $f4_decode = json_decode($f->domingo_h4);
        $f5_decode = json_decode($f->domingo_h5);
        $f6_decode = json_decode($f->domingo_h6);
        $f7_decode = json_decode($f->domingo_h7);
        $f8_decode = json_decode($f->domingo_h8);
        $f9_decode = json_decode($f->domingo_h9);
        $f10_decode = json_decode($f->domingo_h10);
        $f11_decode = json_decode($f->domingo_h11);
        $f12_decode = json_decode($f->domingo_h12);
        $f13_decode = json_decode($f->domingo_h13);

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_8', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t2_2(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_1);
        $f2_decode = json_decode($f->comida_1);
        $f3_decode = json_decode($f->clase_1);
        $f4_decode = json_decode($f->estudio_1);
        $f5_decode = json_decode($f->rel_1);
        $f6_decode = json_decode($f->soc_1);
        $f7_decode = json_decode($f->dep_1);
        $f8_decode = json_decode($f->per_1);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_2', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_3(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_2);
        $f2_decode = json_decode($f->comida_2);
        $f3_decode = json_decode($f->clase_2);
        $f4_decode = json_decode($f->estudio_2);
        $f5_decode = json_decode($f->rel_2);
        $f6_decode = json_decode($f->soc_2);
        $f7_decode = json_decode($f->dep_2);
        $f8_decode = json_decode($f->per_2);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_3', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_4(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_3);
        $f2_decode = json_decode($f->comida_3);
        $f3_decode = json_decode($f->clase_3);
        $f4_decode = json_decode($f->estudio_3);
        $f5_decode = json_decode($f->rel_3);
        $f6_decode = json_decode($f->soc_3);
        $f7_decode = json_decode($f->dep_3);
        $f8_decode = json_decode($f->per_3);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_4', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_5(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_4);
        $f2_decode = json_decode($f->comida_4);
        $f3_decode = json_decode($f->clase_4);
        $f4_decode = json_decode($f->estudio_4);
        $f5_decode = json_decode($f->rel_4);
        $f6_decode = json_decode($f->soc_4);
        $f7_decode = json_decode($f->dep_4);
        $f8_decode = json_decode($f->per_4);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_5', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_6(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_5);
        $f2_decode = json_decode($f->comida_5);
        $f3_decode = json_decode($f->clase_5);
        $f4_decode = json_decode($f->estudio_5);
        $f5_decode = json_decode($f->rel_5);
        $f6_decode = json_decode($f->soc_5);
        $f7_decode = json_decode($f->dep_5);
        $f8_decode = json_decode($f->per_5);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_6', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_7(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_6);
        $f2_decode = json_decode($f->comida_6);
        $f3_decode = json_decode($f->clase_6);
        $f4_decode = json_decode($f->estudio_6);
        $f5_decode = json_decode($f->rel_6);
        $f6_decode = json_decode($f->soc_6);
        $f7_decode = json_decode($f->dep_6);
        $f8_decode = json_decode($f->per_6);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_7', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_8(){

        $f = Tiempo::where('numero_control', 14021073)->first();
        $f1_decode = json_decode($f->sueno_7);
        $f2_decode = json_decode($f->comida_7);
        $f3_decode = json_decode($f->clase_7);
        $f4_decode = json_decode($f->estudio_7);
        $f5_decode = json_decode($f->rel_7);
        $f6_decode = json_decode($f->soc_7);
        $f7_decode = json_decode($f->dep_7);
        $f8_decode = json_decode($f->per_7);

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_8', compact('f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function store_t2(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->lunes_retro = $request->retro;
        $tf->lunes_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t3(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->martes_retro = $request->retro;
        $tf->martes_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t4(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->miercoles_retro = $request->retro;
        $tf->miercoles_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t5(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->jueves_retro = $request->retro;
        $tf->jueves_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t6(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->viernes_retro = $request->retro;
        $tf->viernes_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t7(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->sabado_retro = $request->retro;
        $tf->sabado_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t8(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->domingo_retro = $request->retro;
        $tf->domingo_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_2(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->lunes_2_retro = $request->retro;
        $tf->lunes_2_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_3(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->martes_2_retro = $request->retro;
        $tf->martes_2_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_4(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->miercoles_2_retro = $request->retro;
        $tf->miercoles_2_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_5(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->jueves_2_retro = $request->retro;
        $tf->jueves_2_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_6(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->viernes_2_retro = $request->retro;
        $tf->viernes_2_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_7(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->sabado_2_retro = $request->retro;
        $tf->sabado_2_cal = $request->cal;
        $tf->save();

        return 'oks';
    }

    public function store_t2_8(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->domingo_2_retro = $request->retro;
        $tf->domingo_2_cal = $request->cal;

        $c1 = $tf->lunes_cal;
        $c2 = $tf->martes_cal;
        $c3 = $tf->miercoles_cal;
        $c4 = $tf->jueves_cal;
        $c5 = $tf->viernes_cal;
        $c6 = $tf->sabado_cal;
        $c7 = $tf->domingo_cal;

        $c11 = $tf->lunes_cal;
        $c22 = $tf->martes_cal;
        $c33 = $tf->miercoles_cal;
        $c44 = $tf->jueves_cal;
        $c55 = $tf->viernes_cal;
        $c66 = $tf->sabado_cal;
        $c77 = $tf->domingo_cal;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c11+$c22+$c33+$c44+$c55+$c66+$c77)/14;

        $tf->cal_final = $t;

        $tf->save();

        return 'oks';
    }
}
