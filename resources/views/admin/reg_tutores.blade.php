@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Registro de tutores</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            {!! Form::open(['method'=>'POST', 'action'=>'GruposController@store_grupos', 'files'=>'true']) !!}


            <div class="form-group">
                {!! Form::label('lnombres','Nombres') !!}
                {!! Form::text('nombres', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidop','Apellido paterno') !!}
                {!! Form::text('apellidop', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidom','Apellido materno') !!}
                {!! Form::text('apellidom', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lnumero','Número de mómina') !!}
                {!! Form::text('numero', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lmail','Correo electrónico') !!}
                {!! Form::text('mail', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lcont1','Contraseña') !!}
                {!! Form::password('cont1', array('placeholder'=>'', 'class'=>'form-control' ) ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lcont2','Confirmar contraseña') !!}
                {!! Form::password('cont2', array('placeholder'=>'', 'class'=>'form-control' ) ) !!}
            </div>

            {{--<div class="form-group">--}}
                {{--{!! Form::label('lacademia','Academia') !!}--}}
                {{--{!! Form::select('academia',['0'=>'---Seleccione una academia---']+$academias, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

        </div>
    </div>

  <div class="center-block" style="margin-left:8%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">

            <li><a href="{{url('/tiempo_ej_1')}}" style="background-color: lightgray;">Parte 1</a></li>
            <li><a href="{{url('/tiempo_ej_2')}}">Parte 2</a></li>
            <li><a href="{{url('/tiempo_ej_3')}}">Parte 3</a></li>
            <li><a href="{{url('/tiempo_ej_4')}}">Parte 4</a></li>
            <li><a href="{{url('/tiempo_ej_5')}}">Parte 5</a></li>
            <li><a href="{{url('/tiempo_ej_6')}}">Parte 6</a></li>
            <li><a href="{{url('/tiempo_ej_7')}}">Parte 7</a></li>
            <li><a href="{{url('/tiempo_ej_8')}}">Parte 8</a></li>
            <li><a href="{{url('/tiempo_ej_f')}}">Parte final</a></li>
            <li>
                <a href="{{url('/tiempo_ej_2')}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
  </div>
@stop

@section('scripts')

@stop
