@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Edición de carrera</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            {!! Form::open(['method'=>'POST', 'action'=>['GruposController@guardar_edit_carreras',$c->id]]) !!}

            <div class="form-group">
                {!! Form::label('lnombre','Nombre de la carrera') !!}
                {!! Form::text('nombre', $c->nombre, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('scripts')

@stop
