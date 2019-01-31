<?php

namespace App\Http\Controllers;

use App\Amenaza;
use App\Debilidad;
use App\Fortaleza;
use App\Oportunidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorFodaController extends Controller
{
    //
    public function create_f1(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;

        $f = Fortaleza::where('numero_control', 14021073)->first();

        if (Fortaleza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->fortalezas_1);
            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }

        }

        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_1', compact('edit','f_decode','cal','retro'));
    }

    public function create_f2(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Fortaleza::where('numero_control', 14021073)->first();

        if (Fortaleza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->fortalezas_2);
            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_2', compact('edit','f_decode','retro','cal'));
    }

    public function create_f3(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Fortaleza::where('numero_control', 14021073)->first();

        if (Fortaleza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->fortalezas_3);
            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_3', compact('edit','f_decode','retro','cal'));
    }

    public function create_f4(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Fortaleza::where('numero_control', 14021073)->first();

        if (Fortaleza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->fortalezas_4);
            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }
        }


        return view('tutor.activities.1_foda_cuestionarios.paso_1.Tutor_Analisis_Foda_Paso1_4', compact('edit','f_decode','retro','cal'));
    }


    public function create_d1(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Debilidad::where('numero_control', 14021073)->first();

        if (Debilidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->debilidads_1);
            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_1', compact('edit','f_decode','retro','cal'));
    }

    public function create_d2(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Debilidad::where('numero_control', 14021073)->first();

        if (Debilidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->debilidads_2);
            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_2', compact('edit','f_decode','retro','cal'));
    }

    public function create_d3(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Debilidad::where('numero_control', 14021073)->first();

        if (Debilidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->debilidads_3);
            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_3', compact('edit','f_decode','retro','cal'));
    }

    public function create_d4(){

        $edit = 0;
        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Debilidad::where('numero_control', 14021073)->first();

        if (Debilidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->debilidads_4);
            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_2.Tutor_Analisis_Foda_Paso2_4', compact('edit','f_decode','retro','cal'));
    }

    public function create_a1(){


        $edit = 0;
        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Amenaza::where('numero_control', 14021073)->first();

        if (Amenaza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->amenazas_1);
            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_1', compact('edit','f_decode','retro','cal'));
    }

    public function create_a2(){

        $edit = 0;
        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Amenaza::where('numero_control', 14021073)->first();

        if (Amenaza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->amenazas_2);
            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_2', compact('edit','f_decode','retro','cal'));
    }

    public function create_a3(){

        $edit = 0;
        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Amenaza::where('numero_control', 14021073)->first();

        if (Amenaza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->amenazas_3);
            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_3', compact('edit','f_decode','retro','cal'));
    }

    public function create_a4(){

        $edit = 0;
        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Amenaza::where('numero_control', 14021073)->first();

        if (Amenaza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->amenazas_4);
            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_4', compact('edit','f_decode','retro','cal'));
    }

    public function create_a5(){

        $edit = 0;
        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Amenaza::where('numero_control', 14021073)->first();

        if (Amenaza::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->amenazas_5);
            if ($f->retro_5 == NULL && $f->cal_5 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_5;
                $cal = $f->cal_5;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_3.Tutor_Analisis_Foda_Paso3_5', compact('edit','f_decode','retro','cal'));
    }

    public function create_o1(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Oportunidad::where('numero_control', 14021073)->first();

        if (Oportunidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->oportunidads_1);
            if ($f->retro_1 == NULL && $f->cal_1 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_1;
                $cal = $f->cal_1;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_1', compact('edit','f_decode','retro','cal'));
    }

    public function create_o2(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Oportunidad::where('numero_control', 14021073)->first();

        if (Oportunidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->oportunidads_2);
            if ($f->retro_2 == NULL && $f->cal_2 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_2;
                $cal = $f->cal_2;
            }
        }

        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_2', compact('edit','f_decode','retro','cal'));
    }

    public function create_o3(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Oportunidad::where('numero_control', 14021073)->first();

        if (Oportunidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->oportunidads_3);
            if ($f->retro_3 == NULL && $f->cal_3 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_3;
                $cal = $f->cal_3;
            }
        }
        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_3', compact('edit','f_decode','retro','cal'));
    }

    public function create_o4(){

        $edit = 0;

        $f_decode = NULL;

        $retro = NULL;
        $cal =  NULL;
        $f = Oportunidad::where('numero_control', 14021073)->first();

        if (Oportunidad::where('numero_control', 14021073)->exists()) {

            $f_decode = json_decode($f->oportunidads_4);
            if ($f->retro_4 == NULL && $f->cal_4 == 0) {
                $edit = 0;
            }else {
                $edit = 1;
                $retro = $f->retro_4;
                $cal = $f->cal_4;
            }
        }
        return view('tutor.activities.1_foda_cuestionarios.paso_4.Tutor_Analisis_Foda_Paso4_4', compact('edit','f_decode','retro','cal'));
    }




    public function store_f1(Request $request){

        if(Fortaleza::where('numero_control', 14021073)->exists()){

            $tf = Fortaleza::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Fortaleza();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_f2(Request $request){


        if(Fortaleza::where('numero_control', 14021073)->exists()){

            $tf = Fortaleza::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Fortaleza();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_f3(Request $request){

        if(Fortaleza::where('numero_control', 14021073)->exists()){

            $tf = Fortaleza::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Fortaleza();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();
        }


        return redirect()->back();
    }

    public function store_f4(Request $request){

        if(Fortaleza::where('numero_control', 14021073)->exists()){

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

        }else{
            $tf = new Fortaleza();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_d1(Request $request){

        if(Debilidad::where('numero_control', 14021073)->exists()){

            $tf = Debilidad::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Debilidad();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_d2(Request $request){

        if(Debilidad::where('numero_control', 14021073)->exists()){

            $tf = Debilidad::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Debilidad();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();
        }




        return redirect()->back();
    }

    public function store_d3(Request $request){

        if(Debilidad::where('numero_control', 14021073)->exists()){

            $tf = Debilidad::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Debilidad();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;
            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_d4(Request $request){

        if(Debilidad::where('numero_control', 14021073)->exists()){

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

        }else{
            $tf = new Debilidad();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();
        }


        return redirect()->back();
    }

    public function store_a1(Request $request){


        if(Amenaza::where('numero_control', 14021073)->exists()){

            $tf = Amenaza::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Amenaza();

            $tf->numero_control = 14021073;
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_a2(Request $request){

        if(Amenaza::where('numero_control', 14021073)->exists()){

            $tf = Amenaza::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;

            $t = ($c1+$c2+$c3+$c4+$c5)/5;

            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Amenaza();

            $tf->numero_control = 14021073;
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;

            $t = ($c1+$c2+$c3+$c4+$c5)/5;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_a3(Request $request){

        if(Amenaza::where('numero_control', 14021073)->exists()){

            $tf = Amenaza::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;

            $t = ($c1+$c2+$c3+$c4+$c5)/5;

            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Amenaza();

            $tf->numero_control = 14021073;
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;
            $c5 = $tf->cal_5;

            $t = ($c1+$c2+$c3+$c4+$c5)/5;

            $tf->cal_general = $t;

            $tf->save();
        }


        return redirect()->back();
    }

    public function store_a4(Request $request){

        if(Amenaza::where('numero_control', 14021073)->exists()){

            $tf = Amenaza::where('numero_control', 14021073)->first();
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;
            $c5 = $tf->cal_5;

            $t = ($c1+$c2+$c3+$c4+$c5)/5;
            $tf->cal_general = $t;

            $tf->save();

        }else{
            $tf = new Amenaza();

            $tf->numero_control = 14021073;
            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;
            $c5 = $tf->cal_5;

            $t = ($c1+$c2+$c3+$c4+$c5)/5;
            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_a5(Request $request){


        if(Amenaza::where('numero_control', 14021073)->exists()){

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

        }else{
            $tf = new Amenaza();
            $tf->numero_control = 14021073;

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
        }


        return redirect()->back();
    }

    public function store_o1(Request $request){

        if(Oportunidad::where('numero_control', 14021073)->exists()){

            $tf = Oportunidad::where('numero_control', 14021073)->first();
            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();

        }else{

            $tf = Oportunidad::where('numero_control', 14021073)->first();

            $tf = new Oportunidad();
            $tf->numero_control = 14021073;

            $tf->retro_1 = $request->retro1;
            $tf->cal_1 = $request->cal1;

            $c1 = $request->cal1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();

        }


        return redirect()->back();
    }

    public function store_o2(Request $request){

        if(Oportunidad::where('numero_control', 14021073)->exists()){

            $tf = Oportunidad::where('numero_control', 14021073)->first();
            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();

        }else{

            $tf = Oportunidad::where('numero_control', 14021073)->first();

            $tf = new Oportunidad();
            $tf->numero_control = 14021073;

            $tf->retro_2 = $request->retro2;
            $tf->cal_2 = $request->cal2;

            $c1 = $tf->cal_1;
            $c2 = $request->cal2;
            $c3 = $tf->cal_3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();
        }

        return redirect()->back();
    }

    public function store_o3(Request $request){

        if(Oportunidad::where('numero_control', 14021073)->exists()){

            $tf = Oportunidad::where('numero_control', 14021073)->first();
            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();


        }else{
            $tf = Oportunidad::where('numero_control', 14021073)->first();

            $tf = new Oportunidad();
            $tf->numero_control = 14021073;

            $tf->retro_3 = $request->retro3;
            $tf->cal_3 = $request->cal3;

            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $request->cal3;
            $c4 = $tf->cal_4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();

        }

        return redirect()->back();
    }

    public function store_o4(Request $request){

        if(Oportunidad::where('numero_control', 14021073)->exists()){

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

        }else{

            $tf = Oportunidad::where('numero_control', 14021073)->first();

            $tf = new Oportunidad();
            $tf->numero_control = 14021073;

            $tf->retro_4 = $request->retro4;
            $tf->cal_4 = $request->cal4;


            $c1 = $tf->cal_1;
            $c2 = $tf->cal_2;
            $c3 = $tf->cal_3;
            $c4 = $request->cal4;

            $t = ($c1+$c2+$c3+$c4)/4;

            $tf->cal_general = $t;

            $tf->save();
        }
        return redirect()->back();
    }

    /////****EDICIÓN*****/////

    public function edit_f1(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro_e;
        $tf->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;


        $tf->save();

        return redirect()->back();
    }

    public function edit_f2(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro_e;
        $tf->cal_2 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $request->cal_e;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_f3(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro_e;
        $tf->cal_3 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $request->cal_e;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_f4(Request $request){

        $tf = Fortaleza::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro_e;
        $tf->cal_4 = $request->cal_e;


        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal_e;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;


        $tf->save();

        return redirect()->back();
    }

    public function edit_d1(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro_e;
        $tf->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_d2(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro_e;
        $tf->cal_2 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $request->cal_e;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_d3(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro_e;
        $tf->cal_3 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $request->cal_e;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_d4(Request $request){

        $tf = Debilidad::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro_e;
        $tf->cal_4 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal_e;

        $t = ($c1+$c2+$c3+$c4)/4;
        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_a1(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro_e;
        $tf->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_a2(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro_e;
        $tf->cal_2 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $request->cal_e;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_a3(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro_e;
        $tf->cal_3 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $request->cal_e;
        $c4 = $tf->cal_4;
        $c5 = $tf->cal_5;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }


    public function edit_a4(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro_e;
        $tf->cal_4 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal_e;
        $c5 = $tf->cal_5;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_a5(Request $request){

        $tf = Amenaza::where('numero_control', 14021073)->first();
        $tf->retro_5 = $request->retro_e;
        $tf->cal_5 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;
        $c5 = $request->cal_e;

        $t = ($c1+$c2+$c3+$c4+$c5)/5;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_o1(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_1 = $request->retro_e;
        $tf->cal_1 = $request->cal_e;

        $c1 = $request->cal_e;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_o2(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_2 = $request->retro_e;
        $tf->cal_2 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $request->cal_e;
        $c3 = $tf->cal_3;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_o3(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_3 = $request->retro_e;
        $tf->cal_3 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $request->cal_e;
        $c4 = $tf->cal_4;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }

    public function edit_o4(Request $request){

        $tf = Oportunidad::where('numero_control', 14021073)->first();
        $tf->retro_4 = $request->retro_e;
        $tf->cal_4 = $request->cal_e;

        $c1 = $tf->cal_1;
        $c2 = $tf->cal_2;
        $c3 = $tf->cal_3;
        $c4 = $request->cal_e;

        $t = ($c1+$c2+$c3+$c4)/4;

        $tf->cal_general = $t;

        $tf->save();

        return redirect()->back();
    }
}
