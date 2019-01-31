@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Listado de grupos por tutor</h2>
    {{--<div class="panel panel-default table-responsive">--}}
        <div class="panel-body" style="padding: 0%;">

            <h1>Grupos de {{$t->name_pluck}}</h1>

            @if(count($g)>0)

            <table class="table table-striped" style="margin-left: 1%;">

                <thead class="thead-light">

                <tr>
                    <th>Clave</th>
                    <th>Carrera</th>
                    <th>Materia</th>
                    <th>Tutor</th>
                    <th>Periodo académico</th>
                    <th>Estatus</th>
                    <th>Fecha de creación</th>
                </tr>
@foreach($g as $gr)
                <tr>
                    <td>{{$gr->clave}}</td>
                    <td>{{$gr->carrera->nombre}}</td>
                    <td>{{$gr->materia->nombre}}</td>
                    <td>{{$gr->tutor->nombres.' '.$gr->tutor->apellidop.' '.$gr->tutor->apellidom}}</td>
                    <td>{{$gr->periodo->nombre}}</td>
                    <td>{{$gr->is_active==1 ? 'Activo' : 'Inactivo'}}</td>
                    <td>{{$gr->created_at}}</td>

                </tr>
@endforeach
                </thead>
            </table>
            @else
                No hay grupos borrados hasta el momento
            @endif
        </div>
    {{--</div>--}}

@stop

@section('scripts')

@stop
