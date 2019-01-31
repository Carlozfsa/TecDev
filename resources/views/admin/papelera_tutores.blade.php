@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Restauración de tutores</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding: 5%;">

            <div style="padding-left: 80%;padding-bottom: 1%;">
                <button type="button" class="btn btn-success" onclick="location.href='/manejo_tutores';">Tutores vigentes</button>
            </div>

            @if(count($t)>0)

            <table class="table table-striped">

                <thead class="thead-light">

                <tr>
                    <th>Número de nómina </th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Fecha de creación</th>
                    <th>Restauración</th>
                    {{--<th>Eliminación</th>--}}
                </tr>
@foreach($t as $tu)
                <tr>
                    <td>{{$tu->numero_control}}</td>
                    <td>{{$tu->tutor->nombres}}</td>
                    <td>{{$tu->tutor->apellidop}}</td>
                    <td>{{$tu->tutor->apellidom}}</td>
                    <td>{{$tu->created_at}}</td>


                    {!! Form::open(['method'=>'POST', 'action'=>['tutoresController@rest_tutor', $tu->numero_control]]) !!}
                    <td>{!! Form::submit('Restaurar', ['class'=>'btn btn-info col-sm-12'])!!}</td>
                    {!! Form::close() !!}

                    {{--{!! Form::open(['method'=>'POST', 'action'=>['tutoresController@del_tutor', $tu->numero_control]]) !!}--}}
                    {{--<td>{!! Form::submit('Eliminar', ['class'=>'btn btn-danger col-sm-12'])!!}</td>--}}
                    {{--{!! Form::close() !!}--}}

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
