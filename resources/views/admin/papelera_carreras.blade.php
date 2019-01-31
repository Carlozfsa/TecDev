@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Administración de carreras</h2>
    {{--<div class="panel panel-default table-responsive">--}}
        <div class="panel-body" style="padding: 0%;">

            <div style="padding-left: 80%;padding-bottom: 1%;">
                <button type="button" class="btn btn-success" onclick="location.href='/admin_carreras_manage';">Carreras vigentes</button>
            </div>

            @if(count($c)>0)

            <table class="table table-striped" style="margin-left: 1%;">

                <thead class="thead-light">

                <tr>
                    <th>Nombre</th>
                    <th>Restauración</th>
                </tr>
@foreach($c as $ca)
                <tr>
                    <td>{{$ca->nombre}}</td>

                    {!! Form::open(['method'=>'POST', 'action'=>['GruposController@rest_carrera', $ca->id]]) !!}
                    <td>{!! Form::submit('Restaurar', ['class'=>'btn btn-danger'])!!}</td>
                    {!! Form::close() !!}

                </tr>
@endforeach
                </thead>
            </table>
            @else
                No hay carreras borradas hasta el momento
            @endif
        </div>
    {{--</div>--}}

@stop

@section('scripts')

@stop
