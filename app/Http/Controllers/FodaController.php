<?php

namespace App\Http\Controllers;

use App\Amenaza;
use App\Debilidad;
use App\Fortaleza;
use App\Oportunidad;
use Illuminate\Http\Request;

class FodaController extends Controller
{
    //

    public function index(){

    }
    public function create_f1(){
        return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_1');
    }

    public function create_f2(){
        return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_2');
    }

    public function create_f3(){
        return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_3');
    }

    public function create_f4(){
        return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_4');
    }


    public function create_d1(){
        return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_1');
    }

    public function create_d2(){
        return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_2');
    }

    public function create_d3(){
        return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_3');
    }

    public function create_d4(){
        return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_4');
    }


    public function create_a1(){
        return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_1');
    }

    public function create_a2(){
        return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_2');
    }

    public function create_a3(){
        return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_3');
    }

    public function create_a4(){
        return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_4');
    }

    public function create_a5(){
        return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_5');
    }


    public function create_o1(){
        return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_1');
    }

    public function create_o2(){
        return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_2');
    }

    public function create_o3(){
        return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_3');
    }

    public function create_o4(){
        return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_4');
    }

    public function create_r(){
        $f = Fortaleza::where('numero_control',14021073)->first()->fortalezas_4;
        $fd = json_decode($f);

        $o = Oportunidad::where('numero_control',14021073)->first()->oportunidads_4;
        $od = json_decode($o);

        $d = Debilidad::where('numero_control',14021073)->first()->debilidads_4;
        $dd = json_decode($d);

        $a = Amenaza::where('numero_control',14021073)->first()->amenazas_5;
        $ad = json_decode($a);


        return view('activities.1_foda_cuestionarios.resumen.Analisis_Foda_Resumen', compact('fd', 'od', 'dd', 'ad'));
    }

    public function create_t1(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_1');
    }

    public function create_t2(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_2');
    }

    public function create_t3(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_3');
    }

    public function create_t4(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_4');
    }

    public function create_t5(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_5');
    }

    public function create_t6(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_6');
    }

    public function create_t7(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_7');
    }

    public function create_t8(){
        return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_8');
    }

    public function create_t2_1(){
        return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_1');
    }


    public function store_f1(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->f1)){
            $f1[$i]=$request->f1[$k];
            $i++;
            $k++;
        }
        $f1_output = json_encode($f1);

        $fortaleza_1 = new Fortaleza();
        $fortaleza_1->numero_control = 14021073;
        $fortaleza_1->fortalezas_1 = $f1_output;
        $fortaleza_1->fortalezas_2 = '';
        $fortaleza_1->fortalezas_3 = '';
        $fortaleza_1->fortalezas_4 = '';
        $fortaleza_1->save();

        return $f1_output;
    }

    public function store_f2(Request $request){

        $f2=array();
        $i=1;
        $k=0;

        while($i<=count($request->f2)){
            $f2[$i]=$request->f2[$k];
            $i++;
            $k++;
        }
        $f2_output = json_encode($f2);

        $fortaleza_2 = Fortaleza::where('numero_control',14021073)->first();
        $fortaleza_2->fortalezas_2 = $f2_output;
        $fortaleza_2->save();
    }

    public function store_f3(Request $request){

        $f3=array();
        $i=1;
        $k=0;

        while($i<=count($request->f3)){
            $f3[$i]=$request->f3[$k];
            $i++;
            $k++;
        }
        $f3_output = json_encode($f3);

        $fortaleza_3 = Fortaleza::where('numero_control',14021073)->first();
        $fortaleza_3->fortalezas_3 = $f3_output;
        $fortaleza_3->save();
    }

    public function store_f4(Request $request){

        $f4=array();
        $i=1;
        $k=0;

        while($i<=count($request->f4)){
            $f4[$i]=$request->f4[$k];
            $i++;
            $k++;
        }
        $f4_output = json_encode($f4);

        $fortaleza_4 = Fortaleza::where('numero_control',14021073)->first();
        $fortaleza_4->fortalezas_4 = $f4_output;
        $fortaleza_4->save();
    }


    public function store_d1(Request $request){

        $d1=array();
        $i=1;
        $k=0;

        while($i<=count($request->d1)){
            $d1[$i]=$request->d1[$k];
            $i++;
            $k++;
        }
        $d1_output = json_encode($d1);

        $debilidad_1 = new Debilidad();
        $debilidad_1->numero_control = 14021073;
        $debilidad_1->debilidads_1 = $d1_output;
        $debilidad_1->debilidads_2 = '';
        $debilidad_1->debilidads_3 = '';
        $debilidad_1->debilidads_4 = '';
        $debilidad_1->save();
    }

    public function store_d2(Request $request){

        $d2=array();
        $i=1;
        $k=0;

        while($i<=count($request->d2)){
            $d2[$i]=$request->d2[$k];
            $i++;
            $k++;
        }
        $d2_output = json_encode($d2);

        $debilidad_2 = Debilidad::where('numero_control',14021073)->first();
        $debilidad_2->debilidads_2 = $d2_output;
        $debilidad_2->save();
    }

    public function store_d3(Request $request){

        $d3=array();
        $i=1;
        $k=0;

        while($i<=count($request->d3)){
            $d3[$i]=$request->d3[$k];
            $i++;
            $k++;
        }
        $d3_output = json_encode($d3);

        $debilidad_3 = Debilidad::where('numero_control',14021073)->first();
        $debilidad_3->debilidads_3 = $d3_output;
        $debilidad_3->save();
    }

    public function store_d4(Request $request){

        $d4=array();
        $i=1;
        $k=0;

        while($i<=count($request->d4)){
            $d4[$i]=$request->d4[$k];
            $i++;
            $k++;
        }
        $d4_output = json_encode($d4);

        $debilidad_4 = Debilidad::where('numero_control',14021073)->first();
        $debilidad_4->debilidads_4 = $d4_output;
        $debilidad_4->save();
    }

    public function store_a1(Request $request){

        $a1=array();
        $i=1;
        $k=0;

        while($i<=count($request->a1)){
            $a1[$i]=$request->a1[$k];
            $i++;
            $k++;
        }
        $a1_output = json_encode($a1);

        $amenazas_1 = new Amenaza();
        $amenazas_1->numero_control = 14021073;
        $amenazas_1->amenazas_1 = $a1_output;
        $amenazas_1->amenazas_2 = '';
        $amenazas_1->amenazas_3 = '';
        $amenazas_1->amenazas_4 = '';
        $amenazas_1->save();

        return $a1_output;
    }
    public function store_a2(Request $request){

        $a2=array();
        $i=1;
        $k=0;

        while($i<=count($request->a2)){
            $a2[$i]=$request->a2[$k];
            $i++;
            $k++;
        }
        $a2_output = json_encode($a2);

        $amenazas_2 = Amenaza::where('numero_control',14021073)->first();
        $amenazas_2->amenazas_2 = $a2_output;
        $amenazas_2->save();
    }

    public function store_a3(Request $request){

        $a3=array();
        $i=1;
        $k=0;

        while($i<=count($request->a3)){
            $a3[$i]=$request->a3[$k];
            $i++;
            $k++;
        }
        $a3_output = json_encode($a3);

        $amenazas_3 = Amenaza::where('numero_control',14021073)->first();
        $amenazas_3->amenazas_3 = $a3_output;
        $amenazas_3->save();
    }

    public function store_a4(Request $request){

        $a4=array();
        $i=1;
        $k=0;

        while($i<=count($request->a4)){
            $a4[$i]=$request->a4[$k];
            $i++;
            $k++;
        }
        $a4_output = json_encode($a4);

        $amenazas_4 = Amenaza::where('numero_control',14021073)->first();
        $amenazas_4->amenazas_4 = $a4_output;
        $amenazas_4->save();
    }

    public function store_a5(Request $request){

        $a5=array();
        $i=1;
        $k=0;

        while($i<=count($request->a5)){
            $a5[$i]=$request->a5[$k];
            $i++;
            $k++;
        }
        $a5_output = json_encode($a5);

        $amenazas_5 = Amenaza::where('numero_control',14021073)->first();
        $amenazas_5->amenazas_5 = $a5_output;
        $amenazas_5->save();
    }


    public function store_o1(Request $request){

        $o1=array();
        $i=1;
        $k=0;

        while($i<=count($request->o1)){
            $o1[$i]=$request->o1[$k];
            $i++;
            $k++;
        }
        $o1_output = json_encode($o1);

        $oportunidads_1 = new Oportunidad();
        $oportunidads_1->numero_control = 14021073;
        $oportunidads_1->oportunidads_1 = $o1_output;
        $oportunidads_1->oportunidads_2 = '';
        $oportunidads_1->oportunidads_3 = '';
        $oportunidads_1->oportunidads_4 = '';
        $oportunidads_1->save();

        return $o1_output;
    }

    public function store_o2(Request $request){

        $o2=array();
        $i=1;
        $k=0;

        while($i<=count($request->o2)){
            $o2[$i]=$request->o2[$k];
            $i++;
            $k++;
        }
        $o2_output = json_encode($o2);

        $oportunidads_2 = Oportunidad::where('numero_control',14021073)->first();
        $oportunidads_2->oportunidads_2 = $o2_output;
        $oportunidads_2->save();
    }

    public function store_o3(Request $request){

        $o3=array();
        $i=1;
        $k=0;

        while($i<=count($request->o3)){
            $o3[$i]=$request->o3[$k];
            $i++;
            $k++;
        }
        $o3_output = json_encode($o3);

        $oportunidads_3 = Oportunidad::where('numero_control',14021073)->first();
        $oportunidads_3->oportunidads_3 = $o3_output;
        $oportunidads_3->save();
    }

    public function store_o4(Request $request){

        $o4=array();
        $i=1;
        $k=0;

        while($i<=count($request->o4)){
            $o4[$i]=$request->o4[$k];
            $i++;
            $k++;
        }
        $o4_output = json_encode($o4);

        $oportunidads_4 = Oportunidad::where('numero_control',14021073)->first();
        $oportunidads_4->oportunidads_4 = $o4_output;
        $oportunidads_4->save();
    }


    public function show(){

    }

    public function destroy(){

    }

    public function update(){

    }
}
