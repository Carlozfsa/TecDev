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
                    <strong>El ambiente apropiado para estudiar</strong><br>
                    Las condiciones ambientales en las que estudies son de gran importancia, ya que si
                    estas son inadecuadas y deficientes, influyen dificultando la concentración y , en
                    consecuencia, la comprensión; también influyen en una mala administración del
                    tiempo de estudio, lo cual se nota al percibir que no queda tiempo para otras
                    actividades propias de a vida del estudiante.
                    Por lo general, los condiciones ambientales inadecuadas que causan mas
                    problemas son las distracciones, tanto visuales como auditivas y la desorganización.
                    Evalúa tus condiciones ambientales de estudio. Tú puedes corregir o mejorar tu
                    ambiente de estudio.<br><br>

                    <strong>Las sugerencias que se presentan a continuación te serán útiles.</strong><br><br>
                    <ul>


                    <li><strong>Lugar fijo</strong></li>
                    Para adquirir el habito de estudiar, es conveniente, en un principio,
                    usar siempre el mismo lugar, habitación y escritorio de ser posible. Favorece
                    mucho la asociación de ideas lugar-estudio.<br><br>

                    <li><strong>Silencio interior y asosiego interior</strong></li>
                    En la mayoría de los casos, para lograr concentrarse en el estudio, ayuda el que haya silencio en el lugar elegido. Pero
                    este silencio exterior no es el único requisito, ni el esencial; se requiere sobre
                    todo el sosiego interior de uno mismo.<br><br>

                    <li><strong>El orden en el lugar de estudio</strong></li>
                    Reúne en el lugar de estudio todo lo necesario y evita tener lo que distraiga.<br>
                    Así como el dentista, para efectuar su trabajo de forma organizada, tiene reunido
                    todo el material que necesita, conviene que el estudiante, antes de ponerse a
                    estudiar, reúna en su escritorio todo lo necesario, por ejemplo: libros de texto, libros,
                    de consulta, diccionario, materiales para escribir, calculadora de bolsillo, etc. Así
                    evitaras perder tiempo en búsquedas innecesarias.<br><br>

                    <li><strong>La iluminación adecuada</strong></li>
                    La mejor luz para tener una visión clara es la luz
                    natural. Si se usa una luz artificial, la iluminación indirecta es preferible a la
                    directa; si la luz es deficiente o muy intensa, después de unas cuantas horas de
                    estudio se cansa la vista, disminuye la visión clara y se dificulta la lectura.<br><br>

                    <li><strong>La temperatura confortable</strong></li>
                    En lo posible, evitar estudiar en un lugar
                    demasiado caluroso o demasiado frio; por lo general el exagerado calor inicia al
                    sueño y a la flojera; el demasiado frio dificulta la concentración mental. La
                    temperatura considerada ”ideal” por muchos estudiantes es 18º a 26º C.<br><br>

                    <li><strong>La posición corporal</strong></li>
                    La posición corporal es importante. Una mala postura
                    fatiga y dificulta el estudio. Una posición demasiado cómoda se asocia al
                    descanso y no al estudio. Estudia en una silla cómoda hacia el escritorio. No es
                    conveniente que estudies acostado ni sentado en una cama, por que será fácil
                    caer en la asociación de ideas: Cama- pereza-sueño, que son antagónicas al
                    estudio<br><br>

                    <li><strong>El estudio individual y el estudio en grupo</strong></li>
                    Según Wrenn y Larsen, por lo general estudia por si mismo es más efectivo que hacerlo con otro compañero.
                    No pidas ayuda mientras no te sea necesaria.<br>
                    En algunos casos, cuando se trata de temas muy difíciles de comprender por uno
                    mismo, es conveniente estudiar en grupo.<br>
                    El estudiar en grupo tiene la ventaja de que sea trabaja en colaboración, lo cual es
                    muy formativo. Además, por la diversidad de intereses de quienes forman el grupo,
                    las dudas a que un tema de lugar, y las discusiones que se susciten, pueden llevar al
                    estudiante a conceptos que por sí mismos no hubiera alcanzado. Sin embargo, al
                    estudiar en grupo, es muy común perder el tiempo en platicas innecesarias, lo cual
                    representa una desventaja.<br>
                    El estudio es tu trabajo; no permitas que te distraigan cuando estudias solo, ni
                    distraigas a los demás cuando estudian.<br><br>



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
