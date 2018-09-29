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



                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="5" style="background-color: lightgray">QUE TIPO DE MEMORIA POSEES?</th>
                        </tr>
                    </thead>
                        <tr style="background-color: lightgray">
                            <th colspan="2">
                                Piense en lo que tomó esta mañana para
                                desayunar.
                            </th>
                            <td>Verbal</td>
                            <td>Visual</td>
                            <td>Cinestésica</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>
                                ¿Puede hacerse una imagen visual viva de
                                ello?
                            </td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                ¿Acaba de experimentar de nuevo el saber
                                y el olor?
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>¿Puede escribir todo lo que tomó</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                ¿Puede recordar la marca de los huevos,
                                los cereales, el café, el pan, la mermelada,
                                el zumo. etc.?
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td>5</td>
                        <td>
                            ¿Puede recordar el color del plato y de la
                            taza, el del mantel de la mesa, la forma de
                            la cuchara o si hacia sol o si estaba
                            nublado?
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>
                            ¿Puede recordar donde comió, como se
                            sentó y la posición de la comida en el plato?
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr style="background-color: lightgray">
                        <th colspan="2">
                            A continuación: imagine que está sentado
                            frente a la primera casa en la que recuerda
                            que vivió de niño
                        </th>
                        <td>Verbal</td>
                        <td>Visual</td>
                        <td>Cinestésica</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>
                            ¿Ve el color con claridad? ¿Tiene una
                            imagen fija del número de ventanas que
                            hay, del tipo de escalones y del número de
                            estos?
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>
                            ¿Recuerda la dirección y el número de
                            teléfono?
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>
                            Llegue hasta la puerta. ¿Puede recordar si
                            el pomo estaba a la izquierda o a la85
                            Febrero de derecha? Continúe avanzando una vez que
                            ha abierto la puerta. ¿El armario que hay
                            dentro está a la izquierda o a la derecha?
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr style="background-color: lightgray">
                        <th colspan="2">
                            Si la respuesta a las preguntas siguientes es
                            "verdadero", marque la casilla de la derecha
                        </th>
                        <td>Verbal</td>
                        <td>Visual</td>
                        <td>Cinestésica</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>
                            Normalmente soy muy consciente de la
                            colocación de los muebles en una
                            habitación.
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>
                            Si mis amigos pintaran el comedor de un
                            color nuevo, sin duda lo notaría
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>
                            Sé si mi despertador tiene los números
                            árabes o romanos
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>
                            Me sé mi número de la Seguridad Social.
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>14</td>
                        <td>
                            Soy bueno en los deportes y/o en el baile
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>15</td>
                        <td>
                            Soy consciente de los colores que me
                            rodean
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>16</td>
                        <td>
                            Obtengo siempre una buena puntuación en
                            lengua
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>17</td>
                        <td>
                            No tuve muchos problemas para aprender a
                            montar en bicicleta
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>18</td>
                        <td>
                            Siento una gran afición por los crucigramas
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr style="background-color: lightgray">
                        <th colspan="5">
                            Suma de puntos
                        </th>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr style="background-color: lightgray">
                        <th colspan="5">
                            Suma de puntos
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <td>Verbal =</td>
                        <td>Visual =</td>
                        <td>Cinestésica =</td>
                    </tr>
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
                teclee o marque un número de teléfono.<br>

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
