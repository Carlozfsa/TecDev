@extends('layouts.sideBarAlumno')

@section('content')

    <h2>REGISTRO DE DATOS DEL ALUMNO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Aviso importante!</strong><br>
                Antes de continuar, tienes que completar tu registro.
                Si no lo haces, no podrás realizar ninguna actividad.
            </div>

            {!! Form::open(['method'=>'POST', 'action'=>'ActivitiesController@store_alumnos']) !!}

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
                {!! Form::label('lcarrera','Carrera') !!}
                {!! Form::select('carrera',['0'=>'---Seleccione una carrera---']+$carreras, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lsem','Semestre') !!}
                {!! Form::select('sem',['0'=>'---Seleccione un semestre---', '1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'9+',]+$carreras, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltelcasa','Teléfono de casa') !!}
                {!! Form::text('telcasa', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lcel','Teléfono celular') !!}
                {!! Form::text('cel', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ldir','Dirección') !!}
                {!! Form::text('dir', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lnss','Número de Seguro Social (NSS)') !!}
                {!! Form::text('nss', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lts','Tipo de sangre') !!}
                {!! Form::select('ts',['0'=>'---Seleccione un tipo de sangre---', '1'=>'O + ','2'=>'O -','3'=>'A +','4'=>'A -','5'=>'B +','6'=>'B -','7'=>'AB +','8'=>'AB -'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lec','Estado civil') !!}
                {!! Form::select('ec',['0'=>'---Seleccione un estado civil---', '1'=>'Soltero','2'=>'Comprometido','3'=>'Casado','4'=>'Divorciado','4'=>'Viudo'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltrabajo','Situación laboral') !!}
                {!! Form::select('trabajo',['0'=>'---Seleccione una situación laboral---', '1'=>'Desempleado','2'=>'Trabajo con puesto bajo','3'=>'Trabajo con puesto medio', '4'=>'Trabajo con puesto alto'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'trabajo']) !!}
            </div>

            <div id = "horas_div" class="form-group">
                {!! Form::label('lhoras','Horas laborales') !!}
                {!! Form::select('horas',['0'=>'---Seleccione sus horas laborales por dia---', '1'=>'1','2'=>'2','3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'8+'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'horas']) !!}
            </div>

            <script type="text/javascript">
                $('#horas_div').hide();
            </script>


            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-primary form-control']) !!}
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
    <script>
        $(document).ready(function(){

            $('#trabajo').change(function(){

                if($('#trabajo').val()!=1){
                    $('#horas_div').fadeIn();
                }else{
                    $('#horas_div').fadeOut();
                }

            });



        });

    </script>
@stop
