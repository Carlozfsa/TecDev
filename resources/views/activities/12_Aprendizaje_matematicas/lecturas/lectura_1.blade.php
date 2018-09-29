@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL APRENDIZAJE DE LAS MATEMÁTICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">EL APRENDIZAJE DE LAS MATEMÁTICAS</p></strong><br>

                Las capacidades para el aprendizaje de las matemáticas se han definido como
                aquellas potencialidades que el sujeto posee para realizar con éxito acciones
                intelectuales en el área de las matemáticas.<br><br>

                <strong>Objetivo</strong><br><br>

                Contribuir a desarrollar en el estudiante algunas de las capacidades más relevantes,
                que son necesarias para el aprendizaje de las Matemáticas; presentándoles
                problemas y ejercicios (no necesariamente dentro del contexto matemático), que lo
                hagan tomar en cuenta un análisis y ejerciten su raciocinio, con la finalidad de que al
                estudiar los contenidos matemáticos se encuentre en condiciones de asimilarlos.<br><br>

                <strong>CAPACIDADES</strong><br><br>

                <ul>
                    <li>
                        <strong>Comprensión de los enunciados:</strong><br>
                        Capacidad que el sujeto tiene para interpretar adecuadamente la información
                        contenida en un texto escrito, incluso a nivel de instrucciones o indicaciones.
                    </li><br>

                    <li>
                        <strong>Razonamiento matemático:</strong><br>
                        Capacidad de aplicar las matemáticas en situaciones nuevas y diferentes, es
                        de gran importancia para el éxito. Capacidad para procesar, analizar y utilizar
                        información en la Aritmética, el Álgebra y la Geometría. Es la de comprender
                        conceptos, proponer y efectuar algoritmos y desarrollar aplicaciones a través
                        de la resolución de problemas. En estas se consideran tres aspectos.<br><br>
                        <strong>En Aritmética</strong>, operaciones fundamentales (suma, resta, multiplicación,
                        división, potenciación y radicación) con números enteros y racionales,
                        cálculos de porcentajes, proporciones y promedios, series numéricas y
                        comparación de cantidades.<br><br>
                        <strong>En Álgebra</strong>, operaciones fundamentales con literales, simplificaciones de
                        expresiones algebraicas, simbolización de expresiones, operaciones con
                        potencias y raíces, factorización, ecuaciones y funciones lineales y
                        cuadráticas.<br><br>
                        <strong>En Geometría</strong>, perímetros y áreas de figuras geométricas, propiedades de
                        los triángulos (principales teoremas), propiedades de rectas paralelas y
                        perpendiculares y Teorema de Pitágoras.<br>
                    </li><br>

                    <li>
                        <strong>Razonamiento lógico:</strong><br>
                        Es la capacidad de establecer relaciones entre entidades separadas, la
                        función lógica de la mente se encarga de establecer las relaciones entre las
                        entidades separadas.<br>
                        Es decir una vez que el yo ha sido definido e identificado (pensamiento
                        analítico), la lógica trata de establecer las relaciones entre este yo y el medio.
                    </li><br>

                    <li>
                        <strong>Establecimiento de inferencias lógicas:</strong><br>
                        Se refiere a la habilidad de integrar información de una manera coherente, a
                        través de reglas establecidas que conducen a la obtención de conclusiones
                        válidas.
                    </li><br>

                    <li>
                        <strong>Abstracción reflexiva.</strong><br>
                        Capacidad de <strong>asumir un marco mental de forma voluntaria.</strong> Esto implica la
                        posibilidad de cambiar, a voluntad, de una situación a otra, de descomponer
                        el todo en partes y de analizar de forma simultánea distintos aspectos de una
                        misma realidad. Capacidad que permite discernir las propiedades comunes,
                        planear y asumir simulacros, <strong>pensar y actuar simbólicamente.</strong><br><br>

                        Se refiere a la capacidad del individuo de abstraer con criterio lógico mediante
                        la asociación de características, como forma, tamaño, color, posición entre
                        otras, en conjuntos o series de elementos numéricos o gráficos. Asimismo,
                        corresponde a la capacidad para interiorizar conceptos que no son tangibles o
                        concretos, tales como número, conjuntos de números, puntos, líneas,
                        superficies, etc.
                    </li><br>

                    <li>
                        <strong>Establecimiento de relaciones.</strong><br>
                        Se refiere a la capacidad del sujeto para apreciar diferencias y semejanzas en
                        las relaciones que existen entre los elementos de conjuntos dados.
                    </li><br>

                    <li>
                        <strong>Realizar generalizaciones.</strong><br>
                        Se refiere a la capacidad del sujeto para pasar de lo particular a lo general.
                        Esto es, extrapolar una propiedad de un conjunto menor a un conjunto mayor
                        que contiene al anterior y en el que también se verifica la propiedad.
                    </li><br>

                    <li>
                        <strong>Simbolización.</strong><br>
                        Se refiere a la capacidad del sujeto para representar expresiones del lenguaje
                        cotidiano por medio de signos convencionales. Esta capacidad implica la
                        facultad para traducir dichas expresiones al lenguaje simbólico y viceversa.
                    </li><br>

                    <li>
                        <strong>Imaginación.</strong><br>
                        Es la capacidad del sujeto para representar mentalmente imágenes de
                        objetos reales o ideales.
                    </li><br>

                </ul>

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
