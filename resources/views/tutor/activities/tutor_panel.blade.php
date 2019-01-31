@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Panel del Tutor</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

        <div class="row">
            <button onclick="location.href='/tutor_grupos';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Grupos</button>
            <button onclick="location.href='/manejo_tutores';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Mi perfil</button>
            <button onclick="location.href='/admin_academias_manage';" style="margin: 1%" type="button" class="btn btn-success col-sm-3">Academias</button>
        </div>


    </div>
    </div>
@stop

@section('scripts')

@stop
