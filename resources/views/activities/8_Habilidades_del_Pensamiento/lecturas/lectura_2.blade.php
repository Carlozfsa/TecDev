@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">LA LECTURA</p></strong><br>

                En el siguiente espacio en blanco anote todos los problemas que le planteen la
                lectura y el aprendizaje. Sea severo consigo mismo. Cuanto mayor sea el número de
                problemas que identifique, más completos serán los progresos que realice.<br><br>

                Escriba su definición del término lectura.<br>

                <div class="form-group">
                    {!! Form::open() !!}
                    {!! Form::textarea('lectura', null,  ['class'=>'form-control']) !!}<br>
                    {!! Form::submit('Guardar', ['class'=>'btn-primary form-control']) !!}
                    {!! Form::close() !!}
                </div><br>

                Profesores de lectura y escritura han observado en los últimos cinco años que en
                sus clases se plantean siempre iguales problemas de carácter general. A
                continuación se ofrece una lista de los que surgen con mayor frecuencia. Conviene
                que el lector compare sus problemas con estos y que añada a su lista aquellos que
                le resulten aplicables (es probable que sean pocos):<br><br>
            </div>


            <table class="table table-responsive" border="0">
                <tr>
                    <td>visión</td>
                    <td>fatiga</td>
                    <td>recuerdo</td>
                    <td>velocidad</td>
                </tr>

                <tr>
                    <td>pereza</td>
                    <td>impaciencia</td>
                    <td>comprensión</td>
                    <td>aburrimiento</td>
                </tr>

                <tr>
                    <td>vocabulario</td>
                    <td>tiempo</td>
                    <td>interés</td>
                    <td>subvocalización</td>
                </tr>

                <tr>
                    <td>cantidad</td>
                    <td>análisis</td>
                    <td>tipografía</td>
                    <td>entorno</td>
                </tr>

                <tr>
                    <td>crítica</td>
                    <td>estilo literario</td>
                    <td>apuntes</td>
                    <td>motivación</td>
                </tr>

                <tr>
                    <td>selección</td>
                    <td>retención</td>
                    <td>apreciación</td>
                    <td>rechazo</td>
                </tr>

                <tr>
                    <td>edad</td>
                    <td>organización</td>
                    <td>concentración</td>
                    <td>temor</td>
                </tr>

                <tr>
                    <td>regresión</td>
                    <td>vuelta atrás</td>
                    <td>.....</td>
                    <td>.....</td>
                </tr>


            </table>

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
