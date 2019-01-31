@extends('layouts.sideBarAlumno')

@section('content')

    <h2>MAPA MENTAL Y MAPA CONCEPTUAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">MAPA MENTAL Y MAPA CONCEPTUAL</p></strong><br>

                El mapa mental es una representación gráfica de una serie de ideas. Es una forma
                de organizar la información, en la que el tema principal se coloca en el centro y los
                temas o ideas secundarias se irradian y relacionan desde el centro (idea principal)
                sumando información, y así sucesivamente con nuevas ideas, esto nos posibilita una
                visión integrada y organizada de la información. Es una técnica, creada por el
                psicólogo Tony Buzan en el año 1970.<br><br>
                El mapa mental es una técnica que permite la organización y la manera de
                representar la información en forma fácil, espontánea, creativa, en el sentido que la
                misma sea asimilada y recordada por el cerebro. Asimismo, este método permite
                que las ideas generen otras ideas y se puedan ver cómo se conectan, se relacionan
                y se expanden, libres de exigencias de cualquier forma de organización lineal.<br><br>

                Utilidad:<br>

                <ul>
                    <li>
                        Los mapas mentales son muy útiles para almacenar datos, fomentar la
                        creatividad, y la memoria, y ayudan a ordenar y estructurar el pensamiento.
                        Además exploran todas las posibilidades creativas de un tema, desarrollan la
                        imaginación, la asociación de ideas y la flexibilidad.
                    </li>

                    <li>
                        Son útiles para cualquier actividad en la que intervenga el pensamiento.
                        Ayudan al cerebro a retener nuevos conceptos, nuevas ideas. También
                        incrementan la habilidad de la mente para ver todas las posibilidades
                        existentes y tomar rápidamente las decisiones correctas.
                    </li>

                    <li>
                        Estimula la creatividad del ser humano al no tener límites en su diseño. Es
                        una herramienta efectiva y dinámica en el proceso de aprendizaje y de
                        adquisición de información Pensamiento Irradiante.
                    </li>

                    <li>
                        Permiten establecer una organización de las ideas prioritarias que hay que
                        tener presentes en el desarrollo de un trabajo como; conferencia, libros,
                        clases, etc. Al mismo tiempo permite adquirir mayor seguridad personal y
                        claridad en la comunicación de ideas o información, además enseña a
                        reflexionar creativamente con un estilo personal y clarificar las ideas. En la
                        elaboración de un mapa mental se ejercitan procesos cognitivos como la
                        identificación, descripción, observación, comprensión, deducción e inducción.
                    </li>

                </ul>
                <br>

                <strong>¿Cuándo conviene utilizar los mapas metales?</strong><br>

                Cuando se requiere:<br>

                <ul>
                    <li>Tomar notas</li>
                    <li>Recordar información</li>
                    <li>Resolver problemas</li>
                    <li>Resolver problemas</li>
                    <li>Realizar presentaciones</li>
                </ul>
                <br>



                <strong>Características</strong><br>

                El mapa mental tiene 5 características esenciales, a saber:<br>

                <ul>
                    <li>El asunto o motivo de atención, se cristaliza en una imagen central.</li>
                    <li>Los principales temas de asunto irradian de la imagen central en forma
                        ramificada.</li>
                    <li>Las ramas comprenden una imagen o una palabra clave impresa sobre una
                        línea asociada.</li>
                    <li>Los puntos de menor importancia también están representados como ramas
                        adheridas a las ramas de nivel superior.</li>
                    <li>Las ramas forman una estructura nodal conectada.</li>
                </ul>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:8%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_5')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/pens_5')}}"><strong>Actividad previa</strong></a></li>
            <li><a href="{{url('/mapas_l_1')}}" style="background-color: lightgray;">Lectura 1</a></li>
            <li><a href="{{url('/mapas_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/mapas_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/mapas_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/mapas_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/mapas_l_6')}}">Lectura 6</a></li>
            <li>
                <a href="{{url('/mapas_l_2')}}" aria-label="Next">
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
