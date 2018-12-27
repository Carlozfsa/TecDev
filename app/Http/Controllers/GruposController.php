<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Carrera;
use App\Materia;
use App\Periodo;
use App\User;

use Illuminate\Http\Request;

class GruposController extends Controller
{
    //

    public function create_grupos(){

        $carreras = Carrera::pluck('nombre', 'id')->all();
        $materias = Materia::pluck('nombre', 'id')->all();
        $periodos = Periodo::pluck('nombre', 'id')->all();

        return view('admin.crear_grupos', compact('materias', 'carreras', 'periodos'));
    }

    public function create_carreras(){

        return view('admin.crear_carreras');
    }

    public function create_materias(){

        return view('admin.crear_materias');
    }

    public function create_academias(){

        return view('admin.crear_academias');
    }

    public function create_periodos(){

        return view('admin.crear_periodos');
    }

    public function create_tutores(){

        $academias = Academia::pluck('nombre', 'id')->all();
        return view('admin.reg_tutores', compact('academias'));
    }


    public function store_carreras(Request $request){

        $c = new Carrera();

        $c->nombre = $request->nombre;
        $c->abr = $request->abr;
        $c->save();
        return redirect()->back();
    }

    public function store_materias(Request $request){

        $c = new Materia();

        $c->nombre = $request->nombre;
        $c->save();
        return redirect()->back();
    }

    public function store_academias(Request $request){

        $c = new Academia();

        $c->nombre = $request->nombre;
        $c->save();
        return redirect()->back();
    }

    public function store_periodos(Request $request){

        $c = new Periodo();

        $c->nombre = $request->nombre;
        $c->save();
        return redirect()->back();
    }

//    public function store_tutores(Request $request){
//
//        $c = new User();
//
//        $c->numero_control = $request->numero;
//        $c->role_id = 2;
//        $c->is_active = 1;
//        $c->name = $request->nombres;
//        $c->apellidop = $request->apellidop;
//        $c->apellidom = $request->apellidom;
//        $c->email = $request->email;
//        $c->password
//
//        $c->save();
//        return redirect()->back();
//    }



    public function store_grupos(Request $request){

        return 'oks';
    }
}
