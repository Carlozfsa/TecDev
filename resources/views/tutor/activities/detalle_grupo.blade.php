@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Listado de alumnos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body">            <strong>Grupo:</strong> {{$cl}}


            {!! Form::open(['method'=>'GET', 'action'=>['ActivitiesController@create_avance_grupo', $cl]]) !!}
            <table>
                <tr>
                    <td style="padding-left: 995%;padding-bottom: 1%;">{!! Form::submit('Avance', ['class'=>'btn btn-success'])!!}</td>
                </tr>
            </table>

            {!! Form::close() !!}

        @if(count($a)>0)

                <label style="padding-left: 1%; font-size: 15px;" class="control-label"><strong>Alumnos inscritos</strong></label>

                <table class="table table-striped">

                    <thead class="thead-light">

                    <tr>
                        <th>Número de control</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Carrera</th>
                        <th>Turno</th>
                        <th>Semestre</th>
                        <th>Avance individual</th>

                    </tr>

                    @foreach($a as $al)
                        <tr>
                           <td>{{$al->numero_control}}</td>
                            <td>{{$al->nombres}}</td>
                            <td>{{$al->apellidop}}</td>
                            <td>{{$al->apellidom}}</td>
                            <td>{{$al->carrera->abr}}</td>
                            <td>{{$al->turno->turno}}</td>
                            <td>{{$al->sem}}</td>

                            {!! Form::open(['method'=>'GET', 'action'=>['ActivitiesController@create_acts_tutor', $al->numero_control,$al->nombres, $al->apellidop, $al->apellidom]]) !!}
                                <td>{!! Form::submit('Avance', ['class'=>'btn btn-danger col-sm-12'])!!}</td>
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
                No hay alumnos registrados hasta el momento
            @endif


        </div>
    </div>

@stop

@section('scripts')

@stop
