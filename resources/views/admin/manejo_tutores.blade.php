@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Administración de tutores</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding: 5%;">

            <table>
                <tr>
                    <td style="padding-left: 178%;padding-bottom: 1%;"><button type="button" class="btn btn-success" onclick="location.href='/reads_softDel_tutor';">Tutores borrados</button></td>
                    <td>&nbsp;</td>
                    <td style="padding-left: 178%;padding-bottom: 1%;"><button type="button" class="btn btn-success" onclick="location.href='/reads_softDel_tutor';">Tutores por grupo</button></td>
                </tr>
            </table>

            @if(count($t)>0)

            <table class="table table-striped">

                <thead class="thead-light">

                <tr>
                    <th>Número de nómina </th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Estatus</th>
                    <th>Fecha de creación</th>
                    <th>Edición</th>
                    <th>Activación</th>
                    <th>Eliminación</th>
                </tr>
@foreach($t as $tu)
                <tr>
                    <td>{{$tu->numero_control}}</td>
                    <td>{{$tu->tutor->nombres}}</td>
                    <td>{{$tu->tutor->apellidop}}</td>
                    <td>{{$tu->tutor->apellidom}}</td>
                    <td>{{$tu->is_active==1 ? 'Activo' : 'Inactivo'}}</td>
                    <td>{{$tu->created_at}}</td>

                    {!! Form::open(['method'=>'GET', 'action'=>['tutoresController@create_edit_tutores', $tu->numero_control]]) !!}
                    <td>{!! Form::submit('Editar', ['class'=>'btn btn-info'])!!}</td>
                    {!! Form::close() !!}


                    {!! Form::open(['method'=>'POST', 'action'=>['tutoresController@activar_tutor', $tu->numero_control]]) !!}
                    <td> @if($tu->is_active == 0) {!! Form::submit('Activar', ['class'=>'btn btn-info col-sm-12'])!!} @else {!! Form::submit('Desactivar', ['class'=>'btn btn-warning col-sm-12'])!!} @endif</td>
                    {!! Form::close() !!}

                    {!! Form::open(['method'=>'POST', 'action'=>['tutoresController@softDelete_tutor', $tu->numero_control]]) !!}
                    <td>{!! Form::submit('Eliminar', ['class'=>'btn btn-danger col-sm-12'])!!}</td>
                    {!! Form::close() !!}

                </tr>
@endforeach
                </thead>
            </table>
            @else
                No hay tutores borrados hasta el momento
            @endif
        </div>
    </div>

@stop

@section('scripts')

@stop
