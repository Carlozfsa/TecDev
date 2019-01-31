@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Registro de tutores</h2>
    <div class="panel panel-default table-responsive">

        <div class="panel-body" style="padding-left: 20%;padding-right: 20%;"><br>

            @if(count($errors)>0)

                <div class = "alert alert-danger">
                   <strong>Aviso!</strong> Rectifique sus datos!
                </div>
            @else

            @endif
            <br>

            {!! Form::open(['method'=>'POST', 'action'=>['tutoresController@guardar_edit_tutores', $t->numero_control]]) !!}
            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('lnombres','Nombres') !!}
                {!! Form::text('nombres', $t->nombres, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidop','Apellido paterno') !!}
                {!! Form::text('apellidop', $t->apellidop, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lapellidom','Apellido materno') !!}
                {!! Form::text('apellidom', $t->apellidom, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lacademia','Academia') !!}
                {!! Form::select('academia',[]+$academias, $t->academia ,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lnumero','Número de mómina') !!}
                {!! Form::text('numero', $t->numero_control, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lmail','Correo electrónico') !!}
                {!! Form::text('mail', $t->user->email, ['class'=>'form-control']) !!}
            </div>

            <div id = "pass_div" class="form-group">
                <label for="password" class="control-label">Contraseña nueva</label>

                    <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div id = "passc_div" class="form-group">
                <label for="password-confirm" class="control-label">Confirmar contraseña nueva</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
