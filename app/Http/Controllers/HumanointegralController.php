<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Humanointegral;
use Illuminate\Support\Facades\Auth;

class HumanointegralController extends Controller
{

    public function create_hum_int_1(){
        if(Auth::User()->avance >= 3.10){
            return view('activities.3_el_ser_humano_integral.ejercicios.ejercicio_1');
        }else{
            return redirect()->back();
        }
    }



    public function create_hum_l_1(){
        return view('activities.3_el_ser_humano_integral.lecturas.lectura_1');
    }


    public function create_hum_l_2(){
        return view('activities.3_el_ser_humano_integral.lecturas.lectura_2');
    }


    public function store_hum_int_ej_1(Request $request){

        $hi = new Humanointegral();

        $hi->numero_control = 14021073;
        $hi->pres_per = $request->pres_per;
        $hi->salud = $request->salud;
        $hi->simpatia = $request->simpatia;

        $hi->retro = '';
        $hi->cal_final = 0;

        $hi->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 4.1;
        $u->save();

        return 'oks';

    }
}
