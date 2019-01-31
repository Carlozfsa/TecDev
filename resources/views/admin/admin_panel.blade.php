@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Panel del Administrador global</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

        <div class="row">
            <button onclick="location.href='/admin_alumnos_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Alumnos</button>
            <button onclick="location.href='/manejo_tutores';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Tutores</button>
            <button onclick="location.href='/admin_academias_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Academias</button>
        </div>

        <div class="row">
            <button onclick="location.href='/admin_periodos_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Per. academicos</button>
            <button onclick="location.href='/admin_materias_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Tutorías</button>
            <button onclick="location.href='/admin_reg';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Mi perfil</button>
        </div>

            <div class="row">
                <button onclick="location.href='/admin_grupos_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Grupos</button>
                <button onclick="location.href='/admin_carreras_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Carreras</button>
                {{--<button onclick="location.href='/admin_alumnos_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Letra grupo</button>--}}
            </div>

            <div class="row">

            </div>
    </div>
    </div>
@stop

@section('scripts')

@stop
