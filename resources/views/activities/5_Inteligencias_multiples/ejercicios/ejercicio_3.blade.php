@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">EJERCICIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <p style="text-align: center;">
                    <strong>Aptitud Lógica</strong><br>
                </p>

                <p>
                    <strong>3. Aptitud Lógica: </strong> Se practica el razonamiento en cuanto a su validez o
                    invalidez, y se ejercitan los métodos inductivos e investigación operativa.
                </p><br>

                <strong>EJERCICIOS PARA DESARROLLAR LA LÓGICA</strong><br>

                <p>
                    I. EN BÚSQUEDA DE EVIDENCIAS
                    Te presentan cuatro tarjetas diciéndote que las de dorso gris claro tienen
                    círculos en la otra cara, y las de dorso negro no. Dos de las tarjetas están con
                    el dorso hacia arriba, y las otras dos hacia abajo. ¿Cuál es el mínimo de
                    tarjetas que deberás dar vuelta para probar la verdad o falsedad de la
                    afirmación acerca de que hay un círculo en la otra cara de las tarjetas de
                    dorso gris claro?
                </p>

                <div style="margin-left: 23%">
                    <img width="400" height=200" src="images/5_Inteligencias_multiples/log1.png">
                </div>

                {!! Form::open(['method'=>'POST', 'action'=>'InteligenciaController@store_int_mult_ej_3']) !!}

                <table>
                    <tr>
                        <div class="form-group">
                            <td>{!! Form::label('r1.1', 'R=') !!}</td>
                            <td class="col-sm-12">{!! Form::text('log_1', null, ['class'=>'form-control']) !!}</td>
                        </div>
                    </tr>
                </table><br>

                <div class="row" style="margin-left: 22%;">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
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
