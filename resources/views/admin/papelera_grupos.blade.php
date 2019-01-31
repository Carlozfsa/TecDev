@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Restauración de grupos</h2>
    {{--<div class="panel panel-default table-responsive">--}}
        <div class="panel-body" style="padding: 0%;">

            <div style="padding-left: 80%;padding-bottom: 1%;">
                <button type="button" class="btn btn-success" onclick="location.href='/admin_grupos_manage';">Grupos vigentes</button>
            </div>

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
                    <th>Restauración</th>
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

                    {!! Form::open(['method'=>'POST', 'action'=>['GruposController@rest_grupo', $gr->clave]]) !!}
                    <td>{!! Form::submit('Restaurar', ['class'=>'btn btn-info col-sm-12'])!!}</td>
                    {!! Form::close() !!}

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
