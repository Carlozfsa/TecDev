@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Análisis y Síntesis</strong><br><br>
                <strong>a) Análisis: Utilización del proceso</strong><br>
                Todos los fenómenos que se presentan a la consideración del hombre son
                demasiado complejos si se les examina con detenimiento. Son simples solo a
                primera vista. Si se requiere indagar las causas, se hace necesario separar en
                partes el fenómeno para estudiarlo de mejor manera. Pero como en esta separación
                pudiera cometerse errores, es imprescindible juntar de nuevo las partes del todo
                separado con el objeto de ver si se puede volver a integrar de igual forma. Si se nos
                encarga decidir sobre la calidad de un libro, primero tendremos que separarlo en
                partes para poder estudiarlo; podríamos considerar por separado el estilo literario,
                los aspectos temáticos y la facilidad para ser entendido. Esto facilitaría adentrarnos
                más en la obra. Una vez terminado este estudio, se reunirá en un todo lo que
                observamos por separado, el cual será nuestro veredicto con respecto a la calidad
                del libro.<br>
                Este procedimiento, utilizado en cuanto al libro, se repite cotidianamente en todos
                los asuntos de la vida.<br>
                La investigación científica no es ajena a estos procedimientos. El método científico
                emplea esta descomposición y recomposición. A la descomposición se le llama
                Análisis, y a la recomposición se le denomina Síntesis. El análisis es la operación
                intelectual que considera por separado las partes de un todo; la síntesis reúne las
                partes de un todo separado y las considera como unidad.<br><br>

                <strong>b) Síntesis</strong><br>
                Los conceptos de "todo" y " parte" se interrelacionan. El todo presupone las partes y
                las partes presuponen el todo.<br>
                Los todos, como composición de partes, son diversos. Existen "todos" que sólo
                suman partes, como un montón de naranjas; y todos unitarios, que como unidades
                dependen de diversos principios organizadores. Pueden estar organizados por
                relaciones físicas, como es el caso del átomo. Puede, en otro caso, considerarse
                como unidad por relaciones humanas o espirituales; tal es el caso de una pintura o
                un edificio, donde los elementos físicos cobran sentidlo sólo en función del hombre
                que es a la vez una de sus partes y su principio organizador.<br>
                "El análisis y la síntesis que estudia la lógica - dicen Romero y Pucciarelli - son
                procedimientos intelectuales, no materiales. No se trata de poner efectivamente por
                separado los componentes, sino de considerarlos por separado. El análisis material,
                que aleja uno de otro los componentes, es sólo un auxiliar del análisis intelectual, y
                no coincide con él por completo, ya que en el análisis se llega de ordinario a
                aspectos no materiales, corno veremos en seguida. Seria un grosero error concebir
                todo análisis sobre el modelo del análisis químico, o de cualquier otro procedimiento
                analítico material.<br>


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
