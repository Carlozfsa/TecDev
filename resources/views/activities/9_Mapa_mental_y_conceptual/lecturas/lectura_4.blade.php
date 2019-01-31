@extends('layouts.sideBarAlumno')

@section('content')

    <h2>MAPA MENTAL Y MAPA CONCEPTUAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">MAPA MENTAL Y MAPA CONCEPTUAL</p></strong><br>

                <strong>Elementos básicos que diferencian los mapas conceptuales de otros recursos
                    gráficos</strong><br><br>

                <ol>
                    <li>
                        <strong>Ideas o Conceptos:</strong><br>
                        Se requiere detectar o definir el objetivo final del aprendizaje, el cual apunta
                        hacia la apropiación significativa de los contenidos.
                    </li><br>

                    <div style="margin-left: 23%">
                        <img width="400" height=100" src="images/9_Mapa_mental_y_conceptual/m1.png">
                    </div><br>

                    <li>
                        <strong>Proposición:</strong><br>
                        Es la frase con un significado determinado que se forma por 2 o más conceptos
                        unidos por palabras enlaces.
                        Una proposición es dos o más conceptos ligados por palabras enlaces en una
                        unidad semántica.
                    </li><br>

                    <div style="margin-left: 23%">
                        <img width="400" height=100" src="images/9_Mapa_mental_y_conceptual/m2.png">
                    </div><br>

                    <li>
                        <strong>Palabra enlace:</strong><br>
                        Son los verbos, las preposiciones, las conjunciones, el adverbio y
                        en general todas las palabras que no sean conceptos y que se utilizan para
                        relacionar estos y así armar una proposición. Permiten construir frases u oraciones
                        con significado lógico y hallar la conexión entre estos, se anotan en las líneas que
                        une a dos nodos.
                    </li><br>

                    <li>
                        <strong>La conexión o relación:</strong><br>
                        Entre dos ideas se presenta por medio de unan línea
                        inclinada, vertical u horizontal llamada conector o línea ramal que une a ambas
                        ideas.
                    </li><br>

                    <li>
                        <strong>Flechas:</strong><br>
                        Se puede utilizar en los conectores para mostrar que relación las ideas
                        o conceptos unidos se expresa primordialmente en un solo sentido; también se usan
                        para acentuar la direccionalidad de las relaciones, cuando se considera
                        indispensable.
                    </li><br>

                    <li>
                        <strong>Descriptores:</strong><br>
                        Son la palabra o las palabras que describen la conexión, se
                        escribe cerca de los conectores o sobre ellos.
                    </li><br>

                    <div style="margin-left: 23%">
                        <img width="400" height=200" src="images/9_Mapa_mental_y_conceptual/m3.png">
                    </div><br>

                    <li>
                        <strong>Jerarquización:</strong><br>
                        Los conceptos están dispuestos por orden de importancia o de
                        inclusividad. Sólo aparece una vez un mismo concepto. Las líneas de enlace pueden
                        termina en una flecha para indicar el concepto derivado.
                    </li><br>

                    <li>
                        <strong>Selección:</strong><br>
                        son una síntesis o resumen que contienen lo más significativo de un
                        tema. Se pueden elaborar submapas: que vayan ampliando diferentes partes o
                        subtemas del tema principal.
                    </li><br>

                    <li>
                        <strong>Impacto visual:</strong><br>
                        Un buen mapa conceptual es conciso y muestra las relaciones
                        entre las ideas principales de un modo simple y vistoso, aprovechando la notable
                        capacidad humana para la representación visual.
                    </li><br>

                </ol>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:15%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mapas_l_3')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mapas_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/mapas_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/mapas_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/mapas_l_4')}}" style="background-color: lightgray;">Lectura 4</a></li>
            <li><a href="{{url('/mapas_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/mapas_l_6')}}">Lectura 6</a></li>
            <li>
                <a href="{{url('/mapas_l_5')}}" aria-label="Next">
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
