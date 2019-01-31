@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>ANALOGIAS</strong><br><br>

                <strong>a) Concepto y descripción de analogías:</strong>
                Es la relación de semejanza entre cosas
                diferentes o bien similares. Las analogías están destinadas determinar
                la capacidad del ser humano para identificar la relación que guardan entre sí dos
                términos bases o claves y encontrar en el grupo de las alternativas la que tenga la
                misma relación propuesta.<br>
                El número de las analogías es infinito y por lo tanto, el razonar es diferente en cada
                tipo. Para facilitar el aprendizaje de las mismas, señalaremos las relaciones
                analógicas principales.<br><br>

                <table class="table table-bordered">
                    <tr>
                        <th>RELACIÓN DE SINONIMIA:</th>
                        <td>
                            Cuando los términos propuestos son dos<br>
                            palabras sinónimas:<br>
                            Blanco Niveo<br>
                            Ósculo Beso<br>
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN DE ANTONIMIA:</th>
                        <td>
                            Cuando los términos propuestos expresan<br>
                            ideas opuestas:<br>
                            Albo Azabache<br>
                            Blanco Negro<br>
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN DE PARTE A TODO:</th>
                        <td>
                            Si el término primero especifica una parte y
                            el segundo su todo, debemos considerar si
                            la clave señala de parte principal a todo o
                            de parte opcional a todo, veamos los
                            ejemplos para distinguir según lo
                            planteado:
                            Ángulo Triángulo
                            Cara Poliedro
                            Cajón Mesa
                            Jardín Casa
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN DE TODO A PARTE:</th>
                        <td>
                            Si el primer término expresa una integridad
                            y el segundo señala una de sus partes,
                            asimismo, debemos tener en cuenta si la
                            parte es principal u opcional:
                            Bicicleta Manubrios
                            Planta Raíz
                            Carro Motor
                            Casa Cochera
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN DE INTENSIDAD:</th>
                        <td>
                            Cuando los términos propuestos expresan
                            una gradación, ésta puede ser creciente o
                            decreciente:
                            - +
                            Enfado Furor
                            Pobreza Miseria
                            + -
                            Diluvio Llovizna
                            Negro Gris
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN MITOLÓGICA:</th>
                        <td>
                            Cuando los términos propuestos se
                            relacionan con personajes de la Mitología:
                            Baco Vino
                            Centauro Caballo
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN COGENÉRICA:</th>
                        <td>
                            Cuando los términos propuestos
                            corresponden al mismo género:
                            Tibia Peroné
                            Omóplato Fémur
                        </td>
                    </tr>

                    <tr>
                        <th>RELACIÓN DE OBRA A AUTOR:</th>
                        <td>
                            Cuando el primer término se refiere a una
                            obra y el segundo a su autor:
                            “La Ilíada” Homero
                            “Trilce” Vallejo
                        </td>
                    </tr>

                </table>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_9')}}" aria-label="Previous">
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
            <li><a href="{{url('/des_hum_int_l_10')}}" style="background-color: lightgray;">Lectura 10</a></li>
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
