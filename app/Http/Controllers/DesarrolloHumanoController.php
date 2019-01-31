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

            $edit = 0;


            $f1_decode = NULL;
            $f2_decode = NULL;


            $f = Desarrollohumano::where('numero_control', 14021073)->first();
            $f_decode = NULL;

            if (Desarrollohumano::where('numero_control', 14021073)->exists() && $f->e1_difs!=NULL && $f->e2_difs!=NULL) {
                $edit = 1;

                $f_decode1 = json_decode($f->e1_difs, true);
                $f_decode2 = json_decode($f->e2_difs, true);

                $n1 = $f_decode1['1'];
                $n2 = $f_decode1['2'];
                $n3 = $f_decode1['3'];
                $n4 = $f_decode1['4'];
                $n5 = $f_decode1['5'];
                $n6 = $f_decode1['6'];
                $n7 = $f_decode1['7'];

                $op1 = $f_decode2['1'];
                $op2 = $f_decode2['2'];
                $op3 = $f_decode2['3'];
                $op4 = $f_decode2['4'];
                $op5 = $f_decode2['5'];
                $op6 = $f_decode2['6'];
                $op7 = $f_decode2['7'];


                $o1 = 0;
                $o2 = 0;
                $o3 = 0;
                $o4 = 0;
                $o5 = 0;
                $o6 = 0;
                $o7 = 0;

                switch($op1){
                    case 'Orientación':
                        $o1 = 1;
                    break;

                    case 'Tamaño':
                        $o1 = 2;
                        break;

                    case 'Color':
                        $o1 = 3;
                        break;

                    case 'Posición':
                        $o1 = 4;
                        break;
                }

                switch($op2){
                    case 'Orientación':
                        $o2 = 1;
                        break;

                    case 'Tamaño':
                        $o2 = 2;
                        break;

                    case 'Color':
                        $o2 = 3;
                        break;

                    case 'Posición':
                        $o2 = 4;
                        break;
                }

                switch($op3){
                    case 'Orientación':
                        $o3 = 1;
                        break;

                    case 'Tamaño':
                        $o3 = 2;
                        break;

                    case 'Color':
                        $o3 = 3;
                        break;

                    case 'Posición':
                        $o3 = 4;
                        break;
                }

                switch($op4){
                    case 'Orientación':
                        $o4 = 1;
                        break;

                    case 'Tamaño':
                        $o4 = 2;
                        break;

                    case 'Color':
                        $o4 = 3;
                        break;

                    case 'Posición':
                        $o4 = 4;
                        break;
                }

                switch($op5){
                    case 'Orientación':
                        $o5 = 1;
                        break;

                    case 'Tamaño':
                        $o5 = 2;
                        break;

                    case 'Color':
                        $o5 = 3;
                        break;

                    case 'Posición':
                        $o5 = 4;
                        break;
                }

                switch($op6){
                    case 'Orientación':
                        $o6 = 1;
                        break;

                    case 'Tamaño':
                        $o6 = 2;
                        break;

                    case 'Color':
                        $o6 = 3;
                        break;

                    case 'Posición':
                        $o6 = 4;
                        break;
                }

                switch($op7){
                    case 'Orientación':
                        $o7 = 1;
                        break;

                    case 'Tamaño':
                        $o7 = 2;
                        break;

                    case 'Color':
                        $o7 = 3;
                        break;

                    case 'Posición':
                        $o7 = 4;
                        break;
                }

            } else {
                $edit = 0;
            }

            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_1', compact ('edit', 'n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'o1', 'o2', 'o3', 'o4', 'o5', 'o6', 'o7'));
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_2(){
        if(Auth::User()->avance >= 4.2){

            $edit = NULL;

            $f = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();
            $f_decode1 = NULL;

            if ($f->avance_2 > 0) {
                $edit = 1;

                $f_decode1 = $f->e2_a1;
                $f_decode2 = $f->e2_a2;
                $f_decode3 = $f->e2_a3;
                $f_decode4 = $f->e2_a4;

            } else {
                $edit = 0;
            }

            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4'));
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_3(){
        if(Auth::User()->avance >= 4.3){

            $edit = NULL;

            $f = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();
            $f_decode1 = NULL;

            if ($f->avance_3 > 0) {
                $edit = 1;

                $f_decode1 = $f->e3_a1_1;
                $f_decode2 = $f->e3_a1_2;
                $f_decode3 = $f->e3_a2_1;
                $f_decode4 = $f->e3_a2_2;

            } else {
                $edit = 0;
            }


            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_3', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4'));
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_4(){
        if(Auth::User()->avance >= 4.4){

            $edit = NULL;

            $f = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();
            $f_decode1 = NULL;

            if ($f->avance_4 > 0) {
                $edit = 1;

                $f_decode1 = $f->e4_a1_1;
                $f_decode2 = $f->e4_a1_2;
                $f_decode3 = $f->e4_a2_1;
                $f_decode4 = $f->e4_a2_2;
                $f_decode5 = $f->e4_a3_1;
                $f_decode6 = $f->e4_a3_2;
                $f_decode7 = $f->e4_a4_1;
                $f_decode8 = $f->e4_a4_2;
                $f_decode9 = $f->e4_a5_1;
                $f_decode10 = $f->e4_a5_2;

            } else {
                $edit = 0;
            }

            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_4', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4','f_decode5','f_decode6','f_decode7','f_decode8','f_decode9','f_decode10'));
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_5(){
        if(Auth::User()->avance >= 4.5){

            $edit = NULL;

            $f = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();
            $f_decode1 = NULL;

            if ($f->avance_5 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->e5_a1);

            } else {
                $edit = 0;
            }


            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_5', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
    }

    public function create_des_hum_int_6(){
        if(Auth::User()->avance >= 4.6){

            $edit = NULL;

            $f = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();
            $f_decode1 = NULL;

            if ($f->avance_6 > 0) {
                $edit = 1;

                $f_decode1 = $f->e6_a1;

            } else {
                $edit = 0;
            }

            return view('activities.4_desarrollo_humano_integral.ejercicios.ejercicio_6', compact('edit', 'f_decode1'));
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

        if(Desarrollohumano::where('numero_control', Auth::user()->numero_control)->exists()){


            $dh = Desarrollohumano::where('numero_control', Auth::user()->numero_control)->first();

            $dh->numero_control = Auth::user()->numero_control;
            $dh->e1_difs  = $output1;
            $dh->e2_difs  = $output2;
            $dh->avance_1 = 1;

            $dh->save();



            $u = User::where('numero_control', 14021073)->first();
            $u->avance = 4.2;
            $u->save();

        }else{

            $dh = new Desarrollohumano();

            $dh->numero_control = Auth::user()->numero_control;
            $dh->e1_difs  = $output1;
            $dh->e2_difs  = $output2;
            $dh->avance_1 = 1;

            $dh->save();

            $u = User::where('numero_control', 14021073)->first();
            $u->avance = 4.2;
            $u->save();

        }


        return redirect('des_hum_int_ej_1');

    }

    public function store_des_hum_int_2(Request $request){

        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e2_a1 = $request->rel1;
        $dh->e2_a2 = $request->rel2;
        $dh->e2_a3 = $request->rel3;
        $dh->e2_a4 = $request->rel4;
        $dh->avance_2 = 1;

        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.3;
        $u->save();

        return redirect('des_hum_int_ej_2');
    }

    public function store_des_hum_int_3(Request $request){
        $dh = Desarrollohumano::where('numero_control',14021073)->first();

        $dh->e3_a1_1 = $request->rel1;
        $dh->e3_a1_2 = $request->rel1_2;
        $dh->e3_a2_1 = $request->rel2;
        $dh->e3_a2_2 = $request->rel2_2;
        $dh->avance_3 = 1;

        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.4;
        $u->save();

        return redirect('des_hum_int_ej_3');
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
        $dh->avance_4 = 1;

        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.5;
        $u->save();

        return redirect('des_hum_int_ej_4');
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
        $dh->avance_5 = 1;

        $dh->save();


        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.6;
        $u->save();

        return redirect('des_hum_int_ej_5');

    }

    public function store_des_hum_int_6(Request $request){

        $dh = Desarrollohumano::where('numero_control',14021073)->first();
        $dh->e6_a1 = $request->text;
        $dh->avance_6 = 1;
        $dh->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 5.1;
        $u->save();

        return redirect('des_hum_int_ej_6');

    }


    public function edit_des_hum_int_1(Request $request){


        $f1 = $request->f1_e;
        $f2 = $request->f2_e;
        $f3 = $request->f3_e;
        $f4 = $request->f4_e;
        $f5 = $request->f5_e;
        $f6 = $request->f6_e;
        $f7 = $request->f7_e;

        $d1 = $request->d1_e;
        $d2 = $request->d2_e;
        $d3 = $request->d3_e;
        $d4 = $request->d4_e;
        $d5 = $request->d5_e;
        $d6 = $request->d6_e;
        $d7 = $request->d7_e;


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


        $dh = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();

        $dh->numero_control = 14021073;
        $dh->e1_difs  = $output1;
        $dh->e2_difs  = $output2;


        $dh->save();

        return redirect()->back();


    }

    public function edit_des_hum_int_2(Request $requesrt){

        $dh = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();

        $dh->e2_a1 = $requesrt->rel1_e;
        $dh->e2_a2 = $requesrt->rel2_e;
        $dh->e2_a3 = $requesrt->rel3_e;
        $dh->e2_a4 = $requesrt->rel4_e;

        $dh->save();

        return redirect()->back();

    }


    public function edit_des_hum_int_3(Request $request){

        $dh = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();

        $dh->e3_a1_1 = $request->rel1_e;
        $dh->e3_a1_2 = $request->rel1_2_e;
        $dh->e3_a2_1 = $request->rel2_e;
        $dh->e3_a2_2 = $request->rel2_2_e;

        $dh->save();

        return redirect()->back();

    }

    public function edit_des_hum_int_4(Request $request){

        $dh = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();

        $dh->e4_a1_1 = $request->txt1_1_e;
        $dh->e4_a1_2 =  $request->txt1_2_e;
        $dh->e4_a2_1 =  $request->txt2_1_e;
        $dh->e4_a2_2 =  $request->txt2_2_e;
        $dh->e4_a3_1 =  $request->txt3_1_e;
        $dh->e4_a3_2 =  $request->txt3_2_e;
        $dh->e4_a4_1 =  $request->txt4_1_e;
        $dh->e4_a4_2 =  $request->txt4_2_e;
        $dh->e4_a5_1 =  $request->txt5_1_e;
        $dh->e4_a5_2 =  $request->txt5_2_e;

        $dh->save();

        return redirect()->back();

    }


    public function edit_des_hum_int_5(Request $request){

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->log_e)){
            $f1[$i]=$request->log_e[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();

        $e->e5_a1 = $f1_output;

        $e->save();
        return redirect()->back();


    }

    public function edit_des_hum_int_6(Request $request){

        $e = Desarrollohumano::where('numero_control', Auth::User()->numero_control)->first();


        $f1_output = $request->text_e;

        $e->e6_a1 = $f1_output;

        $e->save();

        return redirect()->back();

    }


    }
