@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Hipótesis</strong><br>
                Las hipótesis Son suposiciones que relacionan una variable con otra y que serán
                probadas a través de la investigación, con el fin de ser aceptadas o rechazadas por
                medio de los resultados obtenidos.<br>
                Son ante todo, enunciados que expresan afirmaciones o negaciones sobre la
                realidad.<br>
                Las hipótesis tienen las siguientes características:<br>
                • Pueden ser o no verdaderas<br>
                • Se refieren a una situación real<br>
                • Se refieren a una sola relación entre variables<br>
                • Precisas, concretas, clara s y lógicas<br>
                • Se refieren a variables y relaciones observables y medibles<br>
                • Consideran técnicas disponibles para su contraste<br>
                Un concepto es una unidad cognitiva de significado, un contenido mental que a
                veces se define como una "unidad de conocimiento".<br><br>


                <strong>Concepto</strong><br>
                Un concepto es una unidad cognitiva de significado, un contenido mental que a
                veces se define como una "unidad de conocimiento".<br>
                Los conceptos son construcciones o imágenes mentales, por medio de las cuales
                comprendemos las experiencias que emergen de la interacción con nuestro entorno.<br>
                Estas construcciones surgen por medio de la integración en clases o categorías que
                agrupan nuestros conocimientos y experiencias nuevas con los conocimientos y
                experiencias almacenados en la memoria.<br>

                <div style="margin-left: 23%">
                    <img width="400" height=300" src="images/4_desarrollo_humano_integral/conceptos.png">
                </div><br>


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
