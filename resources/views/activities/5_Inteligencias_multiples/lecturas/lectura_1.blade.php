@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">INTELIGENCIAS MULTIPLES</p></strong><br>

                <div style="margin-left: 31%">
                    <img width="300" height=300" src="images/5_Inteligencias_multiples/int_mul.png">
                </div>

                <p>
                    <strong>Tipos de Inteligencias:</strong><br>
                    Al tener esta perspectiva más amplia, el concepto de inteligencia se convirtió en un
                    concepto que funciona de diferentes maneras en las vidas de las personas. Gardner
                    proveyó un medio para determinar la amplia variedad de habilidades que poseen los
                    seres humanos, agrupándolas en siete categorías o "inteligencias":<br><br>
                </p>

                <p>
                    <strong>a. Inteligencia lingüística:</strong><br>

                <div style="margin-left: 40%">
                    <img width="100" height=100" src="images/5_Inteligencias_multiples/ling.png">
                </div>

                Es la capacidad para usar palabras de manera efectiva, sea en forma oral o de
                manera escrita. Esta inteligencia incluye la habilidad para manipular la sintaxis o
                significados del lenguaje o usos prácticos del lenguaje. Algunos usos incluyen la
                retórica (usar el lenguaje para convencer a otros de tomar un determinado curso de
                acción), la mnemónica (usar el lenguaje para recordar información), la explicación
                (usar el lenguaje para informar) y el metalenguaje (usar el lenguaje para hablar del
                lenguaje)<br><br>

                </p>


                <p>
                    <strong>b- La inteligencia lógico matemática:</strong><br>

                <div style="margin-left: 40%">
                    <img width="100" height=100" src="images/5_Inteligencias_multiples/mat.png">
                </div>

                Es la capacidad para usar los números de manera efectiva y razonar
                adecuadamente. Esta inteligencia incluye la sensibilidad a los esquemas y
                relaciones lógicas, las afirmaciones y las proposiciones (si-entonces, causa-efecto),
                las funciones y las abstracciones. Los tipos de procesos que se usan al servicio de
                esta inteligencia incluyen: la categorización, la clasificación, la inferencia, la
                generalización, el cálculo y la demostración de la hipótesis.<br><br>

                </p>


                <p>
                    <strong>c- La inteligencia corporal-kinética:</strong><br>

                <div style="margin-left: 40%">
                    <img width="100" height=100" src="images/5_Inteligencias_multiples/kin.png">
                </div>

                Es la capacidad para usar todo el cuerpo para expresar ideas y sentimientos (por
                ejemplo un actor, un mimo, un atleta, un bailarín) y la facilidad en el uso de las
                propias manos para producir o transformar cosas (por ejemplo un artesano, escultor,
                mecánico, cirujano).
                Esta inteligencia incluye habilidades físicas como la coordinación, el equilibrio, la
                destreza, la fuerza, la flexibilidad y la velocidad asó como las capacidades auto
                perceptivas, las táctiles y la percepción de medidas y volúmenes.<br><br>

                </p>


                <p>
                    <strong>d- La inteligencia espacial:</strong><br>

                <div style="margin-left: 40%">
                    <img width="100" height=100" src="images/5_Inteligencias_multiples/esp.png">
                </div>

                Es la habilidad para percibir de manera exacta el mundo visual- espacial (por
                ejemplo un cazador, explorador, guía) y de ejecutar transformaciones sobre esas
                percepciones (por ejemplo un decorador de interiores, arquitecto, artista, inventor).
                Esta inteligencia incluye la sensibilidad al color, la línea, la forma, el espacio y las
                relaciones que existen entre estos elementos. Incluye la capacidad de visualizar, de
                representar de manera gráfica ideas visuales o espaciales.<br><br>

                </p>


                <p>
                    <strong>e- La inteligencia musical:</strong><br>

                <div style="margin-left: 40%">
                    <img width="100" height=100" src="images/5_Inteligencias_multiples/mus.png">
                </div>

                Es la capacidad de percibir (por ejemplo un aficionado a la música), discriminar (por
                ejemplo, como un crítico musical), transformar (por ejemplo un compositor) y
                expresar (por ejemplo una persona que toca un instrumento) las formas musicales.
                Esta inteligencia incluye la sensibilidad al ritmo, el tono, la melodía, el timbre o el
                color tonal de una pieza musical.<br><br>

                </p>

                <p>
                    <strong>f- La inteligencia interpersonal:</strong><br>

                <div style="margin-left: 40%">
                    <img width="100" height=100" src="images/5_Inteligencias_multiples/int.png">
                </div>

                Es la capacidad de percibir y establecer distinciones en los estados de ánimo, las
                intenciones, las motivaciones, y los sentimientos de otras personas. Esto puede
                incluir la sensibilidad a las expresiones faciales, la voz y los gestos, la capacidad
                para discriminar entre diferentes clases de señales interpersonales y la habilidad
                para responder de manera efectiva a estas señales en la práctica (por ejemplo
                influenciar a un grupo de personas a seguir una cierta línea de acción).<br><br>

                </p>





            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">

            <li><a href="{{url('/int_mult_l_1')}}" style="background-color: lightgray;">Lectura 1</a></li>
            <li><a href="{{url('/int_mult_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/int_mult_l_3')}}">Lectura 3</a></li>
            <li>
                <a href="{{url('/int_mult_l_2')}}" aria-label="Next">
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
