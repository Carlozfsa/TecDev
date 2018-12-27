<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Alumno;
use App\Carrera;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    //


    public function create_alumnos(){

        $carreras = Carrera::pluck('nombre', 'id')->all();
        return view('activities.registro_alumno.reg_alumno', compact('carreras'));
    }

    public function store_alumnos(Request $request){

        $info = new Alumno();

        $info->numero_control = 14021073;
        $info->nombres = $request->nombres;
        $info->apellidop = $request->apellidop;
        $info->apellidom = $request->apellidom;
        $info->carrera = $request->carrera;
        $info->sem = $request->sem;
        $info->telcasa = $request->telcasa;
        $info->cel = $request->cel;
        $info->dir = $request->dir;
        $info->nss = $request->nss;
        $info->ts = $request->ts;
        $info->ec = $request->ec;
        $info->trabajo = $request->trabajo;
        $info->horas = $request->horas;
        $info->reg_completo = 1;

        $info->save();

    }

    public function create_acts(){
        return view('activities.index_actividades_alumno');
    }


    public function index(){

        $activities = Activity::all();

        return view('activities.ActAdminPanel', compact('activities'));
}

public function destroy(Request $request, $id){

        if($request->ajax()){

            $activity = Activity::find($id);
            $activity->delete();
            $act_total = Activity::all()->count();

            return response()->json([
                'total'=>$act_total,
                'mensaje'=>$activity->name.' eliminada'
            ]);
        }

}


}
