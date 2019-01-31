@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>LA ACTITUD</strong><br>
                Es una predisposición efectiva y motivacional requerida para desarrollo de una
                determinada acción, posee también un componente cognitivo, un componente
                afectivo y un componente conductual (Saber ser) l. En la actitud lo fundamental es
                generar expectativa, porque así el estudiante se interesa y se motiva en su proceso
                de aprendizaje.<br>
                No obstante la actitud puede ser inversamente proporcional a la aptitud por un
                mecanismo de compensación de debilidades, como es el caso de quienes al
                reconocer sus debilidades en el área de matemáticas, en medio de la necesidad de
                aprender, se interesa más por aprender que aquello que tienen más habilidades
                para dicha área.<br><br>
                <strong>APTITUDES INTELECTIVAS</strong><br>
                Son habilidades mentales, que determinan el potencial de aprendizaje, también
                definidas como las capacidades para pensar y saber. Depende de la estructura
                mental, las funciones cognitivas, los procesos de pensamiento y las inteligencias
                múltiples.<br><br>
                <strong>APTITUDES PROCEDIMENTALES</strong><br>
                Se define como la capacidad para actuar y hacer. Están relacionadas con los
                métodos, técnicas, procesos y estrategias empleadas en el desempeño.<br><br>
                <strong>CONTENIDOS</strong><br>
                Es toda la estructura conceptual susceptible de ser aprendida. Su organización es
                vital para el proceso de aprendizajes. En la medida en que exista más coherencia
                entre ello, los estudiantes encontrarán las relaciones entre los mismos lo que a su
                vez aumentara su nivel de comprensión.<br>
                La comprensión de los conceptos determina el aprendizaje, más no el aprendizaje
                significativo.<br>
                De ahí decimos que quién sabe actuar, y lo hace bien porque además del dominio
                conceptual, comprende cómo funciona su pensamiento y como se interrelacionan los
                conceptos en ese proceso de aprendizaje, ha desarrollado la competencia.<br><br>

                <strong>¿Es posible aprender a pensar?</strong><br>
                Primeramente se debe aclarar a que tipo de pensamiento se refiere y que se
                entiende por pensar; pues la palabra “pensar” se emplea con distintas acepciones
                dependiendo del contexto y del propósito con el que se use. Cuantas veces se
                escucha de padres, maestros o amigos la palabra ¡Piensa! o bien ¡Piensa antes de
                hacer y no hagas para después pensar en lo que ya no puedes remediar! o ¿Qué
                piensas de tu infancia? Pensar suele estar asociada a recordar, exponer una idea,
                dar una opinión, analizar, reflexionar, argumentar.<br>
                El aprender a pensar de manera analítica, crítica, creativa y además ser consciente
                de ello, es una habilidad que se aprende y que es posible perfeccionar con el apoyo
                de estrategias y de la práctica constante. Existen ciertas habilidades de pensamiento
                que se activan de manera automática ante una situación. Estas habilidades pueden
                darse o activarse de manera inconsciente en el sentido de que el estudiante no se
                da cuenta ni de cómo se activan o de cómo hace uso de ellas, esta inconsciencia no
                permite que se haga un uso autorregulado de las habilidades de pensamiento<br>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/des_hum_int_l_2')}}"style="background-color: lightgray;">Lectura 2</a></li>
            <li><a href="{{url('/des_hum_int_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/des_hum_int_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/des_hum_int_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/des_hum_int_l_6')}}">Lectura 6</a></li>
            <li><a href="{{url('/des_hum_int_l_7')}}">Lectura 7</a></li>
            <li><a href="{{url('/des_hum_int_l_8')}}">Lectura 8</a></li>
            <li><a href="{{url('/des_hum_int_l_9')}}">Lectura 9</a></li>
            <li><a href="{{url('/des_hum_int_l_10')}}">Lectura 10</a></li>
            <li><a href="{{url('/des_hum_int_l_11')}}">Lectura 11</a></li>
            <li><a href="{{url('/des_hum_int_l_12')}}">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_3')}}" aria-label="Next">
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
