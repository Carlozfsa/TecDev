@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Relación tutores - grupos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding: 5%;">

            @if(count($t)>0)

            <table class="table table-striped">

                <thead class="thead-light">

                <tr>
                    <th>Número de nómina </th>
                    <th>Nombre</th>
                    <th>N° de grupos</th>
                    <th>Listado de grupos</th>
                </tr>
@foreach($t as $tu)
                <tr>
                    <td>{{$tu->numero_control}}</td>
                    <td>{{$tu->name_pluck}}</td>
                    <td>n</td>

                    {!! Form::open(['method'=>'GET', 'action'=>['GruposController@lista_grupos_tutor', $tu->numero_control]]) !!}
                    <td>{!! Form::submit('Listar', ['class'=>'btn btn-info'])!!}</td>
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
