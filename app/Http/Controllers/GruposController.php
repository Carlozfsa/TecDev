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
use Illuminate\Support\Facades\Hash;

class GruposController extends Controller
{
    //
    public function create_panel(){

        $aviso = NULL;
        return view('admin.admin_panel', compact('aviso'));
    }

    public function create_grupos(){
        $a = Alumno::all();
        $carreras = Carrera::pluck('nombre', 'id')->all();
        $materias = Materia::pluck('nombre', 'id')->all();
        $periodos = Periodo::pluck('nombre', 'id')->all();
        $tutores = Tutor::pluck('name_pluck', 'numero_control')->all();


        return view('admin.crear_grupos', compact('materias', 'carreras', 'periodos', 'tutores', 'a'));
    }

    public function asignar_grupos($clave){
        $a = Alumno::all();
        $c = $clave;

        return view('admin.asignar_grupos', compact('a','c'));
    }

    public function store_asignar_grupos(Request $request, $c){

        $al = Alumno::find($request->checkBoxArray);

        foreach($al as $a){
            $a->grupo = $request->c;
            $a->save();
        }
        return redirect()->back();
    }


    public function create_academias(){

        return view('admin.crear_academias');
    }

    public function create_man_academias(){

        $a = Academia::all();

        return view('admin.manejo_academias', compact('a'));
    }

    public function create_man_periodos(){

        $p = Periodo::all();

        return view('admin.manejo_periodos', compact('p'));
    }

    public function create_periodos(){

        return view('admin.crear_periodos');
    }

    public function create_man_grupos(){
        $g = Grupo::all();
        $carreras = Carrera::pluck('nombre', 'id')->all();
        $materias = Materia::pluck('nombre', 'id')->all();
        $periodos = Periodo::pluck('nombre', 'id')->all();
        $tutores = Tutor::pluck('name_pluck', 'numero_control')->all();

        return view('admin.manejo_grupos', compact('materias', 'carreras', 'periodos', 'tutores', 'g'));

    }

    public function grupos_tutor(){

        $t = Tutor::all();
        return view('admin.grupos_tutor', compact('t'));
    }

    public function lista_grupos_tutor($numero_control){

        $g = Tutor::where('numero_control', $numero_control)->first()->grupo;
        $t = Tutor::where('numero_control', $numero_control)->first();

        return view('admin.listado_grupos', compact('g', 't'));
    }

        public function store_carreras(Request $request){

        $c = new Carrera();

        $c->nombre = $request->nombre;
        $c->abr = $request->abr;
        $c->save();
        return redirect()->back();
    }

    public function store_academias(Request $request){

        $c = new Academia();

        $c->nombre = $request->nombre;
        $c->save();
        return redirect('/admin_academias_manage');
    }

    public function store_periodos(Request $request){

        $c = new Periodo();

        $c->nombre = $request->nombre;
        $c->save();
        return redirect()->back();
    }

    public function create_edit_periodos($id){

        $p = Periodo::find($id);
        return view('admin.editar_periodos', compact('p'));
    }


    public function guardar_edit_periodos(Request $request, $id){

        $p = Periodo::where('id', $id)->first();
        $p->nombre = $request->nombre;
        $p->save();
        return redirect('/admin_periodos_manage');

    }

    public function softDelete_periodos($id){

        $p = Periodo::where('id', $id)->first();
        $p->delete();

        return redirect('/admin_periodos_manage');
    }


    public function reads_softDel_periodos(){

        $p = Periodo::onlyTrashed()->get();

        return view('admin.papelera_periodos', compact('p'));
    }

    public function rest_periodos($id){
        $p = Periodo::withTrashed()->where('id', $id)->restore();
        return redirect('/papelera_periodos');
    }



    public function create_materias(){

        return view('admin.crear_materias');
    }

    public function store_materias(Request $request){

        $c = new Materia();

        $c->nombre = $request->nombre;
        $c->save();
        return redirect()->back();
    }

    public function create_man_materias(){

        $m = Materia::all();

        return view('admin.manejo_materias', compact('m'));
    }

    public function create_edit_materias($id){

        $m = Materia::find($id);
        return view('admin.editar_materias', compact('m'));
    }

    public function guardar_edit_materias(Request $request, $id){

        $p = Materia::where('id', $id)->first();
        $p->nombre = $request->nombre;
        $p->save();
        return redirect('/admin_materias_manage');

    }

    public function softDelete_materias($id){

        $m = Materia::where('id', $id)->first();
        $m->delete();

        return redirect('/admin_materias_manage');
    }

    public function reads_softDel_materias(){

        $m = Materia::onlyTrashed()->get();

        return view('admin.papelera_materias', compact('m'));
    }

    public function rest_materias($id){
        $t = Materia::withTrashed()->where('id', $id)->restore();
        return redirect('/papelera_materias');
    }


    public function store_grupos(Request $request){

        $g = new Grupo();
        $g->clave = $request->clave;
        $g->car = $request->carrera;
        $g->nivel = $request->materia;
        $g->docente = $request->tutor;
        $g->per = $request->periodo;
        $g->is_active = 1;
        $g->save();

//        $al = Alumno::find($request->checkBoxArray);
//
//        foreach($al as $a){
//            $a->grupo = $request->clave;
//            $a->save();
//        }

        return redirect('/admin_grupos_manage');
    }

    public function activar_grupo($clave){

        $u = Grupo::where('clave', $clave)->first();

        if($u->is_active == 0){
            $u->is_active=1;
            $u->save();
        }else{
            $u->is_active=0;
            $u->save();
        }


        return redirect('/admin_grupos_manage');

    }

    public function edit_grupos($clave){
        $a = Alumno::all();
        $carreras = Carrera::pluck('nombre', 'id')->all();
        $materias = Materia::pluck('nombre', 'id')->all();
        $periodos = Periodo::pluck('nombre', 'id')->all();
        $tutores = Tutor::pluck('name_pluck', 'numero_control')->all();

        $g = Grupo::where('clave', $clave)->first();

        return view('admin.editar_grupos', compact('a','materias', 'carreras', 'periodos', 'tutores', 'g'));
    }

    public function create_edit_academias($id){

        $a = Academia::find($id);
        return view('admin.editar_academias', compact('a'));
    }

        public function guardar_edit_grupo(Request $request, $clave){

        $g = Grupo::where('clave', $clave)->first();
        $g->clave = $request->clave;
        $g->car = $request->carrera;
        $g->nivel = $request->materia;
        $g->docente = $request->tutor;
        $g->per = $request->periodo;
        $g->save();

        $al = Alumno::find($request->checkBoxArray);

        foreach($al as $a){
            $a->grupo = $request->clave;
            $a->save();
        }

        return redirect('/admin_grupos_manage');

    }

    public function guardar_edit_academias(Request $request, $id){

        $g = Academia::where('id', $id)->first();
        $g->nombre = $request->nombre;
        $g->save();
        return redirect('/admin_academias_manage');

    }

    public function softDelete_academias($id){

        $u = Academia::where('id', $id)->first();
        $u->delete();

        return redirect('/admin_academias_manage');
    }


    public function rest_academia($id){
        $t = Academia::withTrashed()->where('id', $id)->restore();
        return redirect('/papelera_academias');
    }




    public function softDelete_grupos($clave){

        $u = Grupo::where('clave', $clave)->first();
        $u->delete();


        return redirect('/admin_grupos_manage');
    }



    public function reads_softDel_academias(){

        $a = Academia::onlyTrashed()->get();

        return view('admin.papelera_academias', compact('a'));
    }



    public function reads_softDel_grupo(){

        $g = Grupo::onlyTrashed()->get();

        return view('admin.papelera_grupos', compact('g'));
    }

    public function rest_grupo($clave){
        $t = Grupo::withTrashed()->where('clave', $clave)->restore();
        return redirect('/reads_softDel_grupo');
    }


    public function create_carreras(){

        return view('admin.crear_carreras');
    }

    public function create_man_carreras(){

        $c = Carrera::all();

        return view('admin.manejo_carreras', compact('c'));
    }

    public function create_edit_carreras($id){

        $c = Carrera::find($id);
        return view('admin.editar_carreras', compact('c'));
    }

    public function guardar_edit_carreras(Request $request, $id){

        $c = Carrera::where('id', $id)->first();
        $c->nombre = $request->nombre;
        $c->save();
        return redirect('/admin_carreras_manage');

    }

    public function softDelete_carreras($id){

        $u = Carrera::where('id', $id)->first();
        $u->delete();

        return redirect('/admin_carreras_manage');
    }


    public function reads_softDel_carreras(){

        $c = Carrera::onlyTrashed()->get();

        return view('admin.papelera_carreras', compact('c'));
    }

    public function rest_carrera($id){
        $c = Carrera::withTrashed()->where('id', $id)->restore();
        return redirect('/papelera_carreras');
    }

}
