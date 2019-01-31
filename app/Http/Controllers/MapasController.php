<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Mapa;
use Illuminate\Support\Facades\Auth;

class MapasController extends Controller
{
    //

    public function create_mapas_l_1(){
        return view('activities.9_Mapa_mental_y_conceptual.lecturas.lectura_1');
    }

    public function create_mapas_l_2(){
        return view('activities.9_Mapa_mental_y_conceptual.lecturas.lectura_2');
    }

    public function create_mapas_l_3(){
        return view('activities.9_Mapa_mental_y_conceptual.lecturas.lectura_3');
    }

    public function create_mapas_l_4(){
        return view('activities.9_Mapa_mental_y_conceptual.lecturas.lectura_4');
    }

    public function create_mapas_l_5(){
        return view('activities.9_Mapa_mental_y_conceptual.lecturas.lectura_5');
    }

    public function create_mapas_l_6(){
        return view('activities.9_Mapa_mental_y_conceptual.lecturas.lectura_6');
    }



    public function create_mapas_1(){

        if(Auth::User()->avance >=9.1) {


            $edit = NULL;

            $ext = '';
            $int = Mapa::where('numero_control', Auth::user()->numero_control)->first();
            $f_decode = NULL;

            if (Mapa::where('numero_control', Auth::user()->numero_control)->exists() && $int->ruta!= NULL) {

                $edit = 1;

                $f_decode1 = $int->ruta;

            } else {
                $edit = 0;
            }
            return view('activities.9_Mapa_mental_y_conceptual.ejercicios.ejercicio_1', compact('edit', 'ext', 'f_decode1'));
        }else{
            return redirect()->back();
        }
        }

    public function store(Request $request){


        $input = $request->all();

        if(Mapa::where('numero_control', Auth::user()->numero_control)->exists()){

            if($file = $request->file('file')) {

                $name  = '/mapas/'.Auth::user()->numero_control.'_'.$file->getClientOriginalName();

                if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {
                    $file->move('mapas', $name);

                    $input['ruta'] = $name;

                    $g = Mapa::where('numero_control', Auth::user()->numero_control)->first();
                    $g->numero_control = Auth::user()->numero_control;
                    $g->ruta = $name;
                    $g->avance_1 = 1;
                    $g->save();

                    $u = User::where('numero_control', Auth::user()->numero_control)->first();
                    $u->avance = 10.1;
                    $u->save();

                    return redirect('/mapas_1');

                }else{
                    $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                    $edit = 0;
                    $f_decode1 = "";

                    return view('activities.9_Mapa_mental_y_conceptual.ejercicios.ejercicio_1', compact('edit','ext','f_decode1'));
                }

            }

        }else{

            if($file = $request->file('file')) {

                $name  = '/mapas/'.Auth::user()->numero_control.'_'.$file->getClientOriginalName();

                if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png') {
                    $file->move('mapas', $name);

                    $input['ruta'] = $name;

                    $g = new Mapa();
                    $g->numero_control = Auth::user()->numero_control;
                    $g->ruta = $name;
                    $g->avance_1 = 1;
                    $g->save();

                    $u = User::where('numero_control', Auth::user()->numero_control)->first();
                    $u->avance = 10.1;
                    $u->save();

                    return redirect('/mapas_1');

                }else{
                    $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                    $edit = 0;
                    $f_decode1 = "";

                    return view('activities.9_Mapa_mental_y_conceptual.ejercicios.ejercicio_1', compact('edit','ext','f_decode1'));
                }

            }
        }



        return redirect('/mapas_1');
    }

    public function edit(Request $request){

        $input = $request->all();

        if($file = $request->file('file_e')) {

            $name  = '/mapas/'.Auth::user()->numero_control.'_'.$file->getClientOriginalName();

            if(substr($file->getClientOriginalName(), -3) == 'jpg' || substr($file->getClientOriginalName(), -3) == 'png' ) {

                $g = Mapa::where('numero_control', Auth::user()->numero_control)->first();

                unlink(public_path().$g->ruta);
                $file->move('mapas', $name);

                $input['ruta'] = $name;

                $g->ruta = $name;
                $g->save();

                return redirect('/mapas_1');

            }else{
                $g = Mapa::where('numero_control', Auth::user()->numero_control)->first();

                $ext = "Solo se aceptan archivos tipo: JPG y PNG";
                $edit = 1;
                $f_decode1 =  $g->ruta;

                return view('activities.9_Mapa_mental_y_conceptual.ejercicios.ejercicio_1', compact('edit','ext','f_decode1'));
            }

        }

        return redirect('/mapas_1');

    }
}
