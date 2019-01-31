@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Administración de alumnos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body">

            <table>
                <tr>
                    <td style="padding-left: 465%;padding-bottom: 1%;"><button type="button" class="btn btn-success" onclick="location.href='/admin_alumnos_manage';">Alumnos vigentes</button></td>
                </tr>
            </table>

            @if(count($a)>0)

                <table class="table table-striped">

                    <thead class="thead-light">

                    <tr>
                        <th>Número de control</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Carrera</th>
                        <th>Grupo</th>
                        <th>Restauración</th>
                    </tr>

                    @foreach($a as $al)
                        <tr>
                           <td>{{$al->numero_control}}</td>
                            <td>{{$al->alumno->nombres}}</td>
                            <td>{{$al->alumno->apellidop}}</td>
                            <td>{{$al->alumno->apellidom}}</td>
                            <td>{{$al->alumno->carrera->abr}}</td>
                            <td>{{$al->alumno->grupo}}</td>

                            {!! Form::open(['method'=>'POST', 'action'=>['AlumnosController@rest_alumno', $al->numero_control]]) !!}
                            <td>{!! Form::submit('Restaurar', ['class'=>'btn btn-danger col-sm-12'])!!}</td>
                            {!! Form::close() !!}
                        </tr>

                    @endforeach
                    {{--@foreach($t as $tu)--}}
                        {{--<tr>--}}
                            {{--<td>{{$tu->numero_control}}</td>--}}
                            {{--<td>{{$tu->tutor->nombres}}</td>--}}
                            {{--<td>{{$tu->tutor->apellidop}}</td>--}}
                            {{--<td>{{$tu->tutor->apellidom}}</td>--}}
                            {{--<td>{{$tu->is_active==1 ? 'Activo' : 'Inactivo'}}</td>--}}
                            {{--<td>{{$tu->created_at}}</td>--}}
                            {{--{!! Form::open(['method'=>'GET', 'action'=>['tutoresController@create_edit_tutores', $tu->numero_control]]) !!}--}}
                            {{--<td>{!! Form::submit('Editar', ['class'=>'btn btn-info'])!!}</td>--}}
                            {{--{!! Form::close() !!}--}}


                            {{--{!! Form::open(['method'=>'POST', 'action'=>['tutoresController@activar_tutor', $tu->numero_control]]) !!}--}}
                            {{--<td> @if($tu->is_active == 0) {!! Form::submit('Activar', ['class'=>'btn btn-info col-sm-12'])!!} @else {!! Form::submit('Desactivar', ['class'=>'btn btn-warning col-sm-12'])!!} @endif</td>--}}
                            {{--{!! Form::close() !!}--}}

                            {{--{!! Form::open(['method'=>'POST', 'action'=>['tutoresController@softDelete_tutor', $tu->numero_control]]) !!}--}}
                            {{--<td>{!! Form::submit('Eliminar', ['class'=>'btn btn-danger col-sm-12'])!!}</td>--}}
                            {{--{!! Form::close() !!}--}}

                        {{--</tr>--}}
                    {{--@endforeach--}}
                    </thead>
                </table>
            @else
                No hay alumnos borrados hasta el momento
            @endif
        </div>
    </div>

@stop

@section('scripts')

@stop
