@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RESUMEN Y ENSAYO ACADÉMICO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">RESUMEN</p></strong><br>

                Un resumen es la forma abreviada de un texto original, al que no se le han agregado
                nuevas ideas y que representa en forma objetiva, pero más acotada, los contenidos
                de un texto o escrito en particular. La objetividad de un resumen resulta de gran
                importancia, ya que junto a la brevedad, son los elementos esenciales para poder
                hablar de la realización de un resumen.<br><br>

                Constituye una redacción escrita, principales de un texto (respetando las ideas del
                autor) es un procedimiento derivado de la comprensión de la lectura.<br><br>

                “Resumir es deducir a términos breves y precisos o considerar sólo lo esencial de un
                texto” (García, 2002:69), es el extracto y abstracción de la información relevante de
                un discurso oral o escrito, enfatiza conceptos calve principios, términos y
                argumentos centrales.<br><br>

                Existen una gran variedad de autores que efectúan una diferenciación entre síntesis
                y resumen, desde la perspectiva de Díaz- Barriga (postura que tomamos como base
                en este trabajo) la elaboración de un resumen presupone la comprensión de lo
                estudiado, de manera que puedes escribir en tus opiniones palabras, la síntesis de
                lo que se explica en un tema, sin cambiar las ideas centrales. La elaboración de
                resúmenes no es una actividad que se pueda tomar a la ligera, la creación de un
                buen resumen implica la ejercitación de varios procesos cognitivos como: la
                observación, el análisis, la organización lógica, memorización.<br><br>

                <strong>Utilidad:</strong>
                Al efectuar un resumen puedes desarrollar capacidades de abstracción, utilizando
                las habilidades de lectura y la capacidad de expresión escrita.<br><br>

                Perfeccionar la lectura pues ha de ser atenta, activa y provechosa, puede servir
                como apoyo para aumentar el nivel de concentración, retención y asimilación en el
                momento de estudiar, sintetizar y comentar el contenido de un texto.
                Procedimiento para su elaboración:<br><br>

                <strong>Algunas reglas que puedes seguir para elaborar resúmenes son las siguientes:</strong><br><br>

                <ol>
                    <li>Llevar a cabo dos lecturas del material a resumir. La primera para tener una
                        idea general del contenido, y la segunda, para identificar, a partir de la
                        estrategia de subrayado identificar las ideas centrales.</li>
                    <li>De ser necesario deben aclarase todas las dudas relativas al texto.</li>
                    <li>Anotar las ideas subrayadas a manera de listado esto a fin de tenerlas
                        presentes y a la mano para la redacción final del resumen.</li>
                    <li>Elimina el material innecesario o secundario.</li>
                    <li>Elimina el material importante pero redundante. ( es el que se repite o da la
                        misma información) Para localizar el material redundante te puedes ayudar
                        de algunos de los signos de puntuación que te ponen sobre aviso de lo que
                        se dirá después de ellos, no se refiere a información diferente. Los signos de
                        puntuación más usados para esto son los dos puntos (:) y el punto y coma (;).</li>
                    <li>Señala que descartaras, aquellas frases u oraciones que pudieron haberte
                        ayudado a comprender los asuntos esenciales, en el momento de estudiar,
                        pero que, después de analizar el texto, te das cuenta de que puedes
                        prescindir de ellas.</li>
                    <li>El resumen no debe de exceder en su extensión la cuarta parte del texto que
                        se resume.</li>
                </ol>
                <br><br>

                <strong>Un resumen se estructura en las siguientes partes:</strong><br><br>

                <ol>
                    <li>Sección de referencia (encabeza el resumen) Elementos : Autor, título, fuente,
                        fecha y paginas</li>
                    <li>Cuerpo = se trataría del resumen propiamente dicho</li>
                    <li>Clasificación = si el sistema lleva un sistema de clasificació</li>
                    <li>Sección de firma = autor del resumen</li>
                </ol>



            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:20%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/esq_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/esq_2')}}"><strong>Actividad previa</strong></a></li>
            <li><a href="{{url('/ens_l_1')}}" style="background-color: lightgray;">Lectura 1</a></li>
            <li><a href="{{url('/ens_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/ens_l_3')}}">Lectura 3</a></li>
            <li>
                <a href="{{url('/ens_l_3')}}" aria-label="Next">
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
