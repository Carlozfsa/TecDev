@extends('layouts.sideBarAlumno')

@section('content')

    <h2>MAPA MENTAL Y MAPA CONCEPTUAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">MAPA MENTAL Y MAPA CONCEPTUAL</p></strong><br>

                <strong>Características de Mapas conceptuales</strong><br><br>

                <ul>
                    <li>Deben ser simples y mostrar claramente las relaciones entre conceptos
                        y/o proposiciones.
                    </li>
                    <li>Van de lo general a lo específico, las ideas generales o inclusivas, ocupan
                        la parte superior de la estructura y las más especificas y los ejemplos la
                        parte inferior.
                    </li>
                    <li>Deben ser vistosos, mientras más visual se haga el mapa, la cantidad de
                        asignatura que se logra memorizar aumenta y se acrecienta la duración de
                        esa memorización, ya que se desarrolla la percepción.
                    </li>
                    <li>Los conceptos nunca se repiten, van dentro de óvalos y las palabras
                        enlaces se ubican cerca de las líneas de relación.
                    </li>
                    <li>Los conceptos se escriben con letra mayúscula y las palabras de enlace
                        en minúsculas, pudiendo ser distintas a las utilizadas en el texto, siempre y
                        cuando se mantenga el significado de la proposición.
                    </li>
                    <li>Para las palabras enlaces se pueden utilizar verbos, preposiciones,
                        conjunciones, u otro tipo de nexo conceptual, las palabras enlaces le Si la
                        idea principal es dividida en dos o más conceptos iguales, estos conceptos
                        deben ir en la misma línea o altura.
                    </li>
                    <li>El mapa conceptual es una forma breve de representar información.</li>
                    <li>Generar ideas (brain storming, etc.);</li>
                    <li>Diseñar una estructura compleja (textos largos, hipermedia, páginas web
                        grandes, etc.);</li>
                    <li>Comunicar ideas complejas;</li>
                    <li>Contribuir al aprendizaje integrando explícitamente conocimientos nuevos
                        y antiguos;</li>
                    <li>Evaluar la comprensión o diagnosticar la incomprensión;</li>
                    <li>Fomentar el aprendizaje significativo para mejorar el éxito de los
                        estudiantes;</li>
                    <li>Medir la comprensión de conceptos.</li>
                </ul>
                <br>
                <br>

                <strong>Procedimiento para su elaboración:</strong><br><br>

                Para realizar un mapa conceptual es necesario tener en cuenta lo siguiente:<br>

                <ol>
                    <li>Se requiere detectar o definir el objetivo final del aprendizaje, el cual apunta
                        hacia la apropiación significativa de los contenidos</li>
                    <li>Realizar una lectura detallada del tema o contenido a abordar en el mapa.</li>
                    <li>Identificar los conceptos clave presentes en el texto.</li>
                    <li>Determinar la jerarquización de dichas ideas o palabras clave.</li>
                    <li>Establecer las relaciones entre ellas.</li>
                    <li>Usar correctamente la simbología.</li>
                    <li>Tomar en consideración las palabras o enlaces mediante los cuales se
                        expresan relaciones entre los conceptos clave de nuestros mapas.</li>
                    <li>No existe un listado predeterminado de palabras de enlace, pero algunas de
                        las más comunes pueden ser: donde, como, entonces, por, con, igual, etc. La
                        importancia de estos radica en el adecuado uso de estos términos en un
                        mapa conceptual, a manera de que indiquen el tipo de relación establecida
                        entre los conceptos organizados e ilustrar gráficamente la formación de
                        ciertos tipos de frases que tengan un significado con respecto al concepto
                        central acotado.</li>
                    <li>Considerar la conexión o cruce de los conceptos estructurados.</li>
                    <li>Verificar al finalizar el mapa si las conexiones entre los conceptos son claras y
                        explicitas, en caso contrario efectuar las correcciones necesarias.</li>
                </ol>



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
