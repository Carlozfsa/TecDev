<?php

namespace App\Http\Controllers;

use App\Amenaza;
use App\Debilidad;
use App\Fortaleza;
use App\Oportunidad;
use Illuminate\Http\Request;

class TutorFodaController extends Controller
{
    //
    public function create_f1(){

        $f = Fortaleza::where('numero_control', 14021073)->first();
        $f_decode = json_decode($f->fortalezas_1);
        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_1', compact('f_decode'));
    }

    public function create_f2(){

        $f2 = Fortaleza::where('numero_control', 14021073)->first();
        $f2_decode = json_decode($f2->fortalezas_2);
        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_2', compact('f2_decode'));
    }

    public function create_f3(){

        $f3 = Fortaleza::where('numero_control', 14021073)->first();
        $f3_decode = json_decode($f3->fortalezas_3);
        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_3', compact('f3_decode'));
    }

    public function create_f4(){

        $f4 = Fortaleza::where('numero_control', 14021073)->first();
        $f4_decode = json_decode($f4->fortalezas_4);
        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_4', compact('f4_decode'));
    }


    public function create_d1(){

        $d = Debilidad::where('numero_control', 14021073)->first();
        $d_decode = json_decode($d->debilidads_1);
        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_1', compact('d_decode'));
    }

    public function create_d2(){

        $d2 = Debilidad::where('numero_control', 14021073)->first();
        $d2_decode = json_decode($d2->debilidads_2);
        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_2', compact('d2_decode'));
    }

    public function create_d3(){

        $d3 = Debilidad::where('numero_control', 14021073)->first();
        $d3_decode = json_decode($d3->debilidads_3);
        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_3', compact('d3_decode'));
    }

    public function create_d4(){

        $d4 = Debilidad::where('numero_control', 14021073)->first();
        $d4_decode = json_decode($d4->debilidads_4);
        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_4', compact('d4_decode'));
    }

    public function create_a1(){

        $a1 = Amenaza::where('numero_control', 14021073)->first();
        $a1_decode = json_decode($a1->amenazas_1);
        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_1', compact('a1_decode'));
    }

    public function create_a2(){

        $a2 = Amenaza::where('numero_control', 14021073)->first();
        $a2_decode = json_decode($a2->amenazas_2);
        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_2', compact('a2_decode'));
    }

    public function create_a3(){

        $a3 = Amenaza::where('numero_control', 14021073)->first();
        $a3_decode = json_decode($a3->amenazas_3);
        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_3', compact('a3_decode'));
    }

    public function create_a4(){

        $a4 = Amenaza::where('numero_control', 14021073)->first();
        $a4_decode = json_decode($a4->amenazas_4);
        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_4', compact('a4_decode'));
    }

    public function create_a5(){

        $a5 = Amenaza::where('numero_control', 14021073)->first();
        $a5_decode = json_decode($a5->amenazas_5);
        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_5', compact('a5_decode'));
    }

    public function create_o1(){

        $o1 = Oportunidad::where('numero_control', 14021073)->first();
        $o1_decode = json_decode($o1->oportunidads_1);
        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_1', compact('o1_decode'));
    }

    public function create_o2(){

        $o2 = Oportunidad::where('numero_control', 14021073)->first();
        $o2_decode = json_decode($o2->oportunidads_2);
        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_2', compact('o2_decode'));
    }

    public function create_o3(){

        $o3 = Oportunidad::where('numero_control', 14021073)->first();
        $o3_decode = json_decode($o3->oportunidads_3);
        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_3', compact('o3_decode'));
    }

    public function create_o4(){

        $o4 = Oportunidad::where('numero_control', 14021073)->first();
        $o4_decode = json_decode($o4->oportunidads_4);
        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_4', compact('o4_decode'));
    }






    public function store_f1(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro;
        $tf->cal_1 = $request->cal;
        $tf->save();

        return redirect('tutor_foda_1_2');
    }

    public function store_f2(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro2;
        $tf->cal_2 = $request->cal2;
        $tf->save();

        return redirect('tutor_foda_1_3');
    }

    public function store_f3(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro3;
        $tf->cal_3 = $request->cal3;
        $tf->save();

        return redirect('tutor_foda_1_4');
    }

    public function store_f4(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro4;
        $tf->cal_4 = $request->cal4;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal4;;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;


        $tf->save();

        return redirect('/home');
    }

    public function store_d1(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro1;
        $tf->cal_1 = $request->cal1;
        $tf->save();

        return 'oks';
    }

    public function store_d2(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro2;
        $tf->cal_2 = $request->cal2;
        $tf->save();

        return 'oks';
    }

    public function store_d3(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro3;
        $tf->cal_3 = $request->cal3;
        $tf->save();

        return 'oks';
    }

    public function store_d4(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro4;
        $tf->cal_4 = $request->cal4;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal4;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;

        $tf->save();

        return 'oks';
    }

    public function store_a1(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro1;
        $tf->cal_1 = $request->cal1;
        $tf->save();

        return 'oks';
    }

    public function store_a2(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro2;
        $tf->cal_2 = $request->cal2;
        $tf->save();

        return 'oks';
    }

    public function store_a3(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro3;
        $tf->cal_3 = $request->cal3;
        $tf->save();

        return 'oks';
    }

    public function store_a4(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro4;
        $tf->cal_4 = $request->cal4;
        $tf->save();

        return 'oks';
    }

    public function store_a5(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_5 = $request->retro5;
        $tf->cal_5 = $request->cal5;


        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $request->cal5;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $tf->cal_general = $t;

        $tf->save();

        return 'oks';
    }

    public function store_o1(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro1;
        $tf->cal_1 = $request->cal1;
        $tf->save();

        return redirect()->back();
    }

    public function store_o2(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro2;
        $tf->cal_2 = $request->cal2;
        $tf->save();

        return redirect()->back();
    }

    public function store_o3(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro3;
        $tf->cal_3 = $request->cal3;
        $tf->save();

        return redirect()->back();
    }

    public function store_o4(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro4;
        $tf->cal_4 = $request->cal4;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal4;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    }
