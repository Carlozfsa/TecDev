@extends('layouts.sideBarAlumno')

@section('content')

    <h2>REGISTRO DE DATOS DEL ALUMNO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Formulario
        </div>
        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;">

            @if(count($errors)>0)

                <div class = "alert alert-danger">
                    <strong>Aviso!</strong> Rectifique sus datos!
                </div>
            @else

            @endif

            @if($edit==0)

                <div class="alert alert-danger">
                    <strong>Aviso importante!</strong><br>
                    Antes de continuar, tienes que completar tu registro.
                    Si no lo haces, no podrás realizar ninguna actividad.
                </div>

            {!! Form::open(['method'=>'POST', 'action'=>'AlumnosController@store_alumnos']) !!}

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
                {!! Form::select('carrera',[]+$carreras, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lgru','Grupo') !!}
                {!! Form::select('gru',['1'=>'A','2'=>'B','3'=>'C','4'=>'D','5'=>'E','6'=>'F'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltur','Turno') !!}
                {!! Form::select('tur',['1'=>'Matutino','2'=>'Vespertino'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lsem','Semestre') !!}
                {!! Form::select('sem',['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'9+',]+$carreras, null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
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
                {!! Form::select('ts',['1'=>'O + ','2'=>'O -','3'=>'A +','4'=>'A -','5'=>'B +','6'=>'B -','7'=>'AB +','8'=>'AB -'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lec','Estado civil') !!}
                {!! Form::select('ec',['1'=>'Soltero','2'=>'Comprometido','3'=>'Casado','4'=>'Divorciado','4'=>'Viudo'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ltrabajo','Situación laboral') !!}
                {!! Form::select('trabajo',['1'=>'Desempleado','2'=>'Trabajo con puesto bajo','3'=>'Trabajo con puesto medio', '4'=>'Trabajo con puesto alto'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'trabajo']) !!}
            </div>

            <div id = "horas_div" class="form-group">
                {!! Form::label('lhoras','Horas laborales') !!}
                {!! Form::select('horas',['1'=>'1','2'=>'2','3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'8+'], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'horas']) !!}
            </div>

            <script type="text/javascript">
                $('#horas_div').hide();
            </script>
            <br><br>

            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-primary form-control']) !!}
            </div>


            {!! Form::close() !!}

            @else

                <div class="alert alert-success">
                    <strong>Aviso!</strong><br>
                    Registro guardado. Es posible editar su información.<br>
                    Puede continuar con sus actividades.
                </div><br>

                {!! Form::open(['method'=>'POST', 'action'=>'AlumnosController@edit']) !!}

                <div class="form-group">
                    {!! Form::label('lnombres','Nombres') !!}
                    {!! Form::text('nombres_e', $f_decode2, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lapellidop','Apellido paterno') !!}
                    {!! Form::text('apellidop_e', $f_decode3, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lapellidom','Apellido materno') !!}
                    {!! Form::text('apellidom_e', $f_decode4, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lcarrera','Carrera') !!}
                    {!! Form::select('carrera_e',[]+$carreras, $f_decode5,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lgru','Grupo') !!}
                    {!! Form::select('gru_e',[]+$letras, $f_decode7,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('ltur','Turno') !!}
                    {!! Form::select('tur_e',[]+$turnos, $f_decode8,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lsem','Semestre') !!}
                    {!! Form::select('sem_e',['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'9+',], $f_decode9,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('ltelcasa','Teléfono de casa') !!}
                    {!! Form::text('telcasa_e', $f_decode10, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lcel','Teléfono celular') !!}
                    {!! Form::text('cel_e', $f_decode11, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('ldir','Dirección') !!}
                    {!! Form::text('dir_e', $f_decode12, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lnss','Número de Seguro Social (NSS)') !!}
                    {!! Form::text('nss_e', $f_decode13, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lts','Tipo de sangre') !!}
                    {!! Form::select('ts_e',['1'=>'O + ','2'=>'O -','3'=>'A +','4'=>'A -','5'=>'B +','6'=>'B -','7'=>'AB +','8'=>'AB -'], $f_decode14,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lec','Estado civil') !!}
                    {!! Form::select('ec_e',['1'=>'Soltero','2'=>'Comprometido','3'=>'Casado','4'=>'Divorciado','4'=>'Viudo'], $f_decode15,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('ltrabajo','Situación laboral') !!}
                    {!! Form::select('trabajo_e',['1'=>'Desempleado','2'=>'Trabajo con puesto bajo','3'=>'Trabajo con puesto medio', '4'=>'Trabajo con puesto alto'], $f_decode16,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'trabajo_e']) !!}
                </div>

                <div id = "horas_div_e" class="form-group">
                    {!! Form::label('lhoras','Horas laborales') !!}
                    {!! Form::select('horas_e',['1'=>'1','2'=>'2','3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'8+'], $f_decode17,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control', 'id'=>'horas_e']) !!}
                </div>


                <br><br>

                <div class="form-group">
                    {!! Form::submit('Editar',['class'=>'btn btn-primary form-control']) !!}
                </div>


                {!! Form::close() !!}

            @endif

        </div>
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

    <script>
        $(document).ready(function(){

            if($('#trabajo_e').val()!=1){
                $('#horas_div_e').fadeIn();
            }else{
                $('#horas_div_e').fadeOut();
            }

            $('#trabajo_e').change(function(){

                if($('#trabajo_e').val()!=1){
                    $('#horas_div_e').fadeIn();
                }else{
                    $('#horas_div_e').fadeOut();
                }

            });

        });

    </script>
@stop
