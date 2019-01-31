<?php

namespace App\Http\Controllers;

use App\Habilidad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabilidadsController extends Controller
{

    public function create_hab_est_l_1(){
        return view('activities.6_Habilidades_de_estudio.lecturas.lectura_1');
    }

    public function create_hab_est_l_2(){
        return view('activities.6_Habilidades_de_estudio.lecturas.lectura_2');
    }

    public function create_hab_est_l_3(){
        return view('activities.6_Habilidades_de_estudio.lecturas.lectura_3');
    }



    public function create_hab_est_1(){
        if(Auth::User()->avance >= 6.1){

            $edit = NULL;

            $int = Habilidad::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Habilidad::where('numero_control', 14021073)->exists() && json_decode($int->h1, true)!= NULL && json_decode($int->h2, true)!= NULL && json_decode($int->h3, true)!= NULL && json_decode($int->h4, true)!= NULL && json_decode($int->h5, true)!= NULL && json_decode($int->h6, true)!= NULL && json_decode($int->h7, true)!= NULL && json_decode($int->h8, true)!= NULL && json_decode($int->h9, true)!= NULL ) {
                $edit = 1;

                $f_decode1 = json_decode($int->h1, true);
                $f_decode2 = json_decode($int->h2, true);
                $f_decode3 = json_decode($int->h3, true);
                $f_decode4 = json_decode($int->h4, true);
                $f_decode5 = json_decode($int->h5, true);
                $f_decode6 = json_decode($int->h6, true);
                $f_decode7 = json_decode($int->h7, true);
                $f_decode8 = json_decode($int->h8, true);
                $f_decode9 = json_decode($int->h9, true);

            } else {
                $edit = 0;
            }


            return view('activities.6_Habilidades_de_estudio.ejercicios.ejercicio_1', compact('edit', 'f_decode1','f_decode2','f_decode3','f_decode4','f_decode5', 'f_decode6','f_decode7','f_decode8','f_decode9'));
        }else{
            return redirect()->back();
        }
    }

    public function store_hab_est_1(Request $request){

        //********h1********
        $h1=array();
        $h1_i=1;
        $h1_k=0;

        while($h1_i<=count($request->h1)){
            $h1[$h1_i]=$request->h1[$h1_k];
            $h1_i++;
            $h1_k++;
        }
        $h1_output = json_encode($h1);

        //********h2********
        $h2=array();
        $h2_i=1;
        $h2_k=0;

        while($h2_i<=count($request->h2)){
            $h2[$h2_i]=$request->h2[$h2_k];
            $h2_i++;
            $h2_k++;
        }
        $h2_output = json_encode($h2);

        //********h3********
        $h3=array();
        $h3_i=1;
        $h3_k=0;

        while($h3_i<=count($request->h3)){
            $h3[$h3_i]=$request->h3[$h3_k];
            $h3_i++;
            $h3_k++;
        }
        $h3_output = json_encode($h3);

        //********h4********
        $h4=array();
        $h4_i=1;
        $h4_k=0;

        while($h4_i<=count($request->h4)){
            $h4[$h4_i]=$request->h4[$h4_k];
            $h4_i++;
            $h4_k++;
        }
        $h4_output = json_encode($h4);


        //********h5********
        $h5=array();
        $h5_i=1;
        $h5_k=0;

        while($h5_i<=count($request->h5)){
            $h5[$h5_i]=$request->h5[$h5_k];
            $h5_i++;
            $h5_k++;
        }
        $h5_output = json_encode($h5);

        //********h6********
        $h6=array();
        $h6_i=1;
        $h6_k=0;

        while($h6_i<=count($request->h6)){
            $h6[$h6_i]=$request->h6[$h6_k];
            $h6_i++;
            $h6_k++;
        }
        $h6_output = json_encode($h6);

        //********h7********
        $h7=array();
        $h7_i=1;
        $h7_k=0;

        while($h7_i<=count($request->h7)){
            $h7[$h7_i]=$request->h7[$h7_k];
            $h7_i++;
            $h7_k++;
        }
        $h7_output = json_encode($h7);

        //********h8********
        $h8=array();
        $h8_i=1;
        $h8_k=0;

        while($h8_i<=count($request->h8)){
            $h8[$h8_i]=$request->h8[$h8_k];
            $h8_i++;
            $h8_k++;
        }
        $h8_output = json_encode($h8);

        //********h9********
        $h9=array();
        $h9_i=1;
        $h9_k=0;

        while($h9_i<=count($request->h9)){
            $h9[$h9_i]=$request->h9[$h9_k];
            $h9_i++;
            $h9_k++;
        }
        $h9_output = json_encode($h9);

        if(Habilidad::where('numero_control', Auth::user()->numero_control)->exists()){

            $h1 = Habilidad::where('numero_control', Auth::user()->numero_control)->first();
            $h1->numero_control = 14021073;
            $h1->h1 = $h1_output;
            $h1->h2 = $h2_output;
            $h1->h3 = $h3_output;
            $h1->h4 = $h4_output;
            $h1->h5 = $h5_output;
            $h1->h6 = $h6_output;
            $h1->h7 = $h7_output;
            $h1->h8 = $h8_output;
            $h1->h9 = $h9_output;

            $h1->retro = "";
            $h1->cal_final = 0;

            $h1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 7.1;
            $u->save();
        }else{

            $h1 = new Habilidad();
            $h1->numero_control = 14021073;
            $h1->h1 = $h1_output;
            $h1->h2 = $h2_output;
            $h1->h3 = $h3_output;
            $h1->h4 = $h4_output;
            $h1->h5 = $h5_output;
            $h1->h6 = $h6_output;
            $h1->h7 = $h7_output;
            $h1->h8 = $h8_output;
            $h1->h9 = $h9_output;

            $h1->retro = "";
            $h1->cal_final = 0;

            $h1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 7.1;
            $u->save();

        }

        return redirect('/hab_est_1');

    }

    public function edit_hab_est_1(Request $request){

        $g = Habilidad::where('numero_control', Auth::user()->numero_control)->first();


        //********h1********
        $h1=array();
        $h1_i=1;
        $h1_k=0;

        while($h1_i<=count($request->h1_e)){
            $h1[$h1_i]=$request->h1_e[$h1_k];
            $h1_i++;
            $h1_k++;
        }
        $h1_output = json_encode($h1);

        //********h2********
        $h2=array();
        $h2_i=1;
        $h2_k=0;

        while($h2_i<=count($request->h2_e)){
            $h2[$h2_i]=$request->h2_e[$h2_k];
            $h2_i++;
            $h2_k++;
        }
        $h2_output = json_encode($h2);

        //********h3********
        $h3=array();
        $h3_i=1;
        $h3_k=0;

        while($h3_i<=count($request->h3_e)){
            $h3[$h3_i]=$request->h3_e[$h3_k];
            $h3_i++;
            $h3_k++;
        }
        $h3_output = json_encode($h3);

        //********h4********
        $h4=array();
        $h4_i=1;
        $h4_k=0;

        while($h4_i<=count($request->h4_e)){
            $h4[$h4_i]=$request->h4_e[$h4_k];
            $h4_i++;
            $h4_k++;
        }
        $h4_output = json_encode($h4);


        //********h5********
        $h5=array();
        $h5_i=1;
        $h5_k=0;

        while($h5_i<=count($request->h5_e)){
            $h5[$h5_i]=$request->h5_e[$h5_k];
            $h5_i++;
            $h5_k++;
        }
        $h5_output = json_encode($h5);

        //********h6********
        $h6=array();
        $h6_i=1;
        $h6_k=0;

        while($h6_i<=count($request->h6_e)){
            $h6[$h6_i]=$request->h6_e[$h6_k];
            $h6_i++;
            $h6_k++;
        }
        $h6_output = json_encode($h6);

        //********h7********
        $h7=array();
        $h7_i=1;
        $h7_k=0;

        while($h7_i<=count($request->h7_e)){
            $h7[$h7_i]=$request->h7_e[$h7_k];
            $h7_i++;
            $h7_k++;
        }
        $h7_output = json_encode($h7);

        //********h8********
        $h8=array();
        $h8_i=1;
        $h8_k=0;

        while($h8_i<=count($request->h8_e)){
            $h8[$h8_i]=$request->h8_e[$h8_k];
            $h8_i++;
            $h8_k++;
        }
        $h8_output = json_encode($h8);

        //********h9********
        $h9=array();
        $h9_i=1;
        $h9_k=0;

        while($h9_i<=count($request->h9_e)){
            $h9[$h9_i]=$request->h9_e[$h9_k];
            $h9_i++;
            $h9_k++;
        }
        $h9_output = json_encode($h9);

        $g->h1 = $h1_output;
        $g->h2 = $h2_output;
        $g->h3 = $h3_output;
        $g->h4 = $h4_output;
        $g->h5 = $h5_output;
        $g->h6 = $h6_output;
        $g->h7 = $h7_output;
        $g->h8 = $h8_output;
        $g->h9 = $h9_output;

        $g->save();

        return redirect()->back();
    }



}


