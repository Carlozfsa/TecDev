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

                Produce uno de los mapas tratados en la sesión, con el concepto
                “GLOBALIZACIÓN.

                {!! Form::open(['method'=>'POST', 'action'=>'MapasController@store', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::file('file', null, ['class'=>'form-control']) !!}
                    </div>

                {!! Form::close() !!}

            </div>


        </div>
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
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
