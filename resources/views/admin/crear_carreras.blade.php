@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Registro de carreras</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
        </div>
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            {!! Form::open(['method'=>'POST', 'action'=>'GruposController@store_carreras']) !!}

            <div class="form-group">
                {!! Form::label('lnombre','Nombre de la carrera') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('labr','Abreviación de la carrera') !!}
                {!! Form::text('abr', null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('scripts')

@stop
