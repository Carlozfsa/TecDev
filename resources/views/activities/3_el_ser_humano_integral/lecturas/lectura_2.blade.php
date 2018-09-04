@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">
                <strong>DIMENSION FISICA O BIOLOGICA.</strong><br>

                Los jóvenes deben de gozar de su plena capacidad física, pues a esta edad la
                fuerza, energía y resistencia se hallan en su punto máximo, en la actualidad los
                jóvenes de 20 años de edad son más altos que sus padres a causa de la tendencia
                secular del crecimiento; a los 30 y 40 años la estatura es estable luego comienza a
                disminuir. <br>
                El máximo desarrollo muscular se alcanza alrededor de los 25 a 30 años; después
                sobreviene de una pérdida gradual del 10%, entre los 30 y 60 años; la agudeza
                visual es máxima a los 20 años y empieza a decaer alrededor de los 40 cuando la
                propensión a la presbicia obliga a que muchas personas empleen lentes para leer.<br>
                La pérdida gradual de la capacidad auditiva empieza antes de los 25 años y se
                acentúan después de esa edad, en especial para los sonidos más altos. El gusto, el
                olfato y la sensibilidad al dolor y al calor solo empiezan a disminuir cerca de los 45
                años o más tarde.<br>

                <strong>Dieta</strong><br>
                El adagio “uno es lo que come” resume la importancia de la dieta para la salud
                mental y física. En una sociedad donde lo esbelto y el atractivo físico desempeña un
                papel importante, ser obeso puede acarrear graves problemas emocionales, también
                implican riesgos físicos. El riesgo de ser obeso es máximo entre los 25 y 35 años de
                edad, lo cual implica que los adultos jóvenes son el grupo objetivo principal en el
                empeño por prevenir este trastorno.<br>
                Las personas que son delgadas por naturaleza o que pierden peso por su voluntad
                tienen mejor pronóstico que las personas pesadas y las que pierden peso como
                consecuencia de una enfermedad. Aunque muchas personas que tienen sobrepeso
                pierden parte de este con ditas novedosas, la mayoría de ellas la recuperan de
                inmediato al retornar a sus hábitos alimenticios.<br>
                Como consecuencia el síndrome del “yo-yo” de fluctuación de peso o cíclico, puede
                ser el más peligroso de todos. Investigaciones recientes han demostrado que tanto
                la pérdida de peso como el sobrepeso están asociados con altas tasas de mortalidad
                por enfermedades, por lo tanto, la recomendación más saludable para las personas
                con sobrepeso es perderlo de modo gradual y mantenerse en el nuevo peso. En los
                siguientes cuadros se podrá observar el peso ideal tanto para hombres y mujeres de
                acuerdo con su estatura.<br>

            <div id="tabla_mujer" class="col-sm-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td colspan="4">MUJER</td>
                        </tr>
                    </thead>

                    <tr>
                        <td rowspan="2">Altura</td>
                        <td colspan="3">Contextura</td>
                    </tr>
                    <tr>
                        <td>Chica</td>
                        <td>Mediana</td>
                        <td>Grande</td>
                    </tr>

                    <tr>
                        <td>1.45</td>
                        <td>42,3- 45,3</td>
                        <td>44,3-49,3</td>
                        <td>48,3- 55,3</td>
                    </tr>
                    <tr>
                        <td>1,50</td>
                        <td>44,0- 48,0</td>
                        <td>47,0-53,0</td>
                        <td>50,0- 58,0</td>
                    </tr>
                    <tr>
                        <td>1,55</td>
                        <td>47,0-51,0</td>
                        <td>49,0-55,0</td>
                        <td>53,0- 60,0</td>
                    </tr>
                    <tr>
                        <td>1,60</td>
                        <td>50,0-54,0</td>
                        <td>53,0-58,0</td>
                        <td>56,0-64,0</td>
                    </tr>
                    <tr>
                        <td>1,65</td>
                        <td>53,0-57,0</td>
                        <td>56,0-63,0</td>
                        <td>60,0-68,0</td>
                    </tr>
                    <tr>
                        <td>1,70</td>
                        <td>57,0-61,0</td>
                        <td>59,0-66,0</td>
                        <td>63,0-71,0</td>
                    </tr>
                    <tr>
                        <td>1,75</td>
                        <td>60,0-65,0</td>
                        <td>63,0-70,0</td>
                        <td>67,0-76,0</td>
                    </tr>

                </table>
            </div>

            <div id="table_hombre" class="col-sm-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td colspan="4">HOMBRE</td>
                    </tr>
                    </thead>

                    <tr>
                        <td rowspan="2">Altura</td>
                        <td colspan="3">Contextura</td>
                    </tr>
                    <tr>
                        <td>Chica</td>
                        <td>Mediana</td>
                        <td>Grande</td>
                    </tr>
                    <tr>
                        <td>1,55</td>
                        <td>50,0-54,0</td>
                        <td>53,0-58,0</td>
                        <td>56,0-63,0</td>
                    </tr>
                    <tr>
                        <td>1,60</td>
                        <td>53,0-56,0</td>
                        <td>56,0-61,0</td>
                        <td>59,0-66,0</td>
                    </tr>
                    <tr>
                        <td>1,65</td>
                        <td>56,0-60,0</td>
                        <td>58,0-64,0</td>
                        <td>62,0-70,0</td>
                    </tr>
                    <tr>
                        <td>1,70</td>
                        <td>59,0-63,0</td>
                        <td>62,0-68,0</td>
                        <td>66,0-74,0</td>
                    </tr>
                    <tr>
                        <td>1,75</td>
                        <td>63,0-67,0</td>
                        <td>65,0-72,0</td>
                        <td>69,0-78,0</td>
                    </tr>
                    <tr>
                        <td>1,80</td>
                        <td>66,0-71,0</td>
                        <td>69,0-76,0 </td>
                        <td>73,0-83,0</td>
                    </tr>
                    <tr>
                        <td>1,85</td>
                        <td>70,0-75,0</td>
                        <td>73,0-81,0</td>
                        <td>78,0-87,0</td>
                    </tr>

                </table>
            </div>

        </div>
        <br>

        La dimensión física o biológica obedece a un programa genético producto de la
        evolución de la especie, incluye los aspectos físicos y estos a sus vez a los
        elementos corporales.<br>
        La dimensión física o biológica, por llevar la información propia de la especie, se
        convierte en la estructura en la cual descansan las otras dimensiones y puede
        conceptuarse como la evolución de los órganos, aparatos y sistemas,
        complementada con una categoría especial que es la psicomotricidad.<br>
        Especial papel juega el concepto de crecimiento en la dimensión biológica, el mismo
        que representa alguna de las modificaciones que se producen en el seno del
        organismo humano.<br>
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
