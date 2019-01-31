@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">COMPRENSIÓN DE LECTURA</p></strong><br>

                <strong>INSTRUCCIONES:</strong> Leer el texto y conteste las preguntas. Los términos que utilice
                para contestar pueden variar, pero no la esencia de la respuesta.<br><br>

                <strong>LECTURA</strong><br><br>

                El concepto de persona en el mundo occidental -con todas sus connotaciones
                jurídicas, psicológicas y sociales- es consecuencia de una lenta elaboración. En el
                mundo griego, en función de una metáfora, se apuntó ya al rostro de los individuos,
                a su prósopon, para connotar los rasgos propios y exclusivos de la fisonomía moral
                de cada ser humano. Entre los romanos, la palabra persona (del latín per-sonare,
                “resonar o hablar a través de”) se aplicó en un principio a la máscara a través de la
                cual hablaban los comediantes en el teatro. Caracterizando cada máscara a un
                personaje distinto, la palabra pasó pronto a significar el personaje mismo. Por esto,
                los juristas romanos la adoptaron para designar con ella un sujeto dotado de
                representación propia, un personaje en el mundo del derecho. De aquí, finalmente,
                la palabra persona parece haber pasado al habla popular, connotando la fisonomía
                moral y psicológica propia de todo individuo humano.<br><br>
                En el mundo náhuatl prehispánico, como lo prueban antiguos textos, se llegó a la
                elaboración de un concepto afín, aunque de características propias y exclusivas.
                Especialmente en las pláticas o discursos, pronunciados de acuerdo con las reglas
                del tecpillatolli, o sea, “lenguaje noble y cultivado”, se encuentra una expresión que
                aparece casi siempre dirigida por quien habla a su interlocutor. Hay así frases como
                éstas: “Hablaré a vuestro rostro, a vuestro corazón; no se disguste vuestro rostro,
                vuestro corazón; vuestro rostro y vuestro corazón lo sabían...” Además, como ya se
                ha visto al tratar de la imagen ideal del sabio náhuatl, se afirma de él, como atributo
                suyo, “hacer sabios los rostros y firmes los corazones”. Finalmente, al presentar
                algunos textos la descripción del supremo ideal del hombre y la mujer nahuas, se
                dice de ellos que deben ser “dueños de un rostro, dueños de un corazón”. Y en el
                caso de la mujer se añade todavía otro rasgo expresivo. Se dice que “en su corazón
                y en su rostro debe brillar la femineidad”, expresando esto en náhuatl con el término
                abstracto y colectivo a la vez de cihuáyotl.<br><br>
                In ixtli, in yóllotl, rostro y corazón, simbolizan así en el pensamiento náhuatl lo que
                puede llamarse fisonomía moral y principio dinámico de un ser humano.
                Y debe subrayarse que, al incluir al corazón en el “concepto náhuatl de persona”, se
                afirma que si es importante la fisonomía moral expresada por el rostro, lo es con
                igual o mayor razón el corazón, centro del que parece provenir toda la acción del
                hombre. Se contemplaba así entre los nahuas, mejor que entre los mismos griegos,
                la idea del rostro, con la del dinamismo interior del propio yo, porque conviene
                recordar que yóllotl, corazón, etimológicamente se deriva de la misma raíz que oll-in,
                ”movimiento”, para significar en su forma abstracta de yóll-otl, la idea de “movilidad”,
                “la movilidad de cada quien”.<br><br>
                Consecuencia de describir al hombre como “dueño de un rostro, dueño de un
                corazón”, fue la preocupación de los tlamatinime por comunicar sabiduría a los
                rostros y firmeza a los corazones. Esto precisamente constituye el ideal supremo de
                su educación, la Ixtlamachiliztli, “acción de dar sabiduría a los rostros” y de otras
                prácticas como la Yolmelahualiztli, “acción de enderezar los corazones”. Grande era
                el empeño, no sólo de los supremos dirigentes del mundo náhuatl, sino de los
                mismos padres y madres de familias por inculcar a sus hijos desde temprana edad
                los principios que hicieran esto posible. Conocemos por las fuentes indígenas algo
                que hoy nos parece asombroso: la existencia de un sistema de educación universal
                y obligatorio. El códice florentino indica, por ejemplo, que entre los ritos que se
                practicaban al nacer un niño náhuatl, estaba precisamente el de su dedicación o
                consagración a una escuela determinada. Consecuencia de esta educación
                obligatoria entre los niños nahuas prehispánicos era la inserción de todo ser humano
                en la propia cultura, con una preparación específica para realizar dentro de ella la
                misión de cada uno.<br><br>
                Es cierto que el ideal de los rostros sabios y corazones firmes que se pretendía
                inculcar por medio de la educación en el mundo náhuatl, no siempre fue el mismo.<br><br>
                No debe olvidarse que existían grandes diferencias entre quienes participaban de la
                visión místico-guerrera del mundo, propia de los aztecas, y quienes pretendían un
                renacimiento de los antiguos ideales toltecas simbolizados por la figura de
                Quetzalcóatl. Sin embargo, el antiguo sistema de educación náhuatl jamás llegó a
                perder sus más hondas raíces que lo entronaban con el mundo de los creadores de
                arte por excelencia, los toltecas.<br><br>

                <p style="margin-left: 60%">León-Portilla, Miguel, Los Antiguos Mexicanos</p>




            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:17%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_l_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/pens_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/pens_2')}}" style="background-color: lightgray;">Ejercicio 2</a></li>
            <li><a href="{{url('/pens_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/pens_4')}}">Ejercicio 4</a></li>
            <li><a href="{{url('/pens_5')}}">Ejercicio 5</a></li>
            <li>
                <a href="{{url('/pens_3')}}" aria-label="Next">
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
