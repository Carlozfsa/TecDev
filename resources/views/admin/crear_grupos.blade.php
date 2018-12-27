@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            {!! Form::open(['method'=>'POST', 'action'=>'GruposController@store_grupos', 'files'=>'true']) !!}

            <div class="form-group">
                {!! Form::label('lcarrera','Carrera') !!}
                {!! Form::select('carrera',['0'=>'---Seleccione una carrera---']+$carreras, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lmateria','Materia') !!}
                {!! Form::select('materia',['0'=>'---Seleccione una materia---']+$materias, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltutor','Tutor') !!}
                {!! Form::select('tutor',['0'=>'---Seleccione un tutor---'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lperiodo','Periodo académico') !!}
                {!! Form::select('periodo',['0'=>'---Seleccione un periodo académico---']+$periodos, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lgrupo','Clave del grupo') !!}
                {!! Form::text('grupo', null, ['class'=>'form-control']) !!}
            </div>





            <div class="form-group">
                {!! Form::label('body','Contenido') !!}
                {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}
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
