@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Realicemos ahora un ejemplo más complejo en donde se ven una gran variedad de
                    posibles relaciones Y analogías.</strong><br><br>

                Futbol es a banda musical como ajedrez es a________________________________<br><br>

                <strong>¿Cuál es la palabra que falta?</strong> <br>
                Puede haber varias soluciones, pero lo importante es
                justificarlas· En este caso las relaciones entre futbol y banda musical pueden ser las
                siguientes:<br><br>


                <strong>Horizontalmente (futbol-banda musical):</strong><br>
                · Ambos son actividades de diversión<br>
                · Ambos son similares en cuanto al número de integrantes<br>
                . Son diferentes en cuanto que el primero es un juego y la banda de música se
                relaciona con el arte.<br>
                · Ambos se asemejan en que dirigen a público<br>
                Verticalmente (futbol-ajedrez):<br>
                - Ambos son Juegos<br>
                - El fútbol implica movimientos físicos y el ajedrez mentales<br>
                - En el fútbol juegan varios, en el ajedrez sólo dos<br>
                ¿Qué palabras te permiten conservar todas o algunas de esas relaciones?<br>
                ¿Cuáles son las relaciones que se repiten horizontal y verticalmente?<br>

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
