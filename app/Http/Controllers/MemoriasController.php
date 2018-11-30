<?php

namespace App\Http\Controllers;

use App\Memoria;
use Illuminate\Http\Request;

class MemoriasController extends Controller
{

    public function create_mem_1(){
        return view('activities.7_Memoria.ejercicios.ejercicio_1');
    }

    public function create_mem_2(){
        return view('activities.7_Memoria.ejercicios.ejercicio_2');
    }

    public function create_mem_3(){
        return view('activities.7_Memoria.ejercicios.ejercicio_3');
    }

    public function create_mem_4(){
        return view('activities.7_Memoria.ejercicios.ejercicio_4');
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

        $e1 = new Memoria();
        $e1->numero_control = 14021073;
        $e1->ve = $ve;
        $e1->vi = $vi;
        $e1->c = $c;

        $e1->c1 = '';
        $e1->con1 = '';

        $e1->c2 = '';
        $e1->con2 = '';

        $e1->esc = '';

        $e1->retro_1 = '';
        $e1->cal_1 = 0;

        $e1->retro_2 = '';
        $e1->cal_2 = 0;

        $e1->retro_3 = '';
        $e1->cal_3 = 0;

        $e1->retro_4 = '';
        $e1->cal_4 = 0;

        $e1->cal_final = 0;

        $e1->save();

        return 'oks';
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
        $e2->save();

        return $c1_output;
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
        $e3->save();

        return $c2_output;
        }

    public function store_mem_4(Request $request){

        $e4 = Memoria::where('numero_control',14021073)->first();
        $e4->esc = $request->escrito;
        $e4->save();

        return 'oks';
    }




    }
