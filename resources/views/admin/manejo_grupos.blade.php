@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Administración de grupos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding: 0%;">

            <div style="padding-left: 80%;padding-bottom: 1%;">
            </div>

            <table>
                <tr>
                    <td style="padding-left: 248%;padding-bottom: 1%;">
                        <button type="button" class="btn btn-success" onclick="location.href='/reads_softDel_grupo';">Grupos borrados</button>
                    <td>&nbsp;
                    <td style="padding-left: 248%;padding-bottom: 1%;">
                        <button type="button" class="btn btn-success" onclick="location.href='/admin_grupos_create';">Crear grupo</button>
                    </td>
                </tr>
            </table>

            @if(count($g)>0)

            <table class="table table-striped" style="margin-left: 1%;">

                <thead class="thead-light">

                <tr>
                    <th>Clave</th>
                    <th>Carrera</th>
                    <th>Tutoría</th>
                    <th>Tutor</th>
                    <th>Periodo académico</th>
                    <th>Estatus</th>
                    <th>Edición</th>
                    <th>Activación</th>
                    <th>Eliminación</th>
                    <th>Asignación</th>
                </tr>
@foreach($g as $gr)
                <tr>
                    <td>{{$gr->clave}}</td>
                    <td>{{$gr->carrera->nombre}}</td>
                    <td>{{$gr->materia->nombre}}</td>
                    <td>{{$gr->tutor->nombres.' '.$gr->tutor->apellidop.' '.$gr->tutor->apellidom}}</td>
                    <td>{{$gr->periodo->nombre}}</td>
                    <td>{{$gr->is_active==1 ? 'Activo' : 'Inactivo'}}</td>
                    {!! Form::open(['method'=>'GET', 'action'=>['GruposController@edit_grupos', $gr->clave]]) !!}
                    <td>{!! Form::submit('Editar', ['class'=>'btn btn-info'])!!}</td>
                    {!! Form::close() !!}


                    {!! Form::open(['method'=>'POST', 'action'=>['GruposController@activar_grupo', $gr->clave]]) !!}
                    <td> @if($gr->is_active == 0) {!! Form::submit('Activar', ['class'=>'btn btn-info col-sm-12'])!!} @else {!! Form::submit('Desactivar', ['class'=>'btn btn-warning col-sm-12'])!!} @endif</td>
                    {!! Form::close() !!}

                    {!! Form::open(['method'=>'POST', 'action'=>['GruposController@softDelete_grupos', $gr->clave]]) !!}
                    <td>{!! Form::submit('Eliminar', ['class'=>'btn btn-danger col-sm-12'])!!}</td>
                    {!! Form::close() !!}


                    {!! Form::open(['method'=>'GET', 'action'=>['GruposController@asignar_grupos', $gr->clave]]) !!}
                    <td>{!! Form::submit('Asignar', ['class'=>'btn btn-success col-sm-12'])!!}</td>
                    {!! Form::close() !!}
                </tr>
@endforeach
                </thead>
            </table>
            @else
                No hay grupos hasta el momento
            @endif
        </div>
    </div>

@stop

@section('scripts')

@stop
