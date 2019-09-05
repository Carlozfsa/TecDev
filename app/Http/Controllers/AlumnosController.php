<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Carrera;
use App\Grupo;
use App\Letra;
use App\Turno;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumnosController extends Controller
{
    //


    public function create_panel_alumno(){
        return view('activities.registro_alumno.alumno_panel');
    }

    public function create_alumnos(){

        $edit = NULL;

        $carreras = Carrera::pluck('nombre', 'id')->all();

        $letras = Letra::pluck('letra', 'id')->all();

        $turnos = Turno::pluck('turno', 'id')->all();


        $a = Alumno::where('numero_control', Auth::user()->numero_control)->first();

        if (Alumno::where('numero_control', Auth::user()->numero_control)->exists()) {
            $edit = 1;

            $f_decode1 = $a->numero_control;
            $f_decode2 = $a->nombres;
            $f_decode3 = $a->apellidop;
            $f_decode4 = $a->apellidom;
            $f_decode5 = $a->carr;
            $f_decode6 = $a->tut_nivel;
            $f_decode7 = $a->grupo_l;
            $f_decode8 = $a->turn;
            $f_decode9 = $a->sem;
            $f_decode10 = $a->telcasa;
            $f_decode11 = $a->cel;
            $f_decode12 = $a->dir;
            $f_decode13 = $a->nss;
            $f_decode14 = $a->ts;
            $f_decode15 = $a->ec;
            $f_decode16 = $a->trabajo;
            $f_decode17 = $a->horas;

        } else {
            $edit = 0;
        }
        return view('activities.registro_alumno.reg_alumno', compact('letras','turnos','carreras', 'edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13', 'f_decode14', 'f_decode15', 'f_decode16', 'f_decode17'));
    }

    public function create_man_alumnos(){

        $a = User::where('role_id', 1)->get();

        return  view('admin.manejo_alumnos', compact('a'));
    }


        public function create_edit_alumnos($numero_control){

            $carreras = Carrera::pluck('nombre', 'id')->all();
            $letras = Letra::pluck('letra', 'id')->all();
            $turnos = Turno::pluck('turno', 'id')->all();
            $a = Alumno::where('numero_control', $numero_control)->first();

            $a = Alumno::where('numero_control', $numero_control)->first();

            $f_decode1 = $a->numero_control;
            $f_decode2 = $a->nombres;
            $f_decode3 = $a->apellidop;
            $f_decode4 = $a->apellidom;
            $f_decode5 = $a->carr;
            $f_decode6 = $a->tut_nivel;
            $f_decode7 = $a->grupo_l;
            $f_decode8 = $a->turn;
            $f_decode9 = $a->sem;
            $f_decode10 = $a->telcasa;
            $f_decode11 = $a->cel;
            $f_decode12 = $a->dir;
            $f_decode13 = $a->nss;
            $f_decode14 = $a->ts;
            $f_decode15 = $a->ec;
            $f_decode16 = $a->trabajo;
            $f_decode17 = $a->horas;

            return view('admin.editar_alumno', compact('carreras', 'letras', 'turnos','a', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13', 'f_decode14', 'f_decode15', 'f_decode16', 'f_decode17'));

        }

    public function reads_softDel_alumnos(){

        $a = User::onlyTrashed()->where('role_id', 1)->get();

        return view('admin.papelera_alumnos', compact('a'));
    }

    public function activar_alumno($numero_control){

        $u = User::where('numero_control', $numero_control)->first();

        if($u->is_active == 0){
            $u->is_active=1;
            $u->save();
        }else{
            $u->is_active=0;
            $u->save();
        }

        return redirect('/admin_alumnos_manage');

    }


    public function softDelete_alumno($numero_control){

        $u = User::where('numero_control', $numero_control)->first();
        $u->delete();

        return redirect('/admin_alumnos_manage');
    }

    public function rest_alumno($numero_control){
         User::withTrashed()->where('numero_control', $numero_control)->restore();
        return redirect('/papelera_alumnos');
    }

    public function store_alumnos(Request $request){

        $this->validate($request, [
            'nombres' => 'required|regex:/^[a-zA-Z ]+$/|max:100',
            'apellidop' => 'required|regex:/^[a-zA-Z ]+$/|max:50',
            'apellidom' => 'required|regex:/^[a-zA-Z ]+$/|max:50',
            'carrera' => 'required',
            'gru' => 'required',
            'tur' => 'required',
            'sem' => 'required',
            'telcasa' => 'required|regex:/^[0-9]+$/|max:20',
            'cel' => 'required|regex:/^[0-9]+$/|max:20',
            'dir' => 'required|max:50',
            'nss' => 'required|regex:/^[0-9]+$/|digits:11',
            'ts' => 'required',
            'ec' => 'required',
            'trabajo' => 'required',
        ],[
            'nombres.required'=>'Debes escribir tu nombre',
            'apellidop.required'=>'Debes escribir tu apellido paterno',
            'apellidom.required'=>'Debes escribir tu apellido materno',

            'nombres.max'=>'Tu nombre no puede tener mas de 100 caracteres ',
            'apellidop.max'=>'Tu apellido paterno no puede tener mas de 50 caracteres ',
            'apellidom.max'=>'Tu apellido materno no puede tener mas de 50 caracteres ',

            'nombres.regex'=>'Tu nombre no puede contener números',
            'apellidop.regex'=>'Tu apellido paterno no puede contener números',
            'apellidom.regex'=>'Tu apellido materno no puede contener números',

            'telcasa.required'=>'Debes escribir el teléfono de tu casa',
            'telcasa.regex'=>'El teléfono de tu casa no puede contener letras',
            'telcasa.max'=>'El teléfono de tu casa no puede contener mas de 20 caracteres',

            'cel.required'=>'Debes escribir tu teléfono celular',
            'cel.regex'=>'Tu teléfono celular no puede contener letras',
            'cel.max'=>'Tu teléfono celular no puede contener mas de 20 caracteres',

            'dir.required'=>'Debes escribir tu dirección',
            'dir.max'=>'Tu dirección no puede tener mas de 50 caracteres',

            'nss.required'=>'Debes escribir tu Número de Seguridad Social',
            'nss.regex'=>'Tu Número de Seguridad Social no puede contener letras',
            'nss.digits'=>'Tu Número de Seguridad Social tiene es de 11 dígitos',

        ]);

        $info = new Alumno();

        $info->numero_control = Auth::user()->numero_control;
        $info->nombres = $request->nombres;
        $info->apellidop = $request->apellidop;
        $info->apellidom = $request->apellidom;
        $info->carr = $request->carrera;
        $info->tut_nivel = 1;
        $info->grupo_l = $request->gru;
        $info->turn = $request->tur;
        $info->sem = $request->sem;
        $info->telcasa = $request->telcasa;
        $info->cel = $request->cel;
        $info->dir = $request->dir;
        $info->nss = $request->nss;
        $info->ts = $request->ts;
        $info->ec = $request->ec;
        $info->trabajo = $request->trabajo;
        $info->horas = $request->horas;
        $info->save();

        $u = User::where('numero_control',Auth::user()->numero_control)->first();
        $u->reg = 1;
        $u->save();

        session()->flash('mensaje_registro', 'Has completado tu registro! Puedes continuar');

        return redirect('/panel_alumno');
    }

    public function edit(Request $request){

        $info = Alumno::where('numero_control', Auth::user()->numero_control)->first();

        $info->nombres = $request->nombres_e;
        $info->apellidop = $request->apellidop_e;
        $info->apellidom = $request->apellidom_e;
        $info->carr = $request->carrera_e;

        $info->grupo_l = $request->gru_e;
        $info->turn = $request->tur_e;

        $info->sem = $request->sem_e;
        $info->telcasa = $request->telcasa_e;
        $info->cel = $request->cel_e;
        $info->dir = $request->dir_e;
        $info->nss = $request->nss_e;
        $info->ts = $request->ts_e;
        $info->ec = $request->ec_e;
        $info->trabajo = $request->trabajo_e;
        $info->horas = $request->horas_e;

        $info->save();

        return redirect()->back();

    }

    public function admin_store_edit_alumnos(Request $request, $numero_control){

        $info = Alumno::where('numero_control', $numero_control)->first();

        $info->nombres = $request->nombres;
        $info->apellidop = $request->apellidop;
        $info->apellidom = $request->apellidom;
        $info->carr = $request->carrera;
        $info->grupo_l = $request->gru;
        $info->turn = $request->tur;
        $info->sem = $request->sem;
        $info->telcasa = $request->telcasa;
        $info->cel = $request->cel;
        $info->dir = $request->dir;
        $info->nss = $request->nss;
        $info->ts = $request->ts;
        $info->ec = $request->ec;
        $info->trabajo = $request->trabajo;
        $info->horas = $request->horas;

        $info->save();

        return redirect('/admin_alumnos_manage');

    }


    }
