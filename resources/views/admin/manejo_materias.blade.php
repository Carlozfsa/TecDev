@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Administración de Tutorías</h2>
    {{--<div class="panel panel-default table-responsive">--}}
        <div class="panel-body" style="padding: 0%;">

            <div class="row" style="padding-left: 80%;padding-bottom: 1%;">
            </div>

            <table>
                <tr>
                    <td style="padding-left: 178%;padding-bottom: 1%;">
                        <button type="button" class="btn btn-success" onclick="location.href='/papelera_materias';">Tutorías borradas</button>
                    <td>&nbsp;
                    <td style="padding-left: 178%;padding-bottom: 1%;">
                        <button type="button" class="btn btn-success" onclick="location.href='/admin_materias_create';">Crear tutoría</button>
                    </td>
                </tr>
            </table>

            @if(count($m)>0)

            <table class="table table-striped" style="margin-left: 1%;">

                <thead class="thead-light">

                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
@foreach($m as $ma)
                <tr>
                    <td>{{$ma->nombre}}</td>
                    {!! Form::open(['method'=>'GET', 'action'=>['GruposController@create_edit_materias', $ma->id]]) !!}
                    <td>{!! Form::submit('Editar', ['class'=>'btn btn-info'])!!}</td>
                    {!! Form::close() !!}


                    {!! Form::open(['method'=>'POST', 'action'=>['GruposController@softDelete_materias', $ma->id]]) !!}
                    <td>{!! Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}</td>
                    {!! Form::close() !!}

                </tr>
@endforeach
                </thead>
            </table>
            @else
                No hay academias hasta el momento
            @endif
        </div>
    {{--</div>--}}

@stop

@section('scripts')

@stop
