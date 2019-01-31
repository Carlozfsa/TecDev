@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RESUMEN Y ENSAYO ACADÉMICO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">ENSAYO</p></strong><br>

                Ensayo, composición literaria escrita en prosa, de extensión variable, en que damos
                nuestras ideas y puntos de vista sobre un tema que investigamos porque nos
                interesa o nos es asignado.<br><br>

                Tiene por objeto presentar las ideas del autor sobre un tema y que se centra, por lo
                general, en un aspecto concreto. Con frecuencia, aunque no siempre, el ensayo es
                breve y presenta un estilo informal. El género se diferencia así de otras formas de
                exposición como la tesis, la disertación o el tratado.<br><br>

                El escrito, además de guardar unidad temática (no aborda en el mismo escrito temas
                ajenos al central), presenta unidad argumentativa, es decir, ofrece “pruebas”
                relevantes a favor de la tesis o la posición que se quiere defender (Bernard, 2000).
                Los argumentos son enunciados que apoyan a otros, lo que provoca que en el
                ensayo se hagan presentes argumentos principales y secundarios. El ensayo puede
                expresar: reflexiones propias del ensayista; resultados de una investigación no
                exhaustiva; inferencias de observaciones, experiencias y entrevistas; o una
                combinación de lo anterior.<br><br>

                Como estrategia de aprendizaje el ensayo es una excelente oportunidad para que el
                estudiante manifieste el nivel que ha desarrollado en el manejo de ciertas
                situaciones o contenidos.<br><br>

                <strong>Utilidad:</strong><br><br>

                Su principal aporte radica en la posibilidad que brinda para construir una reflexión
                acerca de un asunto, a través de su cuestionamiento crítico y el aporte de datos o
                argumentos que permitan entenderlo (el objeto) desde otras posibilidades o miradas.
                Los procesos cognitivos que se ejercitan en el momento de diseñarlo son:<br><br>

                identificación, descripción, contratación, comprensión, análisis, deducción, inducción,
                analogías, resolución de problemas, discernimiento y toma de decisiones.
                Características del ensayo<br><br>

                <ol>
                    <li>Estructura libre</li>
                    <li>Forma sintáctica</li>
                    <li>Extensión relativamente breve: Es recomendable que un ensayo no tenga
                        más allá de 4 ó 5 hojas, escritas en tamaño carta, a máquina o en
                        computadora, a doble espacio, por un solo lado. Una alternativa para no
                        desechar es que pueda ser escrito a mano, permitiendo corregir ortografía,
                        caligrafía y otros puntos.
                    </li>
                    <li>Estilo cuidadoso y elegante</li>
                    <li>Tono variado (profundo, poético, didáctico, satírico, etc.)</li>
                </ol><br>

                <strong>Debe ser</strong><br><br>

                <ol>
                    <li>Coherente: Se debe abordar un solo tema, no otros. Es algo así como un sólo
                        capítulo, articulado y afín.
                    </li>

                    <li>Objetivo: Debe utilizarse un lenguaje impersonal, objetivo, científico, técnico.
                        No es adecuado utilizar el lenguaje coloquial, ni el literario ni el periodístico.
                    </li>

                    <li>Personal: Debe ser el resultado de todo un proceso personal.</li>
                </ol>
                <br><br>

                <strong>Procedimiento para su elaboración:</strong><br>
                Para realizar un buen ensayo se deben tomar en cuenta las siguientes
                recomendaciones:<br><br>

                <ol>
                    <li>Determinar con claridad y precisión el tema del ensayo.</li>
                    <li>Tener presente que el ensayo requiere unidad temática (Tratar solo un tema).</li>
                    <li>Disponer de un marco de referencia personal sobre el objeto a ensayar.</li>
                    <li>Valorar si el marco de referencia es suficiente y pertinente.</li>
                    <li>De no ser así, indagar acerca del objeto para incrementar la información.</li>
                    <li>
                        Considerar sus elementos o estructura:
                        <ul>
                            <li>Datos de identificación.</li>
                            <li>Introducción</li>
                            <li>Introducción</li>
                            <li>Conclusión</li>
                            <li>Fuentes de información consultadas</li>
                        </ul>
                    </li>
                    <li>De ser necesario, dividir el escrito en subtemas.</li>
                    <li> Incorporar citas bibliográficas, hemerográficas o de cualquier tipo, que servirán de
                        sustento para la emisión de juicios y argumentos</li>
                    <li>Para el desarrollo del ensayo es conveniente enlistar, previamente los puntos a
                        considerar y con base en esta lista iniciar el escrito.</li>
                    <li>Revisar para verificar la presencia de criterios como: estructura (que estén
                        presentes todos los elementos del ensayo); pertinencia (que el escrito guarde
                        relación directa con el tema y con lo que se exige de él); coherencia (que los
                        elementos mantengan secuencia temática y que los párrafos estén vinculados entre
                        sí); peso argumentativo (que cada juicio u opinión esté respaldado en pruebas o
                        evidencias).</li>
                </ol>



            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:30%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/ens_l_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/ens_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/ens_l_2')}}" style="background-color: lightgray;">Lectura 2</a></li>
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
