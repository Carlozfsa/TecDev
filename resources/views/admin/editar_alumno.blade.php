@extends('layouts.sideBarAlumno')

@section('content')

    <h2>REGISTRO DE DATOS DEL ALUMNO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Formulario
        </div>
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">


            {!! Form::open(['method'=>'POST', 'action'=>['AlumnosController@admin_store_edit_alumnos', $f_decode1]]) !!}

            {{--<div class="form-group">--}}
                {{--{!! Form::label('lnum','Número de control') !!}--}}
                {{--{!! Form::text('num', $f_decode1, ['class'=>'form-control']) !!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('lnombres','Nombres') !!}
                {!! Form::text('nombres', $f_decode2, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidop','Apellido paterno') !!}
                {!! Form::text('apellidop', $f_decode3, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidom','Apellido materno') !!}
                {!! Form::text('apellidom', $f_decode4, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lcarrera','Carrera') !!}
                {!! Form::select('carrera',[]+$carreras, $f_decode5,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lgru','Grupo') !!}
                {!! Form::select('gru',['1'=>'A','2'=>'B','3'=>'C','4'=>'D','5'=>'E','6'=>'F'], $f_decode7,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltur','Turno') !!}
                {!! Form::select('tur',['1'=>'Matutino','2'=>'Vespertino'], $f_decode8,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lsem','Semestre') !!}
                {!! Form::select('sem',['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'9+',]+$carreras, $f_decode9,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltelcasa','Teléfono de casa') !!}
                {!! Form::text('telcasa', $f_decode10, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lcel','Teléfono celular') !!}
                {!! Form::text('cel', $f_decode11, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ldir','Dirección') !!}
                {!! Form::text('dir', $f_decode12, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lnss','Número de Seguro Social (NSS)') !!}
                {!! Form::text('nss', $f_decode13, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lts','Tipo de sangre') !!}
                {!! Form::select('ts',['1'=>'O + ','2'=>'O -','3'=>'A +','4'=>'A -','5'=>'B +','6'=>'B -','7'=>'AB +','8'=>'AB -'], $f_decode14,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lec','Estado civil') !!}
                {!! Form::select('ec',['1'=>'Soltero','2'=>'Comprometido','3'=>'Casado','4'=>'Divorciado','4'=>'Viudo'], $f_decode15,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltrabajo','Situación laboral') !!}
                {!! Form::select('trabajo',['1'=>'Desempleado','2'=>'Trabajo con puesto bajo','3'=>'Trabajo con puesto medio', '4'=>'Trabajo con puesto alto'], $f_decode16,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'trabajo']) !!}
            </div>

            <div id = "horas_div" class="form-group">
                {!! Form::label('lhoras','Horas laborales') !!}
                {!! Form::select('horas',['1'=>'1','2'=>'2','3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'8+'], $f_decode17,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'horas']) !!}
            </div>

            <script type="text/javascript">
                $('#horas_div').hide();
            </script>
            <br><br>

            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-primary form-control']) !!}
            </div>


            {!! Form::close() !!}


        </div>
    </div>

@stop

@section('scripts')
    {{--<script>--}}
        {{--$(document).ready(function(){--}}

            {{--$('#trabajo').change(function(){--}}

                {{--if($('#trabajo').val()!=1){--}}
                    {{--$('#horas_div').fadeIn();--}}
                {{--}else{--}}
                    {{--$('#horas_div').fadeOut();--}}
                {{--}--}}

            {{--});--}}


        {{--});--}}

    {{--</script>--}}

    <script>
        $(document).ready(function(){

            if($('#trabajo').val()!=1){
                $('#horas_div').fadeIn();
            }else{
                $('#horas_div').fadeOut();
            }

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
