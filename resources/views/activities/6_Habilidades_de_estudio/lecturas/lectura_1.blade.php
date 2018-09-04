@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES DE ESTUDIO EFECTIVO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">HABILIDADES DE ESTUDIO EFECTIVO</p></strong><br>

                <p>
                    <strong>Sugerencias para hacer más eficaz el estudio</strong><br>
                    Para estudiar de forma eficaz es necesario cumplir con una serie de requisitos, es
                    decir se debe tener claro los propósitos de estudio, una buena salud, disposición y
                    la motivación, contar con un ambiente adecuado para el aprendizaje, administrar
                    adecuadamente el tiempo y contar con los recursos necesario. Estos requisitos a
                    continuación se presentan.<br><br>

                    <strong>Definir los propósitos de estudio</strong><br>
                    En primer lugar, define claramente tus propósitos, o la meta que tratas de alcanzar
                    mediante el estudio. Pregúntate:” ¿para que estoy estudiando?”. Escoge una idea.
                    Redacta una lista de tus propósitos generales y repásala con frecuencia.<br><br>

                    <strong>La importancia de una buena salud para el estudio</strong><br>
                    Necesitas tener buena salud, tanto física como mental si deseas triunfar en tus
                    estudios. Para ello:<br>
                    <ul>
                    <li>1. Se ordenado en tus horas para los alimentos, en tus horas para dormir, y
                        constante en tus ejercicios físicos y en todos tus buenos hábitos personales.</li><br>

                    <li>2. Atiéndete oportunamente si tienes alguna enfermedad, aunque te parezca sin
                        importancia.</li><br>

                    <li>3. Aprende a resolver tus dificultades personales con calma y con orden para
                    conservar tu salud mental. Si no puedes hacer mucho para mejorarlas, intenta
                        aceptar lo que no se puede cambiar.</li><br>

                    <li>4. Afronta la realidad valientemente; no escapes a los hechos. Vive cada día de
                    forma realista de acuerdo con tu edad. </li><br>

                    <li>5. Afronta tus problemas personales que perturben tus estudios, dándoles la
                    solución más conveniente para eliminar las preocupaciones que te causan.
                    Pide consejo a una persona competente. </li><br>

                    Considera también que ninguna etapa de la vida esta libre de problemas, ni aun los
                    mejores años de estudiante, la vida en si incluye crecimiento, cambios, limitaciones,
                    toma de decisiones y ajustes, algunas veces agradables, otras veces
                    desagradables. Con una vida saludable, equilibrada y realista puedes aprovechar
                    mejor la oportunidad única que te brinda la universidad; dedicar todas tus energías y
                    esfuerzos para llegar a ser la persona que quieres ser.<br>
                    </ul>

                </p>



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
