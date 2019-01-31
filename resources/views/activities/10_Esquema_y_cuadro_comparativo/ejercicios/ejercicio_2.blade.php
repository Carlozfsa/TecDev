@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ESQUEMA (CUADRO SINÓPTICO) Y CUADRO COMPARATIVO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <p style="color: red"><strong>{{$ext}}</strong></p><br><br>


                <strong><p style="text-align: center;"> Actividad a realizar:</p></strong><br>

                @if($edit==0)

                    Realiza una tabla comparativa de las competencias específicas y genéricas de
                    las asignaturas que estas cursando.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'EsquemasController@store_esqs_2', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::file('file', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar', null, ['class'=>'form-control']) !!}
                    </div>

                    <br><br>
                    {!! Form::close() !!}

                @else

                    <div style="margin-left: 19%">
                        <img width="500" height=400" src="{{$f_decode1}}">
                    </div><br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'EsquemasController@edit_esqs_2', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::file('file_e', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Editar', null, ['class'=>'form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif


            </div>

            {{$ext}}

        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/esq_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/esq_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/esq_2')}}" style="background-color: lightgray;">Ejercicio 2</a></li>
            <li><a href="{{url('/ens_l_1')}}"><strong>Siguiente actividad</strong></a></li>
            <li>
                <a href="{{url('/ens_l_1')}}" aria-label="Next">
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
        var i=1;

        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
