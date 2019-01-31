@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>RELACIONES ANALÓGICAS</strong><br><br>

                <strong>Transferencia de relaciones</strong><br>
                Ahora observa la expresión siguiente:<br><br>

                Conejo es a bosque<br>
                Como trucha es a río<br><br>

                Te preguntarás qué relación hay entre conejo y bosque. Bueno, el conejo vive
                normalmente en el bosque y éste le proporciona alimento. Entonces se pueden
                repetir esas relaciones para trucha y río. Si, porque la trucha vive en el río que
                proporciona alimento a la trucha.<br>
                A esta manera de relacionar términos le llamamos analogía, relación que se repite
                de un contexto a otro diferente,
                En los casos del conejo y la trucha las relaciones de semejanza que se repiten son:
                vivir en, dar alimento a·<br><br>
                Observa otro ejemplo:<br><br>

                Noche es a luna como día es a sol, ¿Cuál podría ser la relación entre noche y luna?
                La luna aparece (o se ve normalmente) de noche.<br>
                La luna da luz en la noche.<br><br>

                ¿Se podrían transferir o repetir esas relaciones a las palabras "día" y "sol"?
                Si, el sol está asociado con el día.<br>
                El sol ilumina al día<br>
                Una relación es que el sol es la causa del día; sin embargo, la luna no es causa de
                la noche; esto significa que no todas las relaciones tienen que repetirse, só1o
                algunas de ellas En los ejemplos anteriores la relación se repite en una analogía en
                sentido horizontal, pero también se pueden analizar las relaciones verticales, la
                relación entre noche y día, del ejemplo anterior, es una relación de exclusión: "No
                hay noche cuando hay día" (aunque parezca tonto decirlo), de manera similar, "no
                hay sol cuando hay luna" (con alguna excepción)<br>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_11')}}" aria-label="Previous">
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
            <li><a href="{{url('/des_hum_int_l_9')}}">Lectura 9</a></li>
            <li><a href="{{url('/des_hum_int_l_10')}}">Lectura 10</a></li>
            <li><a href="{{url('/des_hum_int_l_11')}}">Lectura 11</a></li>
            <li><a href="{{url('/des_hum_int_l_12')}}" style="background-color: lightgray;">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_13')}}" aria-label="Next">
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
