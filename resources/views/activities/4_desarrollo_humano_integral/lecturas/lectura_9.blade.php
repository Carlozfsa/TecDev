@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>c) Análisis y síntesis</strong><br>
                El análisis y la síntesis pueden estudiarse en dos planos: el empírico y el racional.
                En el plano empírico, estos procedimientos se aplican, por ejemplo, en la
                descomposición y recomposición del agua mineral, a partir del oxígeno, hidrógeno,
                calcio, azufre, litio, etc.<br>
                Con la finalidad de aclarar lo relativo al análisis y la síntesis, es conveniente precisar
                en qué medida intervienen en el pensamiento científico.<br>
                Todo conocimiento científico es, en realidad, la síntesis de muchos otros
                conocimientos anteriores. La hipótesis recogen sintéticamente los resultados de los
                experimentos.<br>
                Las teorías científicas representan la síntesis de todo un conjunto de conocimientos
                de relaciones muy generales. En toda investigación científica se utiliza
                frecuentemente el análisis con el fin de conocer mejor la naturaleza recóndita de los
                fenómenos. Pero este análisis no consiste solamente en la separación de los
                elementos de un todo. El análisis pretende ser dinámico, no se da el uno sin la otra.
                "Primero se analizan las manifestaciones inmediatas de la existencia, descubriendo
                sus aspectos fundamentales. Luego se sintetizan estos elementos en la
                reconstrucción racional de la existencia, que se formula por medio de una hipótesis
                explicativa."<br><br>

                <strong>d) Evaluación y juicio El análisis y la síntesis</strong><br>
                Después, cuando la hipótesis se ha convertido en teoría, se analiza la evolución de
                esta forma sintética sencilla, descubriendo así los elementos necesarios para
                practicar una síntesis superior. Y de ese modo se prosigue continuamente en el
                avance del conocimiento científico, que transcurre de la síntesis racional al análisis
                experimental, de la síntesis realizada en el experimento al empleo de la razón
                analizadora, del análisis del experimento al
                desenvolvimiento sintético del razonamiento, del análisis racional a la síntesis
                experimental.<br>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_8')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/des_hum_int_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/des_hum_int_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/des_hum_int_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/des_hum_int_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/des_hum_int_l_6')}}">Lectura 6</a></li>
            <li><a href="{{url('/des_hum_int_l_7')}}">Lectura 7</a></li>
            <li><a href="{{url('/des_hum_int_l_8')}}">Lectura 8</a></li>
            <li><a href="{{url('/des_hum_int_l_9')}}" style="background-color: lightgray;">Lectura 9</a></li>
            <li><a href="{{url('/des_hum_int_l_10')}}">Lectura 10</a></li>
            <li><a href="{{url('/des_hum_int_l_11')}}">Lectura 11</a></li>
            <li><a href="{{url('/des_hum_int_l_12')}}">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_10')}}" aria-label="Next">
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
