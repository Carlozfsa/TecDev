@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Los procesos básicos del pensamiento son:</strong>
                 observación, descripción, comparación, clasificación, análisis, síntesis y evaluación;
                son los pilares
                fundamentales sobre los cuales se apoyan la construcción y la organización del
                conocimiento y el razonamiento y por ende bases para el desarrollo de la
                inteligencia.<br>
                A través de la observación, el individuo examina intencionalmente y de acuerdo a
                con su interés y pericia, una situación u objeto para detectar sus atributos,
                cualidades, propiedades o características.<br><br>

                <div style="margin-left: 23%">
                    <img width="400" height=300" src="images/4_desarrollo_humano_integral/procesos_basicos_pensamiento.png">
                </div><br>

                Para observar se requiere agudizar los sentidos, percibir y prestar atención selectiva
                para analizar y organizar la información en la memoria. El producto de la
                observación es la formación de imágenes mentales de aquello que fue observado y
                que puede ser evocado en cualquier momento.<br>
                La habilidad de observar es significativa para descubrir problemas y encontrar
                explicaciones. <br>
                Para favorecer este proceso se recomienda observar figuras,39
                visualizar imágenes reales, examinar objetos y plantear la búsqueda de atributos
                desde diferentes focos de interés.<br>
                El resultado de la observación se puede expresar en forma precisa y ordenada a
                través del lenguaje verbal o escrito, permitiendo enumerar e integrar las
                características observadas, en un todo significativo (Meza, 2004).<br>
                Este proceso cognitivo se conoce como descripción. Las actividades relacionadas
                con redacción de características o procedimientos, resúmenes de datos biográficos,
                organización de información leída, reconocimientos de relaciones entre objetos,
                estimulan este proceso.<br>


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
