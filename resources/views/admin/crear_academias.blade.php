@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Registro de academia</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            {!! Form::open(['method'=>'POST', 'action'=>'GruposController@store_academias']) !!}

            <div class="form-group">
                {!! Form::label('lnombre','Nombre de la academia') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
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
