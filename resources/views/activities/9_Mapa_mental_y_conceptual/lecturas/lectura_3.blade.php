@extends('layouts.sideBarAlumno')

@section('content')

    <h2>MAPA MENTAL Y MAPA CONCEPTUAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">MAPA MENTAL Y MAPA CONCEPTUAL</p></strong><br>

                Los mapas conceptuales fueron desarrollados por el Profesor Joseph D. Novak de la
                Universidad de Cornell en el año 1960, basándose en las teorías de David Ausubel
                del aprendizaje significativo.<br>
                Procedimiento para su elaboración:<br><br>
                Para realizar un mapa conceptual es necesario tener en cuenta lo siguiente:<br><br>

                <ol>
                    <li>
                        Se requiere detectar o definir el objetivo final del aprendizaje, el cual apunta
                        hacia la apropiación significativa de los contenidos.
                    </li>

                    <li> Realizar una lectura detallada del tema o contenido a abordar en el mapa.</li>
                    <li>Identificar los conceptos clave presentes en el texto.</li>
                    <li>Determinar la jerarquización de dichas ideas o palabras clave.</li>
                    <li>Establecer las relaciones entre ellas.</li>
                    <li>Usar correctamente la simbología.</li>
                    <li>Tomar en consideración las palabras o enlaces mediante los cuales se
                        expresan las relaciones entre los conceptos clave de nuestros mapas.</li>
                    <li>No existe un listado predeterminado de palabras de enlace, pero algunas de
                        las más comunes pueden ser: donde, como, entonces, por, con, igual, etc. La
                        importancia de estos radica en el adecuado uso de estos términos en un
                        mapa conceptual, a manera de que indiquen el tipo de relación establecida
                        entre los conceptos organizados e ilustrar gráficamente la formación de
                        ciertos tipos de frases que tengan un significado con respecto al concepto
                        central acotado.</li>
                    <li>Considerar la conexión o cruce de los conceptos estructurados.</li>
                    <li>Verificar al finalizar el mapa si las conexiones entre los conceptos son claras y
                        explicitas, en caso contrario efectuar las correcciones necesarias para su
                        completa comprensión.</li>

                    <br>

                </ol>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:15%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mapas_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mapas_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/mapas_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/mapas_l_3')}}" style="background-color: lightgray;">Lectura 3</a></li>
            <li><a href="{{url('/mapas_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/mapas_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/mapas_l_6')}}">Lectura 6</a></li>
            <li>
                <a href="{{url('/mapas_l_4')}}" aria-label="Next">
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
