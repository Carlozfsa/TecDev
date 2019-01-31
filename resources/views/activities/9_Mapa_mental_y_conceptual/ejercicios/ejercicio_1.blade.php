@extends('layouts.sideBarAlumno')

@section('styles')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">--}}
@stop

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;"> Actividad a realizar:</p></strong><br>

                <p style="color: red"><strong>{{$ext}}</strong></p><br><br>

                @if($edit==0)

                    Produce uno de los mapas tratados en la sesión, con el concepto
                    “GLOBALIZACIÓN.<br>

                {!! Form::open(['method'=>'POST', 'action'=>'MapasController@store', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::file('file', null, ['class'=>'form-control']) !!}
                    </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', null, ['class'=>'form-control']) !!}
                </div>

                <br><br>
                {!! Form::close() !!}

                @else

                    Produce uno de los mapas tratados en la sesión, con el concepto
                    “GLOBALIZACIÓN.<br>

                    <div style="margin-left: 19%">
                        <img width="500" height=400" src="{{$f_decode1}}">
                    </div><br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'MapasController@edit', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::file('file_e', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Editar', null, ['class'=>'form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif


            </div>


        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mapas_l_6')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mapas_l_6')}}"><strong>Lecturas</strong></a></li>
            <li><a href="{{url('/mapas_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/esq_l_1')}}"><strong>Siguiente actividad</strong></a></li>
            <li>
                <a href="{{url('/esq_l_1')}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
  </div>
@stop

@section('scripts')
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>--}}
@stop
