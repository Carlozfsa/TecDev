@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Creación de grupos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            <strong>Grupo:</strong>&nbsp;{{$c}}
        </div>
        <div class="panel-body">

            {!! Form::open(['method'=>'POST', 'action'=>['GruposController@store_asignar_grupos',$c]]) !!}

            <div class="form-group">
                {!! Form::label('lasig','Asignación de alumnos') !!}
            </div>

            <table class="table table-striped">

                <thead class="thead-light">
                <tr>
                    <th>Numero control</th>
                    <th>Nombres</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Carrera</th>
                    <th>Grupo</th>
                    <th>Turno</th>
                    <th>Semestre</th>
                    <th>Asignación</th>
                </tr>
                </thead>

                @if(count($a) > 0)

                @foreach($a as $al)
                    <tr>
                        <td>{{$al->numero_control}}</td>
                        <td>{{$al->nombres}}</td>
                        <td>{{$al->apellidop}}</td>
                        <td>{{$al->apellidom}}</td>
                        <td>{{$al->carrera->abr}}</td>
                        <td>{{$al->letra->letra}}</td>
                        <td>{{$al->turno->turno}}</td>
                        <td>{{$al->sem}}</td>
                        <td><input class="checkBoxes form-group" type="checkbox" name="checkBoxArray[]" value="{{$al->numero_control}}"></td>
                    </tr>

                @endforeach

                @else
                    No hay alumnos registrados
                @endif

            </table>

            <div class="form-group">
                {!! Form::submit('Asignar',['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('scripts')

@stop
