<?php

namespace App\Http\Controllers;

use App\Habilidad;
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
            return view('activities.6_Habilidades_de_estudio.ejercicios.ejercicio_1');
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

        return 'oks';

    }

}


