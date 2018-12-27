<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapa;
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
        return view('activities.9_Mapa_mental_y_conceptual.ejercicios.ejercicio_1');
    }

    public function store(Request $request){

        $input = $request->all();

        if($file = $request->file('file')){

            $name = $file->getClientOriginalName();
            $file->move('mapas', $name);

        }


//        $file = $request->file('file');
//        $name = time().$file->getClientOriginalName();
//
//        $file->move('mapas', $name);
//
//       //$photo = Mapa::create(['file'=>$name]);
//        $photo = create(['file'=>$name]);

    }
}
