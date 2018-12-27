<?php

namespace App\Http\Controllers;

use App\Desarrollohumano;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesarrolloHumanoController extends Controller
{

    public function create_des_hum_l_1(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_1');
    }

    public function create_des_hum_l_2(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_2');
    }

    public function create_des_hum_l_3(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_3');
    }

    public function create_des_hum_l_4(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_4');
    }

    public function create_des_hum_l_5(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_5');
    }

    public function create_des_hum_l_6(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_6');
    }

    public function create_des_hum_l_7(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_7');
    }

    public function create_des_hum_l_8(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_8');
    }

    public function create_des_hum_l_9(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_9');
    }

    public function create_des_hum_l_10(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_10');
    }

    public function create_des_hum_l_11(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_11');
    }

    public function create_des_hum_l_12(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_12');
    }

    public function create_des_hum_l_13(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_13');
    }

    public function create_des_hum_l_14(){
        return view('activities.4_desarrollo_humano_integral.lecturas.lectura_14');
    }







    public function create_des_hum_int_1(){
        if(Auth::User()->avance >= 4.1){
            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_1');
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_2(){
        if(Auth::User()->avance >= 4.2){
            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_2');
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_3(){
        if(Auth::User()->avance >= 4.3){
            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_3');
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_4(){
        if(Auth::User()->avance >= 4.4){
            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_4');
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_5(){
        if(Auth::User()->avance >= 4.5){
            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_5');
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_6(){
        if(Auth::User()->avance >= 4.6){
            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_6');
        }else{
            return redirect()->back();
        }
    }

    public function store_des_hum_int_1(Request $request){

        $f1 = $request->f1;
        $f2 = $request->f2;
        $f3 = $request->f3;
        $f4 = $request->f4;
        $f5 = $request->f5;
        $f6 = $request->f6;
        $f7 = $request->f7;

        $d1 = $request->d1;
        $d2 = $request->d2;
        $d3 = $request->d3;
        $d4 = $request->d4;
        $d5 = $request->d5;
        $d6 = $request->d6;
        $d7 = $request->d7;


        switch($d1){
            case 1:
                $d1 ="Orientación";
                break;

            case 2:
                $d1 ="Tamaño";
                break;

            case 3:
                $d1 = "Color";
                break;

            case 4:
                $d1 = "Posición";
                break;
        }

        switch($d2){
            case 1:
                $d2 = "Orientación";
                break;

            case 2:
                $d2 = "Tamaño";
                break;

            case 3:
                $d2 = "Color";
                break;

            case 4:
                $d2 = "Posición";
                break;
        }

        switch($d3){
            case 1:
                $d3 = "Orientación";
                break;

            case 2:
                $d3 = "Tamaño";
                break;

            case 3:
                $d3= "Color";
                break;

            case 4:
                $d3 = "Posición";
                break;
        }

        switch($d4){
            case 1:
                $d4 = "Orientación";
                break;

            case 2:
                $d4 = "Tamaño";
                break;

            case 3:
                $d4= "Color";
                break;

            case 4:
                $d4 = "Posición";
                break;
        }

        switch($d5){
            case 1:
                $d5 = "Orientación";
                break;

            case 2:
                $d5 = "Tamaño";
                break;

            case 3:
                $d5= "Color";
                break;

            case 4:
                $d5 = "Posición";
                break;
        }

        switch($d6){
            case 1:
                $d6 = "Orientación";
                break;

            case 2:
                $d6 = "Tamaño";
                break;

            case 3:
                $d6= "Color";
                break;

            case 4:
                $d6 = "Posición";
                break;
        }

        switch($d7){
            case 1:
                $d7 = "Orientación";
                break;

            case 2:
                $d7 = "Tamaño";
                break;

            case 3:
                $d7= "Color";
                break;

            case 4:
                $d7 = "Posición";
                break;
        }



        $data1 = array(1=>$f1,2=>$f2, 3=>$f3, 4=>$f4, 5=>$f5, 6=>$f6, 7=>$f7);
        $data2 = array(1=>$d1,2=>$d2, 3=>$d3, 4=>$d4, 5=>$d5, 6=>$d6, 7=>$d7);

        $output1 = json_encode($data1);
        $output2 = json_encode($data2);


        $dh = new Desarrollohumano();

        $dh->numero_control = 14021073;
        $dh->e1_difs  = $output1;
        $dh->e2_difs  = $output2;


        $dh->retro_1 = "";
        $dh->cal_1 = 0;

        $dh->e2_a1 = "";
        $dh->e2_a2 = "";
        $dh->e2_a3 = "";
        $dh->e2_a4 = "";

        $dh->retro_2 = "";
        $dh->cal_2 = 0;

        $dh->e3_a1_1 = "";
        $dh->e3_a1_2 = "";
        $dh->e3_a2_1 = "";
        $dh->e3_a2_2 = "";

        $dh->retro_3 = "";
        $dh->cal_3 = 0;

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

        $dh->retro_4 = "";
        $dh->cal_4 = 0;

        $dh->e5_a1 = "";

        $dh->retro_5 = "";
        $dh->cal_5 = 0;

        $dh->e6_a1 = "";

        $dh->retro_6 = "";
        $dh->cal_6 = 0;

        $dh->cal_final = 0;

        $dh->save();

        //return $f1.'-'.$d1 .', '.$f2 .' -'.$d2 .', '.$f3.' -'.$d3.', '.$f4.'-'.$d4.', '. $f5.' -'.$d5.', '.$f6.' -'.$d6.', '.$f7.' -'.$d7;



        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.2;
        $u->save();

        return redirect('des_hum_int_ej_2');

    }

    public function store_des_hum_int_2(Request $request){

        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e2_a1 = $request->rel1;
        $dh->e2_a2 = $request->rel2;
        $dh->e2_a3 = $request->rel3;
        $dh->e2_a4 = $request->rel4;

        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.3;
        $u->save();

        return redirect('des_hum_int_ej_3');
    }

    public function store_des_hum_int_3(Request $request){
        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e3_a1_1 = $request->rel1;
        $dh->e3_a1_2 = $request->rel1_2;
        $dh->e3_a2_1 = $request->rel2;
        $dh->e3_a2_2 = $request->rel2_2;

        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.4;
        $u->save();

        return redirect('des_hum_int_ej_4');
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

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.5;
        $u->save();

        return redirect('des_hum_int_ej_5');
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


        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.6;
        $u->save();

        return redirect('des_hum_int_ej_6');

    }

    public function store_des_hum_int_6(Request $request){

        $dh = Desarrollohumano::where('numero_control',14021073)->first();
        $dh->e6_a1 = $request->text;
        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 5.1;
        $u->save();

        return 'oks';

    }


    }
