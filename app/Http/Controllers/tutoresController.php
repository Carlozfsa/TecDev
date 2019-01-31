<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Alumno;
use App\Carrera;
use App\Grupo;
use App\Materia;
use App\Periodo;
use App\Tutor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tutoresController extends Controller
{
    //

    public function create_panel_tutor()
    {
        return view('tutor.activities.tutor_panel');
    }

    public function create_avance_individual_alumno()
    {
        return view('tutor.activities.avance_individual_alumno');
    }

    public function create_tutores()
    {
        $academias = Academia::pluck('nombre', 'id')->all();
        return view('admin.reg_tutores', compact('academias'));
    }

    public function create_edit_tutores($numero_control)
    {

        $academias = Academia::pluck('nombre', 'id')->all();
        $t = Tutor::where('numero_control', $numero_control)->first();

        return view('admin.editar_tutores', compact('academias', 't'));
    }

    public function create_man_tutores(){

        $t = User::where('role_id', 2)->get();

        return view('admin.manejo_tutores', compact('t'));

    }


    public function create(Request $request)
    {
        $academias = Academia::pluck('nombre', 'id')->all();

        $this->validate($request, [
            'nombres' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'academia' => 'required',
            'numero' => 'required|integer',
            'mail' => 'required|string|email|max:255',
            'password' => 'min:6|string|confirmed',
        ]);


        User::create([
            'numero_control' => $request->numero,
            'email' => $request->mail,
            'password' => bcrypt($request->password),
            'role_id'=>2,
        ]);

        $t = new Tutor();
        $t->numero_control = $request->numero;
        $t->nombres = $request->nombres;
        $t->apellidop = $request->apellidop;
        $t->apellidom = $request->apellidom;
        $t->academia = $request->academia;
        $t->name_pluck = $request->nombres.' '.$request->apellidop.' '.$request->apellidom;
        $t->save();

        return redirect('manejo_tutores');
    }

    public function guardar_edit_tutores(Request $request, $numero_control){

        $this->validate($request, [
            'nombres' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'academia' => 'required',
            'numero' => 'required|integer',
            'mail' => 'required|string|email|max:255',
            'password' => 'min:6|string|confirmed',
        ]);

        User::where('numero_control', $numero_control)->update([
            'numero_control' => $request->numero,
            'email' => $request->mail,
            'password' => bcrypt($request->password),
        ]);

        $t = Tutor::where('numero_control', $numero_control)->first();
        $t->numero_control = $request->numero;
        $t->nombres = $request->nombres;
        $t->apellidop = $request->apellidop;
        $t->apellidom = $request->apellidom;
        $t->academia = $request->academia;
        $t->academia = $request->academia;
        $t->save();

        return redirect('manejo_tutores');
    }

    public function activar_tutor($numero_control){

        $u = User::where('numero_control', $numero_control)->first();

        if($u->is_active == 0){
            $u->is_active=1;
            $u->save();
        }else{
            $u->is_active=0;
            $u->save();
        }


        return redirect('/manejo_tutores');

    }

    public function softDelete_tutor($numero_control){

        $u = User::where('numero_control', $numero_control)->first();
        $u->delete();


        return redirect('/manejo_tutores');
    }

    public function reads_softDel_tutor(){

        $t = User::onlyTrashed()->where('role_id', 2)->get();

        return view('admin.papelera_tutores', compact('t'));
    }

    public function rest_tutor($numero_control){
        $t = User::withTrashed()->where('numero_control', $numero_control)->restore();
        return redirect('/reads_softDel_tutor');
    }


    public function create_grupos_tutor(){
        $g = Grupo::where('docente', Auth::user()->numero_control)->get();
        $carreras = Carrera::pluck('nombre', 'id')->all();
        $materias = Materia::pluck('nombre', 'id')->all();
        $periodos = Periodo::pluck('nombre', 'id')->all();
        $tutores = Tutor::pluck('name_pluck', 'numero_control')->all();

        return view('tutor.activities.grupos_tutor', compact('materias', 'carreras', 'periodos', 'tutores', 'g'));

    }

    public function create_detalle_grupo($c){

        $a = Alumno::where('grupo', $c)->get();
        $cl = $c;
        return  view('tutor.activities.detalle_grupo', compact('a','cl'));
    }


    }