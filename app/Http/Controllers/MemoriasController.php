<?php

namespace App\Http\Controllers;

use App\Memoria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoriasController extends Controller
{

    public function create_mem_l_1(){
        return view('activities.7_Memoria.lecturas.lectura_1');
    }

    public function create_mem_l_2(){
        return view('activities.7_Memoria.lecturas.lectura_2');
    }


    public function create_mem_1(){
        if(Auth::User()->avance >= 7.1){

            $edit = NULL;

            $int = Memoria::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Memoria::where('numero_control', 14021073)->exists() && $int->r_1 != NULL  && $int->r_2 != NULL && $int->r_3 != NULL && $int->r_4 != NULL && $int->r_5 != NULL && $int->r_6 != NULL && $int->r_7 != NULL && $int->r_8 != NULL && $int->r_9 != NULL && $int->r_10 != NULL && $int->r_11 != NULL && $int->r_12 != NULL && $int->r_13 != NULL && $int->r_14 != NULL && $int->r_15 != NULL && $int->r_16 != NULL && $int->r_17 != NULL && $int->r_18 != NULL) {
                $edit = 1;

                $f_decode1 = $int->r_1;
                $f_decode2 = $int->r_2;
                $f_decode3 = $int->r_3;
                $f_decode4 = $int->r_4;
                $f_decode5 = $int->r_5;
                $f_decode6 = $int->r_6;
                $f_decode7 = $int->r_7;
                $f_decode8 = $int->r_8;
                $f_decode9 = $int->r_9;
                $f_decode10 = $int->r_10;
                $f_decode11 = $int->r_11;
                $f_decode12 = $int->r_12;
                $f_decode13 = $int->r_13;
                $f_decode14 = $int->r_14;
                $f_decode15 = $int->r_15;
                $f_decode16 = $int->r_16;
                $f_decode17 = $int->r_17;
                $f_decode18 = $int->r_18;


            } else {
                $edit = 0;
            }


            return view('activities.7_Memoria.ejercicios.ejercicio_1', compact('edit', 'f_decode1','f_decode2','f_decode3','f_decode4','f_decode5','f_decode6','f_decode7','f_decode8','f_decode9','f_decode10','f_decode11','f_decode12','f_decode13','f_decode14','f_decode15','f_decode16','f_decode17','f_decode18'));
        }else{
            return redirect()->back();
        }
    }

    public function create_mem_2(){
        if(Auth::User()->avance >= 7.2) {

            $edit = NULL;

            $f = Memoria::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_2 > 0) {
                $edit = 1;


                $f_decode1 = json_decode($f->c1);
                $f_decode2 = $f->con1;


            } else {
                $edit = 0;
            }

            return view('activities.7_Memoria.ejercicios.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2'));

        }else{
            return redirect()->back();
        }
    }

    public function create_mem_3(){
        if(Auth::User()->avance >= 7.3){

            $edit = NULL;

            $f = Memoria::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_3 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->c2);
                $f_decode2 = $f->con2;

            } else {
                $edit = 0;
            }


            return view('activities.7_Memoria.ejercicios.ejercicio_3', compact('edit', 'f_decode1', 'f_decode2'));
        }else{
            return redirect()->back();
        }
    }

    public function create_mem_4(){
        if(Auth::User()->avance >= 7.4){

            $edit = NULL;

            $f = Memoria::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_4 > 0) {
                $edit = 1;

                $f_decode1 = $f->esc;

            } else {
                $edit = 0;
            }

            return view('activities.7_Memoria.ejercicios.ejercicio_4', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
    }

    public function store_mem_1(Request $request){


        $ve = 0;
        $vi = 0;
        $c = 0;


        $r1 = (integer)$request->r1;
        $r2 = (integer)$request->r2;
        $r3 = (integer)$request->r3;
        $r4 = (integer)$request->r4;
        $r5 = (integer)$request->r5;
        $r6 = (integer)$request->r6;
        $r7 = (integer)$request->r7;
        $r8 = (integer)$request->r8;
        $r9 = (integer)$request->r9;
        $r10 = (integer)$request->r10;
        $r11 = (integer)$request->r11;
        $r12 = (integer)$request->r12;
        $r13 = (integer)$request->r13;
        $r14 = (integer)$request->r14;
        $r15 = (integer)$request->r15;
        $r16 = (integer)$request->r16;
        $r17 = (integer)$request->r17;
        $r18 = (integer)$request->r18;

        switch($r1){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r2){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r3){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r4){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r5){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r6){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r7){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r8){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r9){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r10){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r11){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r12){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r13){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r14){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r15){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r16){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r17){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }

        switch($r18){
            case 1:
                $ve = $ve +1;
                break;

            case 2:
                $vi=$vi + 1;
                break;

            case 3:
                $c++;
                break;
        }


        $ar1 = array(1=>$r1);

        if(Memoria::where('numero_control', Auth::user()->numero_control)->exists()){

            $e1 = Memoria::where('numero_control', Auth::user()->numero_control)->first();
            $e1->numero_control = Auth::user()->numero_control;

            $e1->r_1 = $r1;
            $e1->r_2 = $r2;
            $e1->r_3 = $r3;
            $e1->r_4 = $r4;
            $e1->r_5 = $r5;
            $e1->r_6 = $r6;
            $e1->r_7 = $r7;
            $e1->r_8 = $r8;
            $e1->r_9 = $r9;
            $e1->r_10 = $r10;
            $e1->r_11 = $r11;
            $e1->r_12 = $r12;
            $e1->r_13 = $r13;
            $e1->r_14 = $r14;
            $e1->r_15 = $r15;
            $e1->r_16 = $r16;
            $e1->r_17 = $r17;
            $e1->r_18 = $r18;

            $e1->ve = $ve;
            $e1->vi = $vi;
            $e1->c = $c;
            $e1->avance_1 = 1;
            $e1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 7.2;
            $u->save();

        }else{

            $e1 = new Memoria();
            $e1->numero_control = Auth::user()->numero_control;

            $e1->r_1 = $r1;
            $e1->r_2 = $r2;
            $e1->r_3 = $r3;
            $e1->r_4 = $r4;
            $e1->r_5 = $r5;
            $e1->r_6 = $r6;
            $e1->r_7 = $r7;
            $e1->r_8 = $r8;
            $e1->r_9 = $r9;
            $e1->r_10 = $r10;
            $e1->r_11 = $r11;
            $e1->r_12 = $r12;
            $e1->r_13 = $r13;
            $e1->r_14 = $r14;
            $e1->r_15 = $r15;
            $e1->r_16 = $r16;
            $e1->r_17 = $r17;
            $e1->r_18 = $r18;

            $e1->ve = $ve;
            $e1->vi = $vi;
            $e1->c = $c;
            $e1->avance_1 = 1;

            $e1->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 7.2;
            $u->save();

        }


        return redirect('/mem_1');
    }

    public function store_mem_2(Request $request){

        $c1=array();
        $c1_i=1;
        $c1_k=0;

        while($c1_i<=count($request->c1)){
            $c1[$c1_i]=$request->c1[$c1_k];
            $c1_i++;
            $c1_k++;
        }
        $c1_output = json_encode($c1);

        $e2 = Memoria::where('numero_control',14021073)->first();
        $e2->c1 = $c1_output;
        $e2->con1 = $request->con1;
        $e2->avance_2 = 1;
        $e2->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 7.3;
        $u->save();


        return redirect('/mem_2');
    }

    public function store_mem_3(Request $request){

        $c1=array();
        $c1_i=1;
        $c1_k=0;

        while($c1_i<=count($request->c2)){
            $c1[$c1_i]=$request->c2[$c1_k];
            $c1_i++;
            $c1_k++;
        }
        $c2_output = json_encode($c1);

        $e3 = Memoria::where('numero_control',14021073)->first();
        $e3->c2 = $c2_output;
        $e3->con2 = $request->con2;
        $e3->avance_3 = 1;
        $e3->save();


        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 7.4;
        $u->save();

        return redirect('/mem_3');
    }

    public function store_mem_4(Request $request){

        $e4 = Memoria::where('numero_control',14021073)->first();
        $e4->esc = $request->escrito;
        $e4->avance_4 = 1;
        $e4->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 8.1;

        $u->save();

        return redirect('/mem_4');
    }

    public function edit_mem_1(Request $request){

        $e1 = Memoria::where('numero_control', Auth::user()->numero_control)->first();

        $r1 = (integer)$request->r1_e;
        $r2 = (integer)$request->r2_e;
        $r3 = (integer)$request->r3_e;
        $r4 = (integer)$request->r4_e;
        $r5 = (integer)$request->r5_e;
        $r6 = (integer)$request->r6_e;
        $r7 = (integer)$request->r7_e;
        $r8 = (integer)$request->r8_e;
        $r9 = (integer)$request->r9_e;
        $r10 = (integer)$request->r10_e;
        $r11 = (integer)$request->r11_e;
        $r12 = (integer)$request->r12_e;
        $r13 = (integer)$request->r13_e;
        $r14 = (integer)$request->r14_e;
        $r15 = (integer)$request->r15_e;
        $r16 = (integer)$request->r16_e;
        $r17 = (integer)$request->r17_e;
        $r18 = (integer)$request->r18_e;

        $e1->r_1 = $r1;
        $e1->r_2 = $r2;
        $e1->r_3 = $r3;
        $e1->r_4 = $r4;
        $e1->r_5 = $r5;
        $e1->r_6 = $r6;
        $e1->r_7 = $r7;
        $e1->r_8 = $r8;
        $e1->r_9 = $r9;
        $e1->r_10 = $r10;
        $e1->r_11 = $r11;
        $e1->r_12 = $r12;
        $e1->r_13 = $r13;
        $e1->r_14 = $r14;
        $e1->r_15 = $r15;
        $e1->r_16 = $r16;
        $e1->r_17 = $r17;
        $e1->r_18 = $r18;

        $e1->save();

        return redirect()->back();
    }

    public function edit_mem_2(Request $request){

        $e = Memoria::where('numero_control', Auth::user()->numero_control)->first();

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->c1_e)){
            $f1[$i]=$request->c1_e[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e->c1 = $f1_output;
        $e->con1 = $request->con1_e;
        $e->save();

        return redirect()->back();
    }

    public function edit_mem_3(Request $request){

        $e = Memoria::where('numero_control', Auth::user()->numero_control)->first();

        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->c2_e)){
            $f1[$i]=$request->c2_e[$k];
            $i++;
            $k++;
        }

        $f1_output = json_encode($f1);

        $e->c2 = $f1_output;
        $e->con2 = $request->con2_e;
        $e->save();

        return redirect()->back();
    }

    public function edit_mem_4(Request $request){

        $e = Memoria::where('numero_control', Auth::user()->numero_control)->first();


        $e->esc = $request->escrito_e;
        $e->save();

        return redirect()->back();
    }


    }
