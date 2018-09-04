@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">
                El ser humano se puede definir como entidad, cuyos
                rasgos son universales, posee una identidad y cuyo
                componente esencial es el valor del cambio y del
                devenir.<br>
                Se define también como ser espiritual, pensante,
                animal racional y evolucionado, ser fabricante de
                instrumentos, que juega, hacedor de símbolos, capaz
                de decir no, ser capaz de esperar, de tener
                esperanza.<br>
                Es un ser creador, capaz de transformar al mundo y a sí mismo, aportando nuevos
                valores y obras. El concepto actual más reconocido y difundido del hombre, como
                ser creador, implica, e incluye, que es un ser evolucionado, racional, espiritual y
                simbólico (creador de símbolos). La característica de la espiritualidad del hombre es
                su capacidad de crear obras culturales. La actividad creadora implica la acción
                transformadora, original, libre, novedosa y creadora de nuevos valores.<br>
                Las dimensiones del ser humano integral son:
                Es una opinión predominante entre los pensadores y psicólogos humanistas
                sostener que el ser humano tiene tres niveles o estratos que se han desarrollado
                sucesiva e históricamente, a través del tiempo.<br>
                El primer nivel o base lo constituye el ser biológico: Portador de la programación
                genética que ordena su funcionamiento y desarrollo. El ser biológico o vitalidad
                primaria no es aprendido sino que viene dado por la herencia; sin embargo,
                investigaciones realizadas han demostrado que aunque es una dotación con que se
                nace, puede mejorarse o empeorarse de acuerdo al ambiente y al estilo de vida del
                sujeto.<br>
                El segundo nivel, o estrato, es el del ser social: Resulta de la programación social
                aprendida por la socialización y consiste en la cultura de su mundo de la que se
                apropia el sujeto, con su lenguaje, valores, normas, usos, costumbres y roles, que
                constituyen la conducta social aprendida.<br>
                Por último, el de más reciente surgimiento es el tercer nivel: es ser psicológico que
                es el ser individual, creativo y espiritual. Se refiere al nivel superior de la
                personalidad donde radica el centro referencial y coordinador de todas las
                actividades que es el yo y las formaciones centrales de la personalidad que son la
                concepción del mundo, el concepto de sí mismo, la autonomía o capacidad de
                pensar y actuar por sí propio, la capacidad de crear, de proyectar y de hacer
                proyectos de vida. Este tercer nivel es el factor esencial más importante del ser
                humano y que lo diferencia del resto de los animales.<br>
                El funcionamiento óptimo del ser humano requiere que seamos capaces de lograr la
                armonía, la concordancia, el equilibrio entre el ser animal, el ser social y el ser
                espiritual que conviven en cada uno de nosotros, constituyendo una unidad y
                también con los diferentes seres humanos que nos rodean. Todos los problemas y
                conflictos humanos fundamentales surgen de las discordancias, contradicciones y
                pugnas entre estos tres niveles y entre los seres humanos consecuentemente. Una
                medida adecuada, justa, de contradicción entre estos tres niveles o entre el individuo
                y la sociedad, estimula y promueve el desarrollo. Lo inadecuado y nocivo es cuando
                la dimensión del conflicto contradicción excede la medida de lo justo y puede
                determinar un antagonismo o ruptura donde debe haber armonía y equilibrio.<br>


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
