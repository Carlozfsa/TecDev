<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapa;
class MapasController extends Controller
{
    //


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
