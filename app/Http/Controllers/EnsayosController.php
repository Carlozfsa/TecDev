<?php

namespace App\Http\Controllers;

use App\Ensayo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsayosController extends Controller
{
    //

    public function create_ens_l_1(){
        return view('activities.11_Resumen_y_ensayo.lecturas.lectura_1');
    }

    public function create_ens_l_2(){
        return view('activities.11_Resumen_y_ensayo.lecturas.lectura_2');
    }

    public function create_ens_l_3(){
        return view('activities.11_Resumen_y_ensayo.lecturas.lectura_3');
    }





    public function create_ens_1(){

        if(Auth::User()->avance >=11.1) {

            $edit = NULL;

            $int = Ensayo::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Ensayo::where('numero_control', 14021073)->exists() && $int->ens != NULL) {
                $edit = 1;

                $f_decode1 = $int->ens;

            } else {
                $edit = 0;
            }

            return view('activities.11_Resumen_y_ensayo.ejercicios.ejercicio_1', compact('edit', 'f_decode1'));
        }else{
            return redirect()->back();
        }
        }

    public function store_ens_1(Request $request){

        if(Ensayo::where('numero_control', Auth::user()->numero_control)->exists()){

            $e = Ensayo::where('numero_control', Auth::user()->numero_control)->first();

            $e->ens = $request->ens;
            $e->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 12.1;
            $u->save();

        }else{

            $e = new Ensayo();

            $e->numero_control = Auth::user()->numero_control;
            $e->ens = $request->ens;
            $e->save();

            $u = User::where('numero_control', Auth::user()->numero_control)->first();
            $u->avance = 12.1;
            $u->save();

        }


        return redirect()->back();

    }

    public function edit_ens_1(Request $request){

        $e = Ensayo::where('numero_control', Auth::user()->numero_control)->first();

        $e->ens = $request->ens_e;
        $e->save();

        return redirect()->back();

    }


    }
