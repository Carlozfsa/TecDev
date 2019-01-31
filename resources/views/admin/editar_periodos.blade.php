@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Edición de periodos académicos</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            {!! Form::open(['method'=>'POST', 'action'=>['GruposController@guardar_edit_periodos',$p->id]]) !!}

            <div class="form-group">
                {!! Form::label('lnombre','Nombre de la academia') !!}
                {!! Form::text('nombre', $p->nombre, ['class'=>'form-control']) !!}
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
