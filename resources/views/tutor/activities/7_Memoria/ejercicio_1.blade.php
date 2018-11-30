@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">TEST DE MEMORIA
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>INSTRUCCIONES:</strong> Examínate a ti mismo mediante este test. Si su respuesta a una
                    pregunta es "si" o "verdadero", marque la casilla que se encuentra a continuación.
                    De lo contrario, déjela en blanco. Después sume los resultados obtenidos en cada
                    una de las columnas verticales y compárelos entre sí.<br><br>


                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_mem_1')}}">
                    {{csrf_field()}}


                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr style="background-color: lightgray">
                        <th colspan="5" style="text-align: center;">
                            Suma de puntos
                        </th>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Verbal</td>
                        <td style="text-align: center;">Visual</td>
                        <td style="text-align: center;">Cinestésica</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">{{$f1_decode}}</td>
                        <td style="text-align: center;">{{$f2_decode}}</td>
                        <td style="text-align: center;">{{$f3_decode}}</td>
                    </tr>
                    </thead>


                    </table>


                <br>

                Si usted reúne aproximadamente el mismo número de puntos en los tres tipos de
                memoria, eso significa que tiene facilidad para registrar y archivar de cualquiera de
                las tres formas cualquier recuerdo. Usted puede reforzar cualquier unidad de
                información verbal, visual o cinestésica con otros recuerdos (por ejemplo, recordar
                que se trataba del tres de trébol mediante una imagen visual de la carta, el recuerdo
                verbal al decir y escribir las palabras, y el recuerdo cinestésico al sentarse con las
                cartas en la mano y recordar que el tres de tréboles era la primera carta empezando
                por la derecha).<br><br>
                Si usted tiene una mejor memoria visual, recordar mayor si refuerza los recuerdos
                verbales y cinestésicos con una imagen visual. Escriba nombres, direcciones y
                números de teléfono, y obsérvelos. Hágase una imagen visual de los artículos de
                una lista. Visualice a esas personas que ha conocido con sus nombres colgados de
                la solapa o sosteniendo objetos que sugieran esos nombres. Cuando adquiera una
                nueva habilidad física, imagínese haciéndola, observe su cuerpo y sus manos
                mientras experimenta las sensaciones físicas en sus músculos, recuerden los
                colores y las formas de los árboles. Y las señales y los edificios cercanos a la
                parada de autobús en la que desea bajarse.<br><br>
                Si su fuerte es la memoria verbal, favorecerá su recuerdo si da nombres a las cosas.
                Reforzará el recuerdo de los rostros de las personas que le son presentadas si
                añade a éstos descripciones personales.<br><br>
                Confeccione listas mentales de las señales o los nombres de las tiendas cercanas a
                la parada de autobús donde debe bajar. Probablemente ya esté haciendo muchas
                de estas cosas sin pensarlo, pero aumente su número de forma que consolide
                conscientemente los recuerdos visuales y cinestésicos mediante un refuerzo verbal.
                Si su fuerte es la memoria cenestésica, probablemente recuerde dónde colocó, las
                cosas, pero puede tener problemas para recordar las instrucciones percibidas por
                escrito, las caras nuevas en las fiestas o la lista de la compra. Usted desearía añadir
                fuertes recuerdos cinestésicos a informaciones de otro tipo con el fin de contar con
                más formas de recordarlas. Cuando le presenten a una persona, repita su nombre
                mientras percibe la textura de su mano, siente sus músculos y recibe una
                determinada impresión de su estatura y sus movimientos. Sienta esto mismo cuando
                teclee o marque un número de teléfono.<br><br>

                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro" class="form-control"></textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal" class="form-control name_list center-block">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                            </td>
                        </tr>
                    </table>



                </form>
            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
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
