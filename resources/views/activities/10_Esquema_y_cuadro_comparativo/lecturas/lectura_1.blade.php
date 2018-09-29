@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ESQUEMA (CUADRO SINÓPTICO) Y CUADRO COMPARATIVO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">ESQUEMA (CUADRO SINÓPTICO) Y CUADRO COMPARATIVO</p></strong><br>

                De manera general se considera un esquema a la estructura sobre la cual se
                asienta un tema, es decir el esquema es la representación concentrada de un tema
                en una organización que dé cuenta de las relaciones existentes entre los diversos
                componentes del texto, a fin de que quien lo vea pueda observar con relativa
                facilidad la intención o idea central del texto. A manera de conclusión se puede
                mencionar que es como el armazón a partir del cual se desarrolla la totalidad del
                texto.<br>
                Existen numerosos tipos de esquemas: sangrado, barras y puntos, llaves, letras,
                números, mixtos…cada cual tiene sus ventajas e inconvenientes, por ejemplo el de
                sangrado es menos vistoso pero de más sencilla realización mientras que el de
                llaves que es el más vistoso tiene la dificultad de que la mayor parte de la
                información tiende a agruparse en el lado izquierdo. He aquí algunos modelos de
                esquemas:<br><br>

                Un cuadro sinóptico es una de los esquemas más utilizados y se define como
                representación sintética que permite organizar, clasificando de manera lógica lo
                concepto y sus relaciones.<br>
                El cuadro sinóptico proporciona una estructura global coherente de una temática y
                sus múltiples relaciones. Los cuadros sinópticos pueden presentarse por medio de
                llaves y tomar forma de diagramas o pueden estar compuestos por filas y columnas
                a manera de tablas.<br><br>

                <strong>Característica:</strong><br>

                <ol type="a">
                    <li>Se organiza de lo general a lo particular, de izquierda a derecha en un orden
                        jerárquico.
                    </li>

                    <li>Se utilizan llave para clasificar la información.</li>
                </ol>
                <br>

                <strong>Utilidad:</strong><br>

                Sea cual sea el modelo de esquema la elaboración del propio esquema reporta para
                el estudiante numerosos beneficios, entre los cuales destaca:<br>
                Ejercita en su elaboración otras estrategias como la lectura, el subrayado y la toma
                de notas.<br>

                <ol>
                    <li>Aumenta la capacidad de atención, concentración, favorece procesos
                        cognitivos como la observación y la identificación al concretar las ideas
                        generales, principales y secundarias del texto a analizar.
                    </li>

                    <li>Incrementa notablemente la comprensión ya que la elaboración implica</li>

                    <li>Profundizar en el contenido para descubrir las ideas fundamentales.</li>

                    <li>Posibilita desarrollar procesos cognitivos como el análisis y síntesis.</li>

                    <li>Permite captar de un sólo golpe de vista, gráficamente, la estructura esencial
                        de cualquier tema.</li>
                </ol>
                <br>

                <strong>Procedimiento para su elaboración:</strong><br>

                Para su elaboración y conservación pueden seguirse las siguientes
                recomendaciones:
                <br>

                <ol>
                    <li>Efectuar la lectura detallada del tema.</li>
                    <li>Al momento de realizar la lectura, realizar notas al margen y el subrayado de
                        las ideas principales y/o los conceptos clave.</li>
                    <li>Ordenar jerárquicamente las ideas más relevantes del texto.</li>
                    <li>Utilizar sólo y exclusivamente palabras claves.</li>
                    <li>Dejar márgenes amplios.</li>
                    <li> Emplear algún sistema de rápida documentación, principalmente si se usara
                        posteriormente de manera repetida.</li>
                </ol>
                <br>

                En general la confección de un esquema resulta sumamente simple si de antemano
                se sabe que la idea general de un tema viene a ser el título del mismo. Las ideas
                principales.<br>
                Son las notas al margen que previamente se escribieron, las ideas secundarias
                corresponden con a el subrayado y las ideas detalle son los ejemplos entre otras.<br><br><br>

                <strong>Dicho de otro modo:</strong><br><br>
                Idea general = Título<br>
                Ideas principales = Notas marginales<br>
                Ideas secundarias = Subrayado<br>
                Ideas detalle = Ejemplos<br>
                <br><br>

                <div style="margin-left: 5%">
                    <img width="700" height=500" src="images/10_Esquema_y_cuadro_comparativo/ej1.png">
                </div><br>


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
