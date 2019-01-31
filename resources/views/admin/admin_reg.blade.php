@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Perfil del administrador global</h2>
    <div class="panel panel-default table-responsive">

        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;"><br>

            @if(count($errors)>0)

                <div class = "alert alert-danger">
                   <strong>Aviso!</strong> Rectifique sus datos!
                </div>
            @else

            @endif
            <br>

            {!! Form::open(['method'=>'POST', 'action'=>'AdministradoresController@guardar_admin']) !!}
            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('lnombres','Nombres') !!}
                {!! Form::text('nombres', $ad->administrador->nombres, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidop','Apellido paterno') !!}
                {!! Form::text('apellidop', $ad->administrador->apellidop, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidom','Apellido materno') !!}
                {!! Form::text('apellidom', $ad->administrador->apellidom, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lacademia','Academia') !!}
                {!! Form::select('academia',[]+$academias, $ad->administrador->academia,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lnumero','Número de nómina') !!}
                {!! Form::text('numero', $ad->administrador->numero_control, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lmail','Correo electrónico') !!}
                {!! Form::text('mail', $ad->email, ['class'=>'form-control']) !!}
            </div>

            <div id = "pass_div" class="form-group">
                <label for="password" class="control-label">Contraseña</label>

                    <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div id = "passc_div" class="form-group">
                <label for="password-confirm" class="control-label">Confirmar contraseña</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
