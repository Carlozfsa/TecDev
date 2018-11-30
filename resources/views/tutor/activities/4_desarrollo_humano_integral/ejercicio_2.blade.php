@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>EJERCÍTATE</strong><br>

                Establece las relaciones que se repiten del primer par de palabras al segundo par
                (sentido horizontal). Debes, también, establecer todas las relaciones posibles o
                importantes entre el primer par de palabras y luego analizar cuá1 o cuáles se repiten
                en el segundo par.<br><br>

                <div class="form-group">
                    {!! Form::open(['mathod'=>'POST', 'action'=>'TutorDesarrolloHumanoController@store_des_hum_int_2']) !!}
                        {!! Form::label('Rel1','1. Zapato es a calcetín como camisa es a camiseta') !!}<br>
                        {!! Form::label('Rel1','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel1', $f1_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('Rel2','2. Papel es a pluma como clavo es a martillo') !!}<br>
                        {!! Form::label('Rel2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel2', $f2_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('Rel3','3. Conejo es a rata como tigre es a gato.') !!}<br>
                        {!! Form::label('Rel3','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel3', $f3_decode, ['class'=>'form-control']) !!}<br>


                    Ahora vamos a realizar un ejercicio diferente tratando de encontrar un término
                    faltante.
                    En equipos de dos encuentren el término que falta en la siguiente analogía y
                    justifiquen la respuesta."

                    <div class="form-group">
                            {!! Form::label('rel4','Ballena es a tiburón como elefante es a:') !!}<br>
                            {!! Form::label('rel4', $f4_decode, ['class'=>'form-control']) !!}<br>


                    </div><br>


                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro" class="form-control"></textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal" class="form-control name_list center-block">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                            </td>
                        </tr>
                    </table>
                    {!! Form::close() !!}


                </div>


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
