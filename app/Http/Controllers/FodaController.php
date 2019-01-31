<?php

namespace App\Http\Controllers;

use App\Amenaza;
use App\Debilidad;
use App\Fortaleza;
use App\Oportunidad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FodaController extends Controller
{
    //

    public function index(){

    }

    public function create_f1(){

        if(Auth::User()->avance >= 1.11) {


            $edit = NULL;

            $f = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Fortaleza::where('numero_control', Auth::user()->numero_control)->exists() && $f->fortalezas_1 != NULL) {
                $edit = 1;
                $f_decode = json_decode($f->fortalezas_1);

            } else {
                $edit = 0;
            }
            return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_1', compact('edit', 'f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_f2(){

        if(Auth::User()->avance >= 1.12){

            $edit = NULL;

            $f = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->fortalezas_2 != ''){
                $edit = 1;
                $f_decode = json_decode($f->fortalezas_2);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_2', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_f3(){
        if(Auth::User()->avance >= 1.13){

            $edit = NULL;

            $f = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->fortalezas_3 != ''){
                $edit = 1;
                $f_decode = json_decode($f->fortalezas_3);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_3', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_f4(){
        if(Auth::User()->avance >= 1.14){

            $edit = NULL;

            $f = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->fortalezas_4 != ''){
                $edit = 1;
                $f_decode = json_decode($f->fortalezas_4);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_1.Analisis_Foda_Paso1_4', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }


    public function create_d1(){
        if(Auth::User()->avance >= 1.21){

            $edit = NULL;

            $f = Debilidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if(Debilidad::where('numero_control', Auth::user()->numero_control)->exists() &&  $f->debilidads_1 != NULL){
                $edit = 1;
                $f_decode = json_decode($f->debilidads_1 );

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_1', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_d2(){
        if(Auth::User()->avance >=1.22){

            $edit = NULL;

            $f = Debilidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->debilidads_2 != ''){
                $edit = 1;
                $f_decode = json_decode($f->debilidads_2);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_2', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_d3(){
        if(Auth::User()->avance >= 1.23){

            $edit = NULL;

            $f = Debilidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->debilidads_3 != ''){
                $edit = 1;
                $f_decode = json_decode($f->debilidads_3);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_3', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_d4(){
        if(Auth::User()->avance >= 1.24){

            $edit = NULL;

            $f = Debilidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->debilidads_4 != ''){
                $edit = 1;
                $f_decode = json_decode($f->debilidads_4);

            }else{
                $edit= 0;
            }


            return view('activities.1_foda_cuestionarios.paso_2.Analisis_Foda_Paso2_4', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }


    public function create_a1(){
        if(Auth::User()->avance >= 1.31){

            $edit = NULL;

            $f = Amenaza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if(Amenaza::where('numero_control', Auth::user()->numero_control)->exists() && $f->amenazas_1 != NULL){
                $edit = 1;
                $f_decode = json_decode($f->amenazas_1);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_1', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_a2(){
        if(Auth::User()->avance >= 1.32){

            $edit = NULL;

            $f = Amenaza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->amenazas_2 != ''){
                $edit = 1;
                $f_decode = json_decode($f->amenazas_2);

            }else{
                $edit= 0;
            }


            return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_2', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_a3(){
        if(Auth::User()->avance >= 1.33){

            $edit = NULL;

            $f = Amenaza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->amenazas_3 != ''){
                $edit = 1;
                $f_decode = json_decode($f->amenazas_3);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_3', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_a4(){
        if(Auth::User()->avance >= 1.34){


            $edit = NULL;

            $f = Amenaza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->amenazas_4 != ''){
                $edit = 1;
                $f_decode = json_decode($f->amenazas_4);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_4', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_a5(){
        if(Auth::User()->avance >= 1.35){

            $edit = NULL;

            $f = Amenaza::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->amenazas_5 != ''){
                $edit = 1;
                $f_decode = json_decode($f->amenazas_5);

            }else{
                $edit= 0;
            }


            return view('activities.1_foda_cuestionarios.paso_3.Analisis_Foda_Paso3_5', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }


    public function create_o1(){
        if(Auth::User()->avance >= 1.41){

            $edit = NULL;

            $f = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if(Oportunidad::where('numero_control', Auth::user()->numero_control)->exists() && $f->oportunidads_1 != NULL){
                $edit = 1;
                $f_decode = json_decode($f->oportunidads_1);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_1', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_o2(){
        if(Auth::User()->avance >= 1.42){

            $edit = NULL;

            $f = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->oportunidads_2 != ''){
                $edit = 1;
                $f_decode = json_decode($f->oportunidads_2);

            }else{
                $edit= 0;
            }


            return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_2', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_o3(){
        if(Auth::User()->avance >= 1.43){

            $edit = NULL;

            $f = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->oportunidads_3 != ''){
                $edit = 1;
                $f_decode = json_decode($f->oportunidads_3);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_3', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_o4(){
        if(Auth::User()->avance >= 1.44){

            $edit = NULL;

            $f = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if($f->oportunidads_4 != ''){
                $edit = 1;
                $f_decode = json_decode($f->oportunidads_4);

            }else{
                $edit= 0;
            }

            return view('activities.1_foda_cuestionarios.paso_4.Analisis_Foda_Paso4_4', compact('edit','f_decode'));
        }else{
            return redirect()->back();
        }
    }

    public function create_r(){

        if(Auth::User()->avance >= 1.45) {

            $f = Fortaleza::where('numero_control', Auth::user()->numero_control)->first()->fortalezas_4;
            $fd = json_decode($f);

            $o = Oportunidad::where('numero_control', Auth::user()->numero_control)->first()->oportunidads_4;
            $od = json_decode($o);

            $d = Debilidad::where('numero_control', Auth::user()->numero_control)->first()->debilidads_4;
            $dd = json_decode($d);

            $a = Amenaza::where('numero_control', Auth::user()->numero_control)->first()->amenazas_5;
            $ad = json_decode($a);

            return view('activities.1_foda_cuestionarios.resumen.Analisis_Foda_Resumen', compact('fd', 'od', 'dd', 'ad'));

        }else{
            return redirect()->back();
        }

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

        if(Fortaleza::where('numero_control', Auth::user()->numero_control)->exists()){

            $fortaleza_1 = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();
            $fortaleza_1->numero_control = Auth::user()->numero_control;
            $fortaleza_1->fortalezas_1 = $f1_output;

            $fortaleza_1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.12;
            $u->save();

        }else{
            $fortaleza_1 = new Fortaleza();
            $fortaleza_1->numero_control = Auth::user()->numero_control;
            $fortaleza_1->fortalezas_1 = $f1_output;

            $fortaleza_1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.12;
            $u->save();
        }



        return redirect()->back();
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

        $fortaleza_2 = Fortaleza::where('numero_control',Auth::user()->numero_control)->first();
        $fortaleza_2->fortalezas_2 = $f2_output;
        $fortaleza_2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.13;
        $u->save();


        return redirect()->back();

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

        $fortaleza_3 = Fortaleza::where('numero_control',Auth::user()->numero_control)->first();
        $fortaleza_3->fortalezas_3 = $f3_output;
        $fortaleza_3->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.14;
        $u->save();


        return redirect()->back();

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

        $fortaleza_4 = Fortaleza::where('numero_control',Auth::user()->numero_control)->first();
        $fortaleza_4->fortalezas_4 = $f4_output;
        $fortaleza_4->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.21;
        $u->save();


        return redirect()->back();

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

        if(Debilidad::where('numero_control', Auth::user()->numero_control)->exists()){
            $debilidad_1 = Debilidad::where('numero_control', Auth::user()->numero_control)->first();
            $debilidad_1->numero_control = Auth::user()->numero_control;
            $debilidad_1->debilidads_1 = $d1_output;
            $debilidad_1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.22;
            $u->save();
        }else {
            $debilidad_1 = new Debilidad();
            $debilidad_1->numero_control = Auth::user()->numero_control;
            $debilidad_1->debilidads_1 = $d1_output;
            $debilidad_1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.22;
            $u->save();
        }




        return redirect()->back();

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

        $debilidad_2 = Debilidad::where('numero_control',Auth::user()->numero_control)->first();
        $debilidad_2->debilidads_2 = $d2_output;
        $debilidad_2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.23;
        $u->save();

        return redirect()->back();

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

        $debilidad_3 = Debilidad::where('numero_control',Auth::user()->numero_control)->first();
        $debilidad_3->debilidads_3 = $d3_output;
        $debilidad_3->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.24;
        $u->save();

        return redirect()->back();

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

        $debilidad_4 = Debilidad::where('numero_control',Auth::user()->numero_control)->first();
        $debilidad_4->debilidads_4 = $d4_output;
        $debilidad_4->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.31;
        $u->save();

        return redirect()->back();

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

        if(Amenaza::where('numero_control', Auth::user()->numero_control)->exists()){
            $amenazas_1 = Amenaza::where('numero_control', Auth::user()->numero_control);
            $amenazas_1->numero_control = Auth::user()->numero_control;
            $amenazas_1->amenazas_1 = $a1_output;
            $amenazas_1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.32;
            $u->save();
        }else{
            $amenazas_1 = new Amenaza();
            $amenazas_1->numero_control = Auth::user()->numero_control;
            $amenazas_1->amenazas_1 = $a1_output;
            $amenazas_1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.32;
            $u->save();
        }




        return redirect()->back();
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

        $amenazas_2 = Amenaza::where('numero_control',Auth::user()->numero_control)->first();
        $amenazas_2->amenazas_2 = $a2_output;
        $amenazas_2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.33;
        $u->save();

        return redirect()->back();

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

        $amenazas_3 = Amenaza::where('numero_control',Auth::user()->numero_control)->first();
        $amenazas_3->amenazas_3 = $a3_output;
        $amenazas_3->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.34;
        $u->save();

        return redirect()->back();

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

        $amenazas_4 = Amenaza::where('numero_control',Auth::user()->numero_control)->first();
        $amenazas_4->amenazas_4 = $a4_output;
        $amenazas_4->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.35;
        $u->save();

        return redirect()->back();

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

        $amenazas_5 = Amenaza::where('numero_control',Auth::user()->numero_control)->first();
        $amenazas_5->amenazas_5 = $a5_output;
        $amenazas_5->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.41;
        $u->save();

        return redirect()->back();

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

        if(Oportunidad::where('numero_control', Auth::user()->numero_control)->exists()){
            $oportunidads_1 = Oportunidad::where('numero_control', Auth::user()->numero_control);
            $oportunidads_1->numero_control = Auth::user()->numero_control;
            $oportunidads_1->oportunidads_1 = $o1_output;
            $oportunidads_1->save();


            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.42;
            $u->save();
        }else{
            $oportunidads_1 = new Oportunidad();
            $oportunidads_1->numero_control = Auth::user()->numero_control;
            $oportunidads_1->oportunidads_1 = $o1_output;
            $oportunidads_1->save();


            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 1.42;
            $u->save();
        }


        return redirect()->back();
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

        $oportunidads_2 = Oportunidad::where('numero_control',Auth::user()->numero_control)->first();
        $oportunidads_2->oportunidads_2 = $o2_output;
        $oportunidads_2->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.43;
        $u->save();

        return redirect()->back();

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

        $oportunidads_3 = Oportunidad::where('numero_control',Auth::user()->numero_control)->first();
        $oportunidads_3->oportunidads_3 = $o3_output;
        $oportunidads_3->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 1.45;
        $u->save();

        return redirect()->back();

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

        $oportunidads_4 = Oportunidad::where('numero_control',Auth::user()->numero_control)->first();
        $oportunidads_4->oportunidads_4 = $o4_output;
        $oportunidads_4->save();

        $u = User::where('numero_control', Auth::user()->numero_control)->first();
        $u->avance = 2.12;
        $u->save();

        return redirect('foda_r');

    }

    public function edit_f1(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->fe1)){
            $f1[$i]=$request->fe1[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();

        $e->fortalezas_1 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_f2(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->fe2)){
            $f1[$i]=$request->fe2[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();

        $e->fortalezas_2 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_f3(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->fe3)){
            $f1[$i]=$request->fe3[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();

        $e->fortalezas_3 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_f4(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->fe4)){
            $f1[$i]=$request->fe4[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();

        $e->fortalezas_4 = $f1_output;

        $e->save();

        return redirect()->back();
    }


    public function edit_d1(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->de1)){
            $f1[$i]=$request->de1[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Debilidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->debilidads_1 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_d2(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->de2)){
            $f1[$i]=$request->de2[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Debilidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->debilidads_2 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_d3(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->de3)){
            $f1[$i]=$request->de3[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Debilidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->debilidads_3 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_d4(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->de4)){
            $f1[$i]=$request->de4[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Debilidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->debilidads_4 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_a1(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->ae1)){
            $f1[$i]=$request->ae1[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Amenaza::where('numero_control', Auth::user()->numero_control)->first();

        $e->amenazas_1 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_a2(Request $request){


        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->ae2)){
            $f1[$i]=$request->ae2[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Amenaza::where('numero_control', Auth::user()->numero_control)->first();

        $e->amenazas_2 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_a3(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->ae3)){
            $f1[$i]=$request->ae3[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Amenaza::where('numero_control', Auth::user()->numero_control)->first();

        $e->amenazas_3 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_a4(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->ae4)){
            $f1[$i]=$request->ae4[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Amenaza::where('numero_control', Auth::user()->numero_control)->first();

        $e->amenazas_4 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_a5(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->ae5)){
            $f1[$i]=$request->ae5[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Amenaza::where('numero_control', Auth::user()->numero_control)->first();

        $e->amenazas_5 = $f1_output;

        $e->save();
        return redirect()->back();
    }

    public function edit_o1(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->oe1)){
            $f1[$i]=$request->oe1[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->oportunidads_1 = $f1_output;

        $e->save();
        return redirect()->back();
    }

    public function edit_o2(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->oe2)){
            $f1[$i]=$request->oe2[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->oportunidads_2 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_o3(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->oe3)){
            $f1[$i]=$request->oe3[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->oportunidads_3 = $f1_output;

        $e->save();

        return redirect()->back();
    }

    public function edit_o4(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->oe4)){
            $f1[$i]=$request->oe4[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();

        $e->oportunidads_4 = $f1_output;

        $e->save();
        return redirect()->back();
    }

    public function show(){

    }

    public function destroy(){

    }

    public function update(){

    }
}
