@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Mis grupos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding: 1%;">
           <strong>Tutor:</strong> {{ Auth::user()->tutor->nombres}} &nbsp;{{ Auth::user()->tutor->apellidop}}&nbsp;{{ Auth::user()->tutor->apellidom}}
            <div style="padding-left: 80%;padding-bottom: 1%;">
            </div>

            {{--<table>--}}
                {{--<tr>--}}
                    {{--<td style="padding-left: 248%;padding-bottom: 1%;">--}}
                        {{--<button type="button" class="btn btn-success" onclick="location.href='/reads_softDel_grupo';">Grupos borrados</button>--}}
                    {{--<td>&nbsp;--}}
                    {{--<td style="padding-left: 248%;padding-bottom: 1%;">--}}
                        {{--<button type="button" class="btn btn-success" onclick="location.href='/admin_grupos_create';">Crear grupo</button>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--</table><br><br>--}}

        @if(count($g)>0)

            <table class="table table-striped" style="margin-left: 1%;">

                <thead class="thead-light">

                <tr>
                    <th>Clave</th>
                    <th>Carrera</th>
                    <th>Tutoría</th>
                    {{--<th>Tutor</th>--}}
                    <th>Periodo académico</th>
                    <th>Estatus</th>
                    <th>Detalles</th>
                </tr>
@foreach($g as $gr)
                <tr>
                    <td>{{$gr->clave}}</td>
                    <td>{{$gr->carrera->abr}}</td>
                    <td>{{$gr->materia->nombre}}</td>
                    {{--<td>{{$gr->tutor->nombres.' '.$gr->tutor->apellidop.' '.$gr->tutor->apellidom}}</td>--}}
                    <td>{{$gr->periodo->nombre}}</td>
                    <td>{{$gr->is_active==1 ? 'Activo' : 'Inactivo'}}</td>

                    {!! Form::open(['method'=>'GET', 'action'=>['tutoresController@create_detalle_grupo', $gr->clave]]) !!}
                    <td>{!! Form::submit('Detalles', ['class'=>'btn btn-success'])!!}</td>
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
