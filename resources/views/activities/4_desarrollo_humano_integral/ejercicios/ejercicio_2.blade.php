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
                    {!! Form::open(['mathod'=>'POST', 'action'=>'DesarrolloHumanoController@store_des_hum_int_2']) !!}
                        {!! Form::label('Rel1','1. Zapato es a calcetín como camisa es a camiseta') !!}<br>
                        {!! Form::label('Rel1','Relación(es) que se repite(n):') !!}
                        {!! Form::text('rel1', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('Rel2','2. Papel es a pluma como clavo es a martillo') !!}<br>
                        {!! Form::label('Rel2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('rel2', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('Rel3','3. Conejo es a rata como tigre es a gato.') !!}<br>
                        {!! Form::label('Rel3','Relación(es) que se repite(n):') !!}
                        {!! Form::text('rel3', null, ['class'=>'form-control']) !!}<br>




                    Ahora vamos a realizar un ejercicio diferente tratando de encontrar un término
                    faltante.
                    En equipos de dos encuentren el término que falta en la siguiente analogía y
                    justifiquen la respuesta."

                    <div class="form-group">
                            {!! Form::label('rel4','Ballena es a tiburón como elefante es a:') !!}<br>
                            {!! Form::text('rel4', null, ['class'=>'form-control']) !!}<br>

                        <div class="row" style="margin-left: 32%;">
                            {!! Form::submit('Guardar',['class'=>'btn btn-primary form-group col-sm-5']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div><br>


                    <strong>En este ejercicio el término faltante debe conservar la relación con "elefante" que
                        sea similar a la relación entre "ballena" y "tiburón".</strong>



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
