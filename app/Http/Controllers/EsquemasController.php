<?php

namespace App\Http\Controllers;

use App\Esquema;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EsquemasController extends Controller
{
    //

    public function create_esqs_l_1(){
        return view('activities.10_Esquema_y_cuadro_comparativo.lecturas.lectura_1');
    }

    public function create_esqs_l_2(){
        return view('activities.10_Esquema_y_cuadro_comparativo.lecturas.lectura_2');
    }



    public function create_esqs_1(){
        if(Auth::User()->avance >=10.1) {

            $edit = NULL;

            $ext = '';
            $int = Esquema::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Esquema::where('numero_control', Auth::user()->numero_control)->exists() && $int->ruta_1!=NULL) {

                $edit = 1;

                $f_decode1 = $int->ruta_1;

            } else {
                $edit = 0;

            }

            return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_1', compact('edit', 'ext', 'f_decode1'));
        }else{
            return redirect()->back();
        }
        }

    public function create_esqs_2(){
        if(Auth::User()->avance >=10.2) {


            $edit = NULL;

            $ext = '';
            $int = Esquema::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if ($int->avance_2 > 0) {

                $edit = 1;

                $f_decode1 = $int->ruta_2;

            } else {
                $edit = 0;

            }

            return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_2', compact('edit', 'ext', 'f_decode1'));
        }else{
            return redirect()->back();
        }
        }



    public function store_esqs_1(Request $request){

        $input = $request->all();

        if(Esquema::where('numero_control', Auth::user()->numero_control)->exists()){

            if($file = $request->file('file')) {

                $name  = '/esquemas/'.Auth::user()->numero_control.'_'.$file->getClientOriginalName();

                if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {
                    $file->move('esquemas', $name);

                    $input['ruta_1'] = $name;

                    $g = Esquema::where('numero_control', Auth::user()->numero_control)->first();
                    $g->numero_control = Auth::user()->numero_control;
                    $g->ruta_1 = $name;
                    $g->avance_1 = 1;
                    $g->ruta_2 = '';

                    $g->save();

                    $u = User::where('numero_control', Auth::user()->numero_control)->first();
                    $u->avance = 10.2;
                    $u->save();

                    return redirect('/esq_1');

                }else{
                    $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                    $edit = 0;
                    $f_decode1 = "";

                    return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_1', compact('edit','ext','f_decode1'));
                }

            }

        }else{

            if($file = $request->file('file')) {

                $name  = '/esquemas/'.Auth::user()->numero_control.'_'.$file->getClientOriginalName();

                if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {
                    $file->move('esquemas', $name);

                    $input['ruta_1'] = $name;

                    $g = new Esquema();
                    $g->numero_control = Auth::user()->numero_control;
                    $g->ruta_1 = $name;
                    $g->avance_1 = 1;
                    $g->ruta_2 = '';

                    $g->save();

                    $u = User::where('numero_control', Auth::user()->numero_control)->first();
                    $u->avance = 10.2;
                    $u->save();

                    return redirect('/esq_1');

                }else{
                    $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                    $edit = 0;
                    $f_decode1 = "";

                    return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_1', compact('edit','ext','f_decode1'));
                }

            }
        }


        return redirect('/esq_1');

    }

    public function store_esqs_2(Request $request){


        $input = $request->all();

        if($file = $request->file('file')) {

            $name  = '/esquemas/'.Auth::user()->numero_control.'_2_'.$file->getClientOriginalName();

            if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {
                $file->move('esquemas', $name);

                $input['ruta_2'] = $name;

                $g = Esquema::where('numero_control', Auth::user()->numero_control)->first();

                $g->ruta_2 = $name;
                $g->avance_2 = 1;

                $g->save();

                $u = User::where('numero_control', Auth::user()->numero_control)->first();
                $u->avance = 11.1;
                $u->save();

                return redirect('/esq_2');

            }else{
                $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                $edit = 0;
                $f_decode1 = "";

                return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_2', compact('edit','ext','f_decode1'));
            }

        }

        return redirect('/esq_2');
    }



    public function edit_esqs_1(Request $request){

        $input = $request->all();

        if($file = $request->file('file_e')) {

            $name  = '/esquemas/'.Auth::user()->numero_control.'_'.$file->getClientOriginalName();

            if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {

                $g = Esquema::where('numero_control', Auth::user()->numero_control)->first();

                unlink(public_path().$g->ruta_1);
                $file->move('esquemas', $name);

                $input['ruta_1'] = $name;

                $g->ruta_1 = $name;
                $g->save();

                return redirect('/esq_1');

            }else{
                $g = Esquema::where('numero_control', Auth::user()->numero_control)->first();

                $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                $edit = 1;
                $f_decode1 =  $g->ruta_1;

                return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_1', compact('edit','ext','f_decode1'));
            }

        }

        return redirect('/esq_1');

    }

    public function edit_esqs_2(Request $request){

        $input = $request->all();

        if($file = $request->file('file_e')) {

            $name  = '/esquemas/'.Auth::user()->numero_control.'_2_'.$file->getClientOriginalName();

            if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {

                $g = Esquema::where('numero_control', Auth::user()->numero_control)->first();

                unlink(public_path().$g->ruta_2);
                $file->move('esquemas', $name);

                $input['ruta_2'] = $name;

                $g->ruta_2 = $name;
                $g->save();

                return redirect('/esq_2');

            }else{
                $g = Esquema::where('numero_control', Auth::user()->numero_control)->first();

                $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                $edit = 1;
                $f_decode1 =  $g->ruta_2;

                return view('activities.10_Esquema_y_cuadro_comparativo.ejercicios.ejercicio_2', compact('edit','ext','f_decode1'));
            }

        }

        return redirect('/esq_2');

    }

}
