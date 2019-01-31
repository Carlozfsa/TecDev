<?php

namespace App\Http\Controllers;

use App\Tiempo;
use Illuminate\Http\Request;

class TutorTiempoController extends Controller
{
    //

    public function create_t2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_2', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t3(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_3', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t4(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }

        }


        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_4', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t5(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_5', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t6(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_5 == NULL && $f->cal_5 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_5;
                $cal = $f->cal_5;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_6', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t7(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_6 == NULL && $f->cal_6 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_6;
                $cal = $f->cal_6;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_7', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t8(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;
        $f9_decode = NULL;
        $f10_decode = NULL;
        $f11_decode = NULL;
        $f12_decode = NULL;
        $f13_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

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

            if ($f->retro_7 == NULL && $f->cal_7 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_7;
                $cal = $f->cal_7;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e1.ejercicio_8', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode','f9_decode','f10_decode','f11_decode','f12_decode','f13_decode'));
    }

    public function create_t2_2(){

        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_1);
            $f2_decode = json_decode($f->comida_1);
            $f3_decode = json_decode($f->clase_1);
            $f4_decode = json_decode($f->estudio_1);
            $f5_decode = json_decode($f->rel_1);
            $f6_decode = json_decode($f->soc_1);
            $f7_decode = json_decode($f->dep_1);
            $f8_decode = json_decode($f->per_1);

            if ($f->retro_8 == NULL && $f->cal_8 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_8;
                $cal = $f->cal_8;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_2', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_3(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_2);
            $f2_decode = json_decode($f->comida_2);
            $f3_decode = json_decode($f->clase_2);
            $f4_decode = json_decode($f->estudio_2);
            $f5_decode = json_decode($f->rel_2);
            $f6_decode = json_decode($f->soc_2);
            $f7_decode = json_decode($f->dep_2);
            $f8_decode = json_decode($f->per_2);

            if ($f->retro_9 == NULL && $f->cal_9 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_9;
                $cal = $f->cal_9;
            }

        }


        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_3', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_4(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_3);
            $f2_decode = json_decode($f->comida_3);
            $f3_decode = json_decode($f->clase_3);
            $f4_decode = json_decode($f->estudio_3);
            $f5_decode = json_decode($f->rel_3);
            $f6_decode = json_decode($f->soc_3);
            $f7_decode = json_decode($f->dep_3);
            $f8_decode = json_decode($f->per_3);

            if ($f->retro_10 == NULL && $f->cal_10 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_10;
                $cal = $f->cal_10;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_4', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_5(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_4);
            $f2_decode = json_decode($f->comida_4);
            $f3_decode = json_decode($f->clase_4);
            $f4_decode = json_decode($f->estudio_4);
            $f5_decode = json_decode($f->rel_4);
            $f6_decode = json_decode($f->soc_4);
            $f7_decode = json_decode($f->dep_4);
            $f8_decode = json_decode($f->per_4);

            if ($f->retro_11 == NULL && $f->cal_11 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_11;
                $cal = $f->cal_11;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_5', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_6(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_5);
            $f2_decode = json_decode($f->comida_5);
            $f3_decode = json_decode($f->clase_5);
            $f4_decode = json_decode($f->estudio_5);
            $f5_decode = json_decode($f->rel_5);
            $f6_decode = json_decode($f->soc_5);
            $f7_decode = json_decode($f->dep_5);
            $f8_decode = json_decode($f->per_5);

            if ($f->retro_12 == NULL && $f->cal_12 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_12;
                $cal = $f->cal_12;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_6', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_7(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_6);
            $f2_decode = json_decode($f->comida_6);
            $f3_decode = json_decode($f->clase_6);
            $f4_decode = json_decode($f->estudio_6);
            $f5_decode = json_decode($f->rel_6);
            $f6_decode = json_decode($f->soc_6);
            $f7_decode = json_decode($f->dep_6);
            $f8_decode = json_decode($f->per_6);

            if ($f->retro_13 == NULL && $f->cal_13 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_13;
                $cal = $f->cal_13;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_7', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function create_t2_8(){


        $edit = 0;
        $retro = NULL;
        $cal =  NULL;

        $f1_decode = NULL;
        $f2_decode = NULL;
        $f3_decode = NULL;
        $f4_decode = NULL;
        $f5_decode = NULL;
        $f6_decode = NULL;
        $f7_decode = NULL;
        $f8_decode = NULL;

        $f = Tiempo::where('numero_control', 14021073)->first();

        if (Tiempo::where('numero_control', 14021073)->exists()) {

            $f1_decode = json_decode($f->sueno_7);
            $f2_decode = json_decode($f->comida_7);
            $f3_decode = json_decode($f->clase_7);
            $f4_decode = json_decode($f->estudio_7);
            $f5_decode = json_decode($f->rel_7);
            $f6_decode = json_decode($f->soc_7);
            $f7_decode = json_decode($f->dep_7);
            $f8_decode = json_decode($f->per_7);

            if ($f->retro_14 == NULL && $f->cal_14 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_14;
                $cal = $f->cal_14;
            }

        }

        return view('tutor.activities.2_administracion_del_tiempo.e2.ejercicio_8', compact('edit','retro','cal','f1_decode', 'f2_decode','f3_decode','f4_decode','f5_decode','f6_decode','f7_decode','f8_decode'));
    }

    public function store_t2(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_2');
    }

    public function store_t3(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_3');
    }

    public function store_t4(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;


            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;


            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_4');
    }

    public function store_t5(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_5');
    }

    public function store_t6(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_5 = $request->retro5;
            $tf->cal_5 = $request->cal5;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $request->cal5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_5 = $request->retro5;
            $tf->cal_5 = $request->cal5;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $request->cal5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;


            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_6');
    }

    public function store_t7(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_6 = $request->retro6;
            $tf->cal_6 = $request->cal6;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $request->cal6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_6 = $request->retro6;
            $tf->cal_6 = $request->cal6;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $request->cal6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_7');
    }

    public function store_t8(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_7 = $request->retro7;
            $tf->cal_7 = $request->cal7;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $request->cal7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_7 = $request->retro7;
            $tf->cal_7 = $request->cal7;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $request->cal7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect('/tutor_tiempo_ej_8');
    }

    public function store_t2_2(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_8 = $request->retro8;
            $tf->cal_8 = $request->cal8;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $request->cal8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_8 = $request->retro8;
            $tf->cal_8 = $request->cal8;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $request->cal8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();
    }

    public function store_t2_3(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_9 = $request->retro9;
            $tf->cal_9 = $request->cal9;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $request->cal9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_9 = $request->retro9;
            $tf->cal_9 = $request->cal9;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $request->cal9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();

        }

    public function store_t2_4(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_10 = $request->retro10;
            $tf->cal_10 = $request->cal10;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $request->cal10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_10 = $request->retro10;
            $tf->cal_10 = $request->cal10;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $request->cal10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();
    }

    public function store_t2_5(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_11 = $request->retro11;
            $tf->cal_11 = $request->cal11;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $request->cal11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_11 = $request->retro11;
            $tf->cal_11 = $request->cal11;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $request->cal11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();
    }

    public function store_t2_6(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_12 = $request->retro12;
            $tf->cal_12 = $request->cal12;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $request->cal12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_12 = $request->retro12;
            $tf->cal_12 = $request->cal12;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $request->cal12;
            $c13 = $tf->cal_13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();
    }

    public function store_t2_7(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_13 = $request->retro13;
            $tf->cal_13 = $request->cal13;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $request->cal13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_13 = $request->retro13;
            $tf->cal_13 = $request->cal13;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $request->cal13;
            $c14 = $tf->cal_14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();
    }

    public function store_t2_8(Request $request){

        if(Tiempo::where('numero_control', 14021073)->exists()){

            $tf = Tiempo::where('numero_control', 14021073)->first();
            $tf->retro_14 = $request->retro14;
            $tf->cal_14 = $request->cal14;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $request->cal14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();

        }else{
            $tf = new Tiempo();

            $tf->numero_control = 14021073;
            $tf->retro_14 = $request->retro14;
            $tf->cal_14 = $request->cal14;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;
            $c6 = $tf->cal_6;
            $c7 = $tf->cal_7;
            $c8 = $tf->cal_8;
            $c9 = $tf->cal_9;
            $c10 = $tf->cal_10;
            $c11 = $tf->cal_11;
            $c12 = $tf->cal_12;
            $c13 = $tf->cal_13;
            $c14 = $request->cal14;

            $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
            $tf->cal_general = $t;


            $tf->save();
        }


        return redirect()->back();
    }


    public function edit_t2(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro_e;
        $tf->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t3(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro_e;
        $tf->cal_2 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $request->cal_e;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

        $tf->cal_general = $t;

        $tf->save();

        return redirect('/tutor_tiempo_ej_3');
    }

    public function edit_t4(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro_e;
        $tf->cal_3 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $request->cal_e;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;

        $tf->cal_general = $t;

        $tf->save();

        return redirect('/tutor_tiempo_ej_4');
    }

    public function edit_t5(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro_e;
        $tf->cal_4 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal_e;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect('/tutor_tiempo_ej_5');
    }

    public function edit_t6(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_5 = $request->retro_e;
        $tf->cal_5 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $request->cal_e;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect('/tutor_tiempo_ej_6');
    }

    public function edit_t7(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_6 = $request->retro_e;
        $tf->cal_6 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $request->cal_e;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect('/tutor_tiempo_ej_7');
    }

    public function edit_t8(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_7 = $request->retro_e;
        $tf->cal_7 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $request->cal_e;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect('/tutor_tiempo_ej_8');
    }

    public function edit_t2_2(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_8 = $request->retro_e;
        $tf->cal_8 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $request->cal_e;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t2_3(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_9 = $request->retro_e;
        $tf->cal_9 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $request->cal_e;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t2_4(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_10 = $request->retro_e;
        $tf->cal_10 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $request->cal_e;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t2_5(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_11 = $request->retro_e;
        $tf->cal_11 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 =$tf->cal_10;
        $c11 = $request->cal_e;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t2_6(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_12 = $request->retro_e;
        $tf->cal_12 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $request->cal_e;
        $c13 = $tf->cal_13;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t2_7(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_13 = $request->retro_e;
        $tf->cal_13 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $request->cal_e;
        $c14 = $tf->cal_14;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_t2_8(Request $request){

        $tf = Tiempo::where('numero_control', 14021073)->first();
        $tf->retro_14 = $request->retro_e;
        $tf->cal_14 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;
        $c6 = $tf->cal_6;
        $c7 = $tf->cal_7;
        $c8 = $tf->cal_8;
        $c9 = $tf->cal_9;
        $c10 = $tf->cal_10;
        $c11 = $tf->cal_11;
        $c12 = $tf->cal_12;
        $c13 = $tf->cal_13;
        $c14 = $request->cal_e;

        $t = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14)/14;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }
}
