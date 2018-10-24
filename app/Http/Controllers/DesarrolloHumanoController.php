<?php

namespace App\Http\Controllers;

use App\Desarrollohumano;
use Illuminate\Http\Request;

class DesarrolloHumanoController extends Controller
{

    public function create_des_hum_int_1(){
        return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_1');
    }

    public function create_des_hum_int_2(){
        return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_2');
    }

    public function create_des_hum_int_3(){
        return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_3');
    }

    public function create_des_hum_int_4(){
        return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_4');
    }

    public function create_des_hum_int_5(){
        return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_5');
    }

    public function create_des_hum_int_6(){
        return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_6');
    }

    public function store_des_hum_int_1(Request $request){

        //********Hora 1********
        $dif=array();
        $dif_i=1;
        $dif_k=0;

        while($dif_i<=count($request->dif)){
            $dif[$dif_i]=$request->dif[$dif_k];
            $dif_i++;
            $dif_k++;
        }
        $dif_output = json_encode($dif);

        $dh = new Desarrollohumano();

        $dh->numero_control = 14021073;
        $dh->e1_difs  = $dif_output;

        $dh->e2_a1 = "";
        $dh->e2_a2 = "";
        $dh->e2_a3 = "";
        $dh->e2_a4 = "";

        $dh->e3_a1_1 = "";
        $dh->e3_a1_2 = "";
        $dh->e3_a2_1 = "";
        $dh->e3_a2_2 = "";

        $dh->e4_a1_1 = "";
        $dh->e4_a1_2 = "";
        $dh->e4_a2_1 = "";
        $dh->e4_a2_2 = "";
        $dh->e4_a3_1 = "";
        $dh->e4_a3_2 = "";
        $dh->e4_a4_1 = "";
        $dh->e4_a4_2 = "";
        $dh->e4_a5_1 = "";
        $dh->e4_a5_2 = "";

        $dh->e5_a1 = "";

        $dh->e6_a1 = "";


        $dh->save();


        return $dif_output;

    }

    public function store_des_hum_int_2(Request $request){

        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e2_a1 = $request->rel1;
        $dh->e2_a2 = $request->rel2;
        $dh->e2_a3 = $request->rel3;
        $dh->e2_a4 = $request->rel4;

        $dh->save();

        return 'oks';
    }

    public function store_des_hum_int_3(Request $request){
        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e3_a1_1 = $request->rel1;
        $dh->e3_a1_2 = $request->rel1_2;
        $dh->e3_a2_1 = $request->rel2;
        $dh->e3_a2_2 = $request->rel2_2;

        $dh->save();

        return 'oks';
    }

    public function store_des_hum_int_4(Request $request){
        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e4_a1_1 = $request->txt1_1;
        $dh->e4_a1_2 =  $request->txt1_2;
        $dh->e4_a2_1 =  $request->txt2_1;
        $dh->e4_a2_2 =  $request->txt2_2;
        $dh->e4_a3_1 =  $request->txt3_1;
        $dh->e4_a3_2 =  $request->txt3_2;
        $dh->e4_a4_1 =  $request->txt4_1;
        $dh->e4_a4_2 =  $request->txt4_2;
        $dh->e4_a5_1 =  $request->txt5_1;
        $dh->e4_a5_2 =  $request->txt5_2;

        $dh->save();

        return 'oks';
    }

    public function store_des_hum_int_5(Request $request){
        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        //********Hora 1********
        $a5=array();
        $a5_i=1;
        $a5_k=0;

        while($a5_i<=count($request->log)){
            $a5[$a5_i]=$request->log[$a5_k];
            $a5_i++;
            $a5_k++;
        }
        $a5_output = json_encode($a5);

        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e5_a1 = $a5_output;
        $dh->save();

        return $a5_output;

    }

    public function store_des_hum_int_6(Request $request){

        $dh = Desarrollohumano::where('numero_control',14021073)->first();
        $dh->e6_a1 = $request->text;
        $dh->save();

        return 'oks';

    }


    }
