@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Edición de grupos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
        </div>
        <div class="panel-body">

            {!! Form::open(['method'=>'POST', 'action'=>['GruposController@guardar_edit_grupo', $g->clave]]) !!}

            <div class="form-group">
                {!! Form::label('lcarrera','Carrera') !!}
                {!! Form::select('carrera',[]+$carreras, $g->car,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lmateria','Materia') !!}
                {!! Form::select('materia',[]+$materias, $g->mat,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltutor','Tutor') !!}
                {!! Form::select('tutor',[]+$tutores, $g->docente,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lperiodo','Periodo académico') !!}
                {!! Form::select('periodo',[]+$periodos, $g->per,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lgrupo','Clave del grupo') !!}
                {!! Form::text('clave', $g->clave, ['class'=>'form-control']) !!}
            </div>

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
                            <td><input class="checkBoxes form-group" type="checkbox" name="checkBoxArray[]" value="{{$al->id}}"></td>
                        </tr>

                    @endforeach

                @else
                    No hay alumnos registrados
                @endif

            </table>

            <div class="form-group">
                {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('scripts')

@stop
