@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">INTELIGENCIAS MULTIPLES</p></strong><br>

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIAS</th>
                        <th colspan="3">TEMAS</th>
                    </tr>
                    </thead>

                    <tr>
                        <td></td>
                        <td>FACTORES ASOCIADOS CON LA
                            PÉRDIDA DE LA GUERRA CIVIL
                            POR PARTE DE LOS ESTADOS
                            DEL SUR DE EE.UU</td>
                        <td>DESARROLLO DE UN
                            PERSONAJE DE NOVELA</td>
                        <td>PRINCIPIOS DEL ENLACE
                            MOLECULAR</td>
                    </tr>

                    <tr>
                        <td>Lingüística</td>

                        <td>
                            Hacer una presentación oral o
                            entregar un informe escrito
                        </td>

                        <td>Hacer una interpretación
                            oral de la novela con
                            comentario
                        </td>

                        <td>Explicar el concepto en
                            forma oral o por escrito</td>
                    </tr>


                    <tr>
                        <td>Lógica y
                            matemática
                        </td>

                        <td>
                            Presentar estadísticas sobre
                            fallecimientos, heridos,
                            víveres, etc.
                        </td>

                        <td>
                            Presentar un cuadro
                            progresivo de causa y
                            efecto del desarrollo del
                            personaje
                        </td>

                        <td>
                            Escribir fórmulas químicas y
                            demostrar su procedencia
                        </td>
                    </tr>


                    <tr>
                        <td>Espacial
                        </td>

                        <td>
                            Dibujar mapas de batallas
                            importantes
                        </td>

                        <td>
                            Desarrollar un diagrama de
                            flujo o una serie de
                            bosquejos que ilustren el
                            ascenso y descenso del
                            personaje
                        </td>

                        <td>
                            Dibujar diagramas que
                            demuestren diferentes tipos
                            de enlaces
                        </td>
                    </tr>

                    <tr>
                        <td>Física y
                            cinestésica
                        </td>

                        <td>
                            Crear mapas tridimensionales
                            de batallas importantes y
                            representarlas con soldados
                            en miniatura
                        </td>

                        <td>
                            Actuar el papel del
                            personaje desde el
                            comienzo hasta el fin de la
                            novela, mostrando sus
                            cambios
                        </td>

                        <td>
                            Crear diversas estructuras
                            moleculares con cuentas
                            plásticas interbloqueadas de
                            muchos colores
                        </td>
                    </tr>


                    <tr>
                        <td>Musical
                        </td>

                        <td>
                            Reunir canciones de la guerra
                            civil que señalan factores
                            causales
                        </td>

                        <td>
                            Presentar el desarrollo del
                            personaje como una
                            partitura musical
                        </td>

                        <td>
                            Orquestar una danza que
                            exprese diferentes tipos de
                            enlaces (consultar a
                            continuación)
                        </td>
                    </tr>


                    <tr>
                        <td>Interpersonal
                        </td>

                        <td>
                            Diseñar una simulación por
                            parte de la clase sobre las
                            batallas importantes
                        </td>

                        <td>
                            Tratar los motivos profundos
                            y estados de ánimo que se
                            relacionan con el desarrollo
                        </td>

                        <td>
                            Demostrar el enlace
                            molecular valiéndose de los
                            compañeros como átomos
                        </td>
                    </tr>

                    <tr>
                        <td>Intrapersonal
                        </td>

                        <td>
                            Desarrollar su propio estilo
                            singular de demostrar su
                            capacidad
                        </td>

                        <td>
                            Relacionar el desarrollo del
                            personaje con nuestras
                            propias vivencias
                        </td>

                        <td>
                            Crear un álbum de recortes
                            que demuestren capacidad.
                        </td>
                    </tr>


                </table>

                <strong>
                    Alfonso Paredes Aguirre<br>
                    sardis.upeu.edu.pe/~alfpa/inteligencias.htm
                </strong>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/int_mult_l_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/int_mult_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/int_mult_l_2')}}" style="background-color: lightgray;">Lectura 2</a></li>
            <li><a href="{{url('/int_mult_l_3')}}">Lectura 3</a></li>
            <li>
                <a href="{{url('/int_mult_l_3')}}" aria-label="Next">
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
