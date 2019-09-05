@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Primer registro</div>

                <div class="panel-body">
                <br>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        {{--<div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">--}}
                            {{--<label for="role_id" class="col-md-4 control-label">Tipo de usuario</label>--}}

                            {{--<div class="col-md-6">--}}

                                {{--<select id="role_id" class = "form-control" name="role_id">--}}
                                    {{--<option value="0">--Seleccione un tipo de ususario--</option>--}}
                                    {{--<option value="1">Alumno</option>--}}
                                    {{--<option value="2">Docente Tutor</option>--}}
                                {{--</select>--}}

                            {{--@if ($errors->has('role_id'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('role_id') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div id = "num_div" class="form-group{{ $errors->has('numero_control') ? ' has-error' : '' }}">
                            <label id = "ncl" for="name" class="col-md-4 control-label">Número de control</label>

                            <div class="col-md-6">
                                <input id="numero_control" type="text" class="form-control" name="numero_control" value="{{ old('numero_control') }}" required autofocus>

                                @if ($errors->has('numero_control'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero_control') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div id = "mail_div" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div id = "pass_div" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div id = "passc_div" class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@stop
