<?php

namespace App\Http\Controllers;

use App\Linea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function MongoDB\BSON\toJSON;
use SebastianBergmann\Diff\Line;

class LineasController extends Controller
{
    //

    public function create_lineas(){

        $edit = NULL;

        $f_decode1 = NULL;
        $f_decode1e = NULL;

        $f_decode2 = NULL;
        $f_decode3 = NULL;
        $f_decode3e = NULL;

        $f_data = NULL;


        $int = Linea::where('numero_control', Auth::user()->numero_control)->first();

        if (Linea::where('numero_control', Auth::user()->numero_control)->exists() && str_replace('"','', (string) $int->edad) != NULL && json_decode($int->edad) != NULL && json_decode($int->evento) != NULL && str_replace('"','', (string) $int->nivel) != NULL && json_decode($int->nivel) != NULL) {

            $edit = 1;

            $f_decode1 = str_replace('"','', (string) $int->edad);
            $f_decode1e = json_decode($int->edad);

            $f_decode2 = json_decode($int->evento);
            $f_decode3 = str_replace('"','', (string) $int->nivel);
            $f_decode3e = json_decode($int->nivel);

            $f_data = json_decode($int->data);

        } else {
            $exist = 0;

        }

        return  view('activities.0_linea_de_tiempo.grafica', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode1e', 'f_decode3e','f_data'));
    }

    public function store(Request $request){

        if(Linea::where('numero_control', Auth::user()->numero_control)->exists()){

            $s = Linea::where('numero_control', Auth::user()->numero_control)->first();
            $s->numero_control = Auth::user()->numero_control;
            $s->edad = json_encode($request->edad);
            $s->evento = json_encode($request->evento);
            $s->nivel = json_encode($request->nivel);

            $s->avance_1 = 1;

//            $f1=array();
//            $i=1;
//            $k=0;
//
//            while($i<=count($request->nivel)){
//                $f1[$i]=$request->nivel[$k];
//                $i++;
//                $k++;
//            }
//
//
//            $f1_output = json_encode($f1);

            //edad
            $f1 = array();
            $i = 1;
            $k = 0;

            while ($i <= count($request->edad)) {
                $f1[$i] = $request->edad[$k];
                $i++;
                $k++;
            }
            $f1_output = json_encode($f1);


            //evento
            $f2 = array();
            $i2 = 1;
            $k2 = 0;

            while ($i2 <= count($request->evento)) {
                $f2[$i2] = $request->evento[$k2];
                $i2++;
                $k2++;
            }
            $f2_output = json_encode($f2);

            //nivel
            $f3 = array();
            $i3 = 1;
            $k3 = 0;

            while ($i3 <= count($request->nivel)) {
                $f3[$i3] = $request->nivel[$k3];
                $i3++;
                $k3++;
            }
            $f3_output = json_encode($f3);

            //tod
            $f4_output = [
                "edad" => [
                    $f1
                ],
                "evento" => [
                    $f2
                ],
                "nivel" => [
                    $f3
                ]
            ];

            $s->data = $f4_output;

            $s->save();



        }else{

            $s = new Linea();
            $s->numero_control = Auth::user()->numero_control;
            $s->edad = json_encode($request->edad);
            $s->evento = json_encode($request->evento);
            $s->nivel = json_encode($request->nivel);

            $s->avance_1 = 1;


            //edad
            $f1 = array();
            $i = 1;
            $k = 0;

            while ($i <= count($request->edad)) {
                $f1[$i] = $request->edad[$k];
                $i++;
                $k++;
            }
            $f1_output = json_encode($f1);


            //evento
            $f2 = array();
            $i2 = 1;
            $k2 = 0;

            while ($i2 <= count($request->evento)) {
                $f2[$i2] = $request->evento[$k2];
                $i2++;
                $k2++;
            }
            $f2_output = json_encode($f2);

            //nivel
            $f3 = array();
            $i3 = 1;
            $k3 = 0;

            while ($i3 <= count($request->nivel)) {
                $f3[$i3] = $request->nivel[$k3];
                $i3++;
                $k3++;
            }
            $f3_output = json_encode($f3);

            //tod
            $f4_output = [
                "edad" => [
                    $f1
                ],
                "evento" => [
                    $f2
                ],
                "nivel" => [
                    $f3
                ]
            ];


            $s->data = $f4_output;
            $s->save();

//        for ($row = 0; $row < 3; $row++) {
//
//        }
//            echo "<p><b>Row number $row</b></p>";
//            echo "<ul>";
//            for ($col = 0; $col < sizeof($f4); $col++) {
//                echo "<li>".$f4_output[$row][$col]."</li>";
//            }
        }

        return redirect()->back();

    }
}
