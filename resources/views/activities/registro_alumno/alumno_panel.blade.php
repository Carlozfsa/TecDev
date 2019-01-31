@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Panel del Alumno</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

        <div class="row">
            <button onclick="location.href='/panel_actividades';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Actividades</button>
            <button onclick="location.href='/panel_actividades';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Calificaciones</button>
            <button onclick="location.href='/reg_alumno';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Mi perfil</button>
        </div>

    </div>
    </div>
@stop

@section('scripts')

@stop
