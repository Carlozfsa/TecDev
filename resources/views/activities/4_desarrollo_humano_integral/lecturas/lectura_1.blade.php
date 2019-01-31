@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>PROCESO DE APRENDIZAJE POR COMPETENCIAS.</strong><br>


                Las competencias son un conjunto de conocimientos, habilidades y valores que
                convergen y permiten llevar a cabo un desempeño de manera eficaz, es decir, que el
                estudiante logre los objetivos de manera eficiente y que obtenga el efecto deseado
                en el tiempo estipulado y utilizando los mejores métodos y recursos para su
                realización.<br>
                La educación basada en competencias se refiere a una experiencia eminentemente
                práctica, que necesariamente se enlaza a los conocimientos para lograr un fin: el
                desempeño. En otras palabras, la teoría y la experiencia práctica se vinculan
                utilizando la teoría para aplicar el conocimiento a la construcción o desempeño de
                algo.<br>
                La construcción de competencias debe relacionarse con una comunidad específica,
                es decir, desde un entorno social, respondiendo a sus necesidades y de acuerdo
                con las metas, requerimientos y expectativas cambiantes de una sociedad abierta.
                Ahora se proponen diferentes esquemas con una diversificación de las situaciones
                del aprendizaje y la evaluación, que permiten al estudiante actuar de manera activa,
                de tal forma que pueda resolver problemas, aprender a aprender y ejercer, aplicando
                en forma práctica sus conocimientos y habilidades, a diferentes situaciones en
                diversos escenarios.<br>
                Se debe contemplar el aprendizaje como un proceso permanente, la automotivación
                como forma de aprendizaje y el trabajo en equipo.
                Las competencias se centran en el desempeño. No se separa el saber del saber
                hacer y del saber ser, el esfuerzo queda centrado en los resultados del desempeño
                en los que se integra.<br>
                Las habilidades se componen de un conjunto de acciones relacionadas, no se
                desarrollan aisladamente, se asocian a los conocimientos y a los valores y unos a
                otros se refuerzan, se desarrollan en secuencias.<br>
                Se busca que los estudiantes adquieran un aprendizaje significativo, que es el
                aprendizaje en el cual el proceso de formación reconfigura la información nueva con
                la experiencia, permitiéndole así integrar grandes cuerpos de conocimiento con
                sentido. De esa integración entre conocimiento con sentido y experiencia resulta el
                desarrollo de la competencia (Díaz, 1998:18).
                Los factores que intervienen en el proceso de aprendizaje son:<br>

                <div style="margin-left: 23%">
                    <img width="400" height=300" src="images/4_desarrollo_humano_integral/factores_proceso_de_aprendizaje.png">
                </div>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li><a href="{{url('/des_hum_int_l_1')}}" style="background-color: lightgray;">Lectura 1</a></li>
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
            <li><a href="{{url('/des_hum_int_l_12')}}">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_2')}}" aria-label="Next">
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
