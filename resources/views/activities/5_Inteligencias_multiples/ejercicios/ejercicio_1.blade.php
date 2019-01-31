@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">TEST DE INTELIGENCIA
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <!--INTELIGENCIA LINGÜÍSTICA-->

                @if($edit==0)

                    A continuación se presenta un Test sugerente para evaluar las Inteligencias
                    Múltiples (Basado en Flores, 1999)<br><br>


                    <p>

                        <strong> INSTRUCCIONES:</strong><br>
                        Marque según corresponda a las instrucciones. El 1 señala
                        ausencia, el 5 señala una presencia notable de lo que se está afirmando. Es decir, 5
                        es la puntuación más alta.

                    </p>

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/int_mult_ej_1')}}">
                    {{csrf_field()}}

                    <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>INTELIGENCIA LINGÜÍSTICA</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>Para su edad, escribe mejor que el promedio</td>
                        <td><input type="radio" name="ling1" value="1"></td>
                        <td><input type="radio" name="ling1" value="2"></td>
                        <td><input type="radio" name="ling1" value="3"></td>
                        <td><input type="radio" name="ling1" value="4"></td>
                        <td><input type="radio" name="ling1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Cuenta bromas y chistes o inventa cuentos increíbles</td>
                        <td><input type="radio" name="ling2" value="1"></td>
                        <td><input type="radio" name="ling2" value="2"></td>
                        <td><input type="radio" name="ling2" value="3"></td>
                        <td><input type="radio" name="ling2" value="4"></td>
                        <td><input type="radio" name="ling2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene buena memoria para los nombres, lugares, fechas y trivialidade</td>
                        <td><input type="radio" name="ling3" value="1"></td>
                        <td><input type="radio" name="ling3" value="2"></td>
                        <td><input type="radio" name="ling3" value="3"></td>
                        <td><input type="radio" name="ling3" value="4"></td>
                        <td><input type="radio" name="ling3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Disfruta los juegos de palabras</td>
                        <td><input type="radio" name="ling4" value="1"></td>
                        <td><input type="radio" name="ling4" value="2"></td>
                        <td><input type="radio" name="ling4" value="3"></td>
                        <td><input type="radio" name="ling4" value="4"></td>
                        <td><input type="radio" name="ling4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Disfruta leer libros</td>
                        <td><input type="radio" name="ling5" value="1"></td>
                        <td><input type="radio" name="ling5" value="2"></td>
                        <td><input type="radio" name="ling5" value="3"></td>
                        <td><input type="radio" name="ling5" value="4"></td>
                        <td><input type="radio" name="ling5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Escribe las palabras correctamente</td>
                        <td><input type="radio" name="ling6" value="1"></td>
                        <td><input type="radio" name="ling6" value="2"></td>
                        <td><input type="radio" name="ling6" value="3"></td>
                        <td><input type="radio" name="ling6" value="4"></td>
                        <td><input type="radio" name="ling6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Aprecia las rimas absurdas, ocurrencias, trabalenguas, etc.</td>
                        <td><input type="radio" name="ling7" value="1"></td>
                        <td><input type="radio" name="ling7" value="2"></td>
                        <td><input type="radio" name="ling7" value="3"></td>
                        <td><input type="radio" name="ling7" value="4"></td>
                        <td><input type="radio" name="ling7" value="5"></td>
                    </tr>


                    <tr>
                        <td>Le gusta escuchar la palabra hablada (historias, comentarios en la radio, etc.)</td>
                        <td><input type="radio" name="ling8" value="1"></td>
                        <td><input type="radio" name="ling8" value="2"></td>
                        <td><input type="radio" name="ling8" value="3"></td>
                        <td><input type="radio" name="ling8" value="4"></td>
                        <td><input type="radio" name="ling8" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene buen vocabulario para su edad</td>
                        <td><input type="radio" name="ling9" value="1"></td>
                        <td><input type="radio" name="ling9" value="2"></td>
                        <td><input type="radio" name="ling9" value="3"></td>
                        <td><input type="radio" name="ling9" value="4"></td>
                        <td><input type="radio" name="ling9" value="5"></td>
                    </tr>

                    <tr>
                        <td>Se comunica con los demás de una manera marcadamente verbal</td>
                        <td><input type="radio" name="ling10" value="1"></td>
                        <td><input type="radio" name="ling10" value="2"></td>
                        <td><input type="radio" name="ling10" value="3"></td>
                        <td><input type="radio" name="ling10" value="4"></td>
                        <td><input type="radio" name="ling10" value="5"></td>
                    </tr>

                </table>


                <!--INTELIGENCIA LÓGICA Y MATEMÁTICA-->

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIA LÓGICA Y MATEMÁTICA</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>Hace muchas preguntas acerca del funcionamiento de las cosas</td>
                        <td><input type="radio" name="mat1" value="1"></td>
                        <td><input type="radio" name="mat1" value="2"></td>
                        <td><input type="radio" name="mat1" value="3"></td>
                        <td><input type="radio" name="mat1" value="4"></td>
                        <td><input type="radio" name="mat1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Hace operaciones aritméticas mentalmente con mucha rapidez</td>
                        <td><input type="radio" name="mat2" value="1"></td>
                        <td><input type="radio" name="mat2" value="2"></td>
                        <td><input type="radio" name="mat2" value="3"></td>
                        <td><input type="radio" name="mat2" value="4"></td>
                        <td><input type="radio" name="mat2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Disfruta las clases de matemáticas</td>
                        <td><input type="radio" name="mat3" value="1"></td>
                        <td><input type="radio" name="mat3" value="2"></td>
                        <td><input type="radio" name="mat3" value="3"></td>
                        <td><input type="radio" name="mat3" value="4"></td>
                        <td><input type="radio" name="mat3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le interesan los juegos de matemáticas en computadoras</td>
                        <td><input type="radio" name="mat4" value="1"></td>
                        <td><input type="radio" name="mat4" value="2"></td>
                        <td><input type="radio" name="mat4" value="3"></td>
                        <td><input type="radio" name="mat4" value="4"></td>
                        <td><input type="radio" name="mat4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le gustan los juegos y rompecabezas que requieran de la lógica</td>
                        <td><input type="radio" name="mat5" value="1"></td>
                        <td><input type="radio" name="mat5" value="2"></td>
                        <td><input type="radio" name="mat5" value="3"></td>
                        <td><input type="radio" name="mat5" value="4"></td>
                        <td><input type="radio" name="mat5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le gusta clasificar y jerarquizar cosas</td>
                        <td><input type="radio" name="mat6" value="1"></td>
                        <td><input type="radio" name="mat6" value="2"></td>
                        <td><input type="radio" name="mat6" value="3"></td>
                        <td><input type="radio" name="mat6" value="4"></td>
                        <td><input type="radio" name="mat6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Piensa en un nivel más abstracto y conceptual que sus compañeros</td>
                        <td><input type="radio" name="mat7" value="1"></td>
                        <td><input type="radio" name="mat7" value="2"></td>
                        <td><input type="radio" name="mat7" value="3"></td>
                        <td><input type="radio" name="mat7" value="4"></td>
                        <td><input type="radio" name="mat7" value="5"></td>
                    </tr>


                    <tr>
                        <td>Tiene buen sentido de causa y efecto</td>
                        <td><input type="radio" name="mat8" value="1"></td>
                        <td><input type="radio" name="mat8" value="2"></td>
                        <td><input type="radio" name="mat8" value="3"></td>
                        <td><input type="radio" name="mat8" value="4"></td>
                        <td><input type="radio" name="mat8" value="5"></td>
                    </tr>


                </table>



                <!--INTELIGENCIA ESPACIAL-->

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIA ESPACIAL</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>Presenta imágenes visuales nítidas</td>
                        <td><input type="radio" name="esp1" value="1"></td>
                        <td><input type="radio" name="esp1" value="2"></td>
                        <td><input type="radio" name="esp1" value="3"></td>
                        <td><input type="radio" name="esp1" value="4"></td>
                        <td><input type="radio" name="esp1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Lee mapas, gráficos y diagramas con más facilidad que el texto</td>
                        <td><input type="radio" name="esp2" value="1"></td>
                        <td><input type="radio" name="esp2" value="2"></td>
                        <td><input type="radio" name="esp2" value="3"></td>
                        <td><input type="radio" name="esp2" value="4"></td>
                        <td><input type="radio" name="esp2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Fantasea más que sus compañeros</td>
                        <td><input type="radio" name="esp3" value="1"></td>
                        <td><input type="radio" name="esp3" value="2"></td>
                        <td><input type="radio" name="esp3" value="3"></td>
                        <td><input type="radio" name="esp3" value="4"></td>
                        <td><input type="radio" name="esp3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Dibuja figuras avanzadas para su edad</td>
                        <td><input type="radio" name="esp4" value="1"></td>
                        <td><input type="radio" name="esp4" value="2"></td>
                        <td><input type="radio" name="esp4" value="3"></td>
                        <td><input type="radio" name="esp4" value="4"></td>
                        <td><input type="radio" name="esp4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le gusta ver películas, diapositivas y otras presentaciones visuales</td>
                        <td><input type="radio" name="esp5" value="1"></td>
                        <td><input type="radio" name="esp5" value="2"></td>
                        <td><input type="radio" name="esp5" value="3"></td>
                        <td><input type="radio" name="esp5" value="4"></td>
                        <td><input type="radio" name="esp5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le gusta resolver rompecabezas, laberintos y otras actividades visuales similares</td>
                        <td><input type="radio" name="esp6" value="1"></td>
                        <td><input type="radio" name="esp6" value="2"></td>
                        <td><input type="radio" name="esp6" value="3"></td>
                        <td><input type="radio" name="esp6" value="4"></td>
                        <td><input type="radio" name="esp6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Crea construcciones tridimensionales avanzadas para su nivel (juegos tipo Play go o Lego)</td>
                        <td><input type="radio" name="esp7" value="1"></td>
                        <td><input type="radio" name="esp7" value="2"></td>
                        <td><input type="radio" name="esp7" value="3"></td>
                        <td><input type="radio" name="esp7" value="4"></td>
                        <td><input type="radio" name="esp7" value="5"></td>
                    </tr>


                    <tr>
                        <td>Cuando lee, aprovecha más las imágenes que las palabras</td>
                        <td><input type="radio" name="esp8" value="1"></td>
                        <td><input type="radio" name="esp8" value="2"></td>
                        <td><input type="radio" name="esp8" value="3"></td>
                        <td><input type="radio" name="esp8" value="4"></td>
                        <td><input type="radio" name="esp8" value="5"></td>
                    </tr>

                    <tr>
                        <td>Hace grabados en sus libros de trabajo, plantillas de trabajo y otros materiales.</td>
                        <td><input type="radio" name="esp9" value="1"></td>
                        <td><input type="radio" name="esp9" value="2"></td>
                        <td><input type="radio" name="esp9" value="3"></td>
                        <td><input type="radio" name="esp9" value="4"></td>
                        <td><input type="radio" name="esp9" value="5"></td>
                    </tr>


                </table>


                <!--INTELIGENCIA FÍSICA Y CINESTÉTICA-->

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIA FÍSICA Y CINESTÉTICA</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>Se destaca en uno o más deportes</td>
                        <td><input type="radio" name="sin1" value="1"></td>
                        <td><input type="radio" name="sin1" value="2"></td>
                        <td><input type="radio" name="sin1" value="3"></td>
                        <td><input type="radio" name="sin1" value="4"></td>
                        <td><input type="radio" name="sin1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Se mueve o está inquieto cuando está sentado mucho tiempo</td>
                        <td><input type="radio" name="sin2" value="1"></td>
                        <td><input type="radio" name="sin2" value="2"></td>
                        <td><input type="radio" name="sin2" value="3"></td>
                        <td><input type="radio" name="sin2" value="4"></td>
                        <td><input type="radio" name="sin2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Imita muy bien los gestos y movimientos característicos de otras personas</td>
                        <td><input type="radio" name="sin3" value="1"></td>
                        <td><input type="radio" name="sin3" value="2"></td>
                        <td><input type="radio" name="sin3" value="3"></td>
                        <td><input type="radio" name="sin3" value="4"></td>
                        <td><input type="radio" name="sin3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le encanta desarmar cosas y volver a armarlas</td>
                        <td><input type="radio" name="sin4" value="1"></td>
                        <td><input type="radio" name="sin4" value="2"></td>
                        <td><input type="radio" name="sin4" value="3"></td>
                        <td><input type="radio" name="sin4" value="4"></td>
                        <td><input type="radio" name="sin4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Apenas ve algo, lo toca todo con las manos</td>
                        <td><input type="radio" name="sin5" value="1"></td>
                        <td><input type="radio" name="sin5" value="2"></td>
                        <td><input type="radio" name="sin5" value="3"></td>
                        <td><input type="radio" name="sin5" value="4"></td>
                        <td><input type="radio" name="sin5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le gusta correr, saltar, moverse rápidamente, brincar, luchar</td>
                        <td><input type="radio" name="sin6" value="1"></td>
                        <td><input type="radio" name="sin6" value="2"></td>
                        <td><input type="radio" name="sin6" value="3"></td>
                        <td><input type="radio" name="sin6" value="4"></td>
                        <td><input type="radio" name="sin6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Demuestra destreza en artesanía</td>
                        <td><input type="radio" name="sin7" value="1"></td>
                        <td><input type="radio" name="sin7" value="2"></td>
                        <td><input type="radio" name="sin7" value="3"></td>
                        <td><input type="radio" name="sin7" value="4"></td>
                        <td><input type="radio" name="sin7" value="5"></td>
                    </tr>


                    <tr>
                        <td>na manera dramática de expresarse</td>
                        <td><input type="radio" name="sin8" value="1"></td>
                        <td><input type="radio" name="sin8" value="2"></td>
                        <td><input type="radio" name="sin8" value="3"></td>
                        <td><input type="radio" name="sin8" value="4"></td>
                        <td><input type="radio" name="sin8" value="5"></td>
                    </tr>

                    <tr>
                        <td>Manifiesta sensaciones físicas diferentes mientras piensa o trabaja</td>
                        <td><input type="radio" name="sin9" value="1"></td>
                        <td><input type="radio" name="sin9" value="2"></td>
                        <td><input type="radio" name="sin9" value="3"></td>
                        <td><input type="radio" name="sin9" value="4"></td>
                        <td><input type="radio" name="sin9" value="5"></td>
                    </tr>

                    <tr>
                        <td>Disfruta trabajar con plastilina y otras experiencias táctiles</td>
                        <td><input type="radio" name="sin10" value="1"></td>
                        <td><input type="radio" name="sin10" value="2"></td>
                        <td><input type="radio" name="sin10" value="3"></td>
                        <td><input type="radio" name="sin10" value="4"></td>
                        <td><input type="radio" name="sin10" value="5"></td>
                    </tr>

                </table>


                <!--INTELIGENCIA MUSICAL-->

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIA MUSICAL</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>Se da cuenta cuando la música está desentonada o suena mal</td>
                        <td><input type="radio" name="mus1" value="1"></td>
                        <td><input type="radio" name="mus1" value="2"></td>
                        <td><input type="radio" name="mus1" value="3"></td>
                        <td><input type="radio" name="mus1" value="4"></td>
                        <td><input type="radio" name="mus1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Recuerda las melodías de las canciones</td>
                        <td><input type="radio" name="mus2" value="1"></td>
                        <td><input type="radio" name="mus2" value="2"></td>
                        <td><input type="radio" name="mus2" value="3"></td>
                        <td><input type="radio" name="mus2" value="4"></td>
                        <td><input type="radio" name="mus2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene buena voz para cantar</td>
                        <td><input type="radio" name="mus3" value="1"></td>
                        <td><input type="radio" name="mus3" value="2"></td>
                        <td><input type="radio" name="mus3" value="3"></td>
                        <td><input type="radio" name="mus3" value="4"></td>
                        <td><input type="radio" name="mus3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Toca un instrumento musical o canta en un coro o algún otro grupo</td>
                        <td><input type="radio" name="mus4" value="1"></td>
                        <td><input type="radio" name="mus4" value="2"></td>
                        <td><input type="radio" name="mus4" value="3"></td>
                        <td><input type="radio" name="mus4" value="4"></td>
                        <td><input type="radio" name="mus4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Canturrea sin darse cuenta</td>
                        <td><input type="radio" name="mus5" value="1"></td>
                        <td><input type="radio" name="mus5" value="2"></td>
                        <td><input type="radio" name="mus5" value="3"></td>
                        <td><input type="radio" name="mus5" value="4"></td>
                        <td><input type="radio" name="mus5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tamborilea rítmicamente sobre la mesa o escritorio mientras trabaja</td>
                        <td><input type="radio" name="mus6" value="1"></td>
                        <td><input type="radio" name="mus6" value="2"></td>
                        <td><input type="radio" name="mus6" value="3"></td>
                        <td><input type="radio" name="mus6" value="4"></td>
                        <td><input type="radio" name="mus6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Es sensible a los ruidos ambientales (p.ejem. La lluvia sobre el techo)</td>
                        <td><input type="radio" name="mus7" value="1"></td>
                        <td><input type="radio" name="mus7" value="2"></td>
                        <td><input type="radio" name="mus7" value="3"></td>
                        <td><input type="radio" name="mus7" value="4"></td>
                        <td><input type="radio" name="mus7" value="5"></td>
                    </tr>


                    <tr>
                        <td>Responde favorablemente cuando alguien pone música</td>
                        <td><input type="radio" name="mus8" value="1"></td>
                        <td><input type="radio" name="mus8" value="2"></td>
                        <td><input type="radio" name="mus8" value="3"></td>
                        <td><input type="radio" name="mus8" value="4"></td>
                        <td><input type="radio" name="mus8" value="5"></td>
                    </tr>

                </table>


                <!--INTELIGENCIA INTERPERSONAL-->

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIA INTERPERSONAL</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>Disfruta conversar con sus compañeros</td>
                        <td><input type="radio" name="int1" value="1"></td>
                        <td><input type="radio" name="int1" value="2"></td>
                        <td><input type="radio" name="int1" value="3"></td>
                        <td><input type="radio" name="int1" value="4"></td>
                        <td><input type="radio" name="int1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene características de líder natural</td>
                        <td><input type="radio" name="int2" value="1"></td>
                        <td><input type="radio" name="int2" value="2"></td>
                        <td><input type="radio" name="int2" value="3"></td>
                        <td><input type="radio" name="int2" value="4"></td>
                        <td><input type="radio" name="int2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Aconseja a los amigos que tienen problemas</td>
                        <td><input type="radio" name="int3" value="1"></td>
                        <td><input type="radio" name="int3" value="2"></td>
                        <td><input type="radio" name="int3" value="3"></td>
                        <td><input type="radio" name="int3" value="4"></td>
                        <td><input type="radio" name="int3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Parece tener buen sentido común</td>
                        <td><input type="radio" name="int4" value="1"></td>
                        <td><input type="radio" name="int4" value="2"></td>
                        <td><input type="radio" name="int4" value="3"></td>
                        <td><input type="radio" name="int4" value="4"></td>
                        <td><input type="radio" name="int4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Pertenece a clubes, comités y otras organizaciones</td>
                        <td><input type="radio" name="int5" value="1"></td>
                        <td><input type="radio" name="int5" value="2"></td>
                        <td><input type="radio" name="int5" value="3"></td>
                        <td><input type="radio" name="int5" value="4"></td>
                        <td><input type="radio" name="int5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Disfruta enseñar informalmente a otros niños</td>
                        <td><input type="radio" name="int6" value="1"></td>
                        <td><input type="radio" name="int6" value="2"></td>
                        <td><input type="radio" name="int6" value="3"></td>
                        <td><input type="radio" name="int6" value="4"></td>
                        <td><input type="radio" name="int6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Le gusta jugar con otros niños</td>
                        <td><input type="radio" name="int7" value="1"></td>
                        <td><input type="radio" name="int7" value="2"></td>
                        <td><input type="radio" name="int7" value="3"></td>
                        <td><input type="radio" name="int7" value="4"></td>
                        <td><input type="radio" name="int7" value="5"></td>
                    </tr>


                    <tr>
                        <td>Tiene dos o más buenos amigos</td>
                        <td><input type="radio" name="int8" value="1"></td>
                        <td><input type="radio" name="int8" value="2"></td>
                        <td><input type="radio" name="int8" value="3"></td>
                        <td><input type="radio" name="int8" value="4"></td>
                        <td><input type="radio" name="int8" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene buen sentido de empatía o interés por los demás</td>
                        <td><input type="radio" name="int9" value="1"></td>
                        <td><input type="radio" name="int9" value="2"></td>
                        <td><input type="radio" name="int9" value="3"></td>
                        <td><input type="radio" name="int9" value="4"></td>
                        <td><input type="radio" name="int9" value="5"></td>
                    </tr>

                    <tr>
                        <td>Otros buscan su compañía</td>
                        <td><input type="radio" name="int10" value="1"></td>
                        <td><input type="radio" name="int10" value="2"></td>
                        <td><input type="radio" name="int10" value="3"></td>
                        <td><input type="radio" name="int10" value="4"></td>
                        <td><input type="radio" name="int10" value="5"></td>
                    </tr>


                </table>

                <!--INTELIGENCIA INTRAPERSONAL-->

                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>INTELIGENCIA INTRAPERSONAL</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>Demuestra sentido de independencia o voluntad fuerte</td>
                        <td><input type="radio" name="intra1" value="1"></td>
                        <td><input type="radio" name="intra1" value="2"></td>
                        <td><input type="radio" name="intra1" value="3"></td>
                        <td><input type="radio" name="intra1" value="4"></td>
                        <td><input type="radio" name="intra1" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene un concepto práctico de sus habilidades y debilidades</td>
                        <td><input type="radio" name="intra2" value="1"></td>
                        <td><input type="radio" name="intra2" value="2"></td>
                        <td><input type="radio" name="intra2" value="3"></td>
                        <td><input type="radio" name="intra2" value="4"></td>
                        <td><input type="radio" name="intra2" value="5"></td>
                    </tr>

                    <tr>
                        <td>Presenta buen desempeño cuando está solo jugando o estudiando</td>
                        <td><input type="radio" name="intra3" value="1"></td>
                        <td><input type="radio" name="intra3" value="2"></td>
                        <td><input type="radio" name="intra3" value="3"></td>
                        <td><input type="radio" name="intra3" value="4"></td>
                        <td><input type="radio" name="intra3" value="5"></td>
                    </tr>

                    <tr>
                        <td>Lleva un compás completamente diferente en cuanto a su estilo de vida y aprendizaje</td>
                        <td><input type="radio" name="intra4" value="1"></td>
                        <td><input type="radio" name="intra4" value="2"></td>
                        <td><input type="radio" name="intra4" value="3"></td>
                        <td><input type="radio" name="intra4" value="4"></td>
                        <td><input type="radio" name="intra4" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene un interés o pasatiempo sobre el que no habla mucho con los demás</td>
                        <td><input type="radio" name="intra5" value="1"></td>
                        <td><input type="radio" name="intra5" value="2"></td>
                        <td><input type="radio" name="intra5" value="3"></td>
                        <td><input type="radio" name="intra5" value="4"></td>
                        <td><input type="radio" name="intra5" value="5"></td>
                    </tr>

                    <tr>
                        <td>Tiene buen sentido de autodisciplina</td>
                        <td><input type="radio" name="intra6" value="1"></td>
                        <td><input type="radio" name="intra6" value="2"></td>
                        <td><input type="radio" name="intra6" value="3"></td>
                        <td><input type="radio" name="intra6" value="4"></td>
                        <td><input type="radio" name="intra6" value="5"></td>
                    </tr>

                    <tr>
                        <td>Prefiere trabajar solo</td>
                        <td><input type="radio" name="intra7" value="1"></td>
                        <td><input type="radio" name="intra7" value="2"></td>
                        <td><input type="radio" name="intra7" value="3"></td>
                        <td><input type="radio" name="intra7" value="4"></td>
                        <td><input type="radio" name="intra7" value="5"></td>
                    </tr>


                    <tr>
                        <td>Expresa acertadamente sus sentimientos</td>
                        <td><input type="radio" name="intra8" value="1"></td>
                        <td><input type="radio" name="intra8" value="2"></td>
                        <td><input type="radio" name="intra8" value="3"></td>
                        <td><input type="radio" name="intra8" value="4"></td>
                        <td><input type="radio" name="intra8" value="5"></td>
                    </tr>

                    <tr>
                        <td>Es capaz de aprender de sus errores y logros en la vida</td>
                        <td><input type="radio" name="intra9" value="1"></td>
                        <td><input type="radio" name="intra9" value="2"></td>
                        <td><input type="radio" name="intra9" value="3"></td>
                        <td><input type="radio" name="intra9" value="4"></td>
                        <td><input type="radio" name="intra9" value="5"></td>
                    </tr>

                    <tr>
                        <td>Demuestra un gran amor propio</td>
                        <td><input type="radio" name="intra10" value="1"></td>
                        <td><input type="radio" name="intra10" value="2"></td>
                        <td><input type="radio" name="intra10" value="3"></td>
                        <td><input type="radio" name="intra10" value="4"></td>
                        <td><input type="radio" name="intra10" value="5"></td>
                    </tr>


                </table>

                    <div class="row" style="margin-left: 22%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                    </div>

                </form>

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div>

                    A continuación se presenta un Test sugerente para evaluar las Inteligencias
                    Múltiples (Basado en Flores, 1999)<br><br>


                    <p>

                        <strong> INSTRUCCIONES:</strong><br>
                        Marque según corresponda a las instrucciones. El 1 señala
                        ausencia, el 5 señala una presencia notable de lo que se está afirmando. Es decir, 5
                        es la puntuación más alta.

                    </p>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/int_mult_ej_1')}}">
                        {{csrf_field()}}

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA LINGÜÍSTICA</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Para su edad, escribe mejor que el promedio</td>
                                <td><input type="radio" name="ling1_e" value="1" {{$ar_1['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling1_e" value="2" {{$ar_1['1']==2 ? "checked" : ""}}></td>
                                <td><input type="radio" name="ling1_e" value="3" {{$ar_1['1']==3 ? "checked" : ""}}></td>
                                <td><input type="radio" name="ling1_e" value="4" {{$ar_1['1']==4 ? "checked" : ""}}></td>
                                <td><input type="radio" name="ling1_e" value="5" {{$ar_1['1']==5 ? "checked" : ""}}></td>
                            </tr>

                            <tr>
                                <td>Cuenta bromas y chistes o inventa cuentos increíbles</td>
                                <td><input type="radio" name="ling2_e" value="1" {{$ar_1['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling2_e" value="2" {{$ar_1['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling2_e" value="3" {{$ar_1['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling2_e" value="4" {{$ar_1['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling2_e" value="5" {{$ar_1['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene buena memoria para los nombres, lugares, fechas y trivialidade</td>
                                <td><input type="radio" name="ling3_e" value="1" {{$ar_1['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling3_e" value="2" {{$ar_1['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling3_e" value="3" {{$ar_1['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling3_e" value="4" {{$ar_1['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling3_e" value="5" {{$ar_1['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Disfruta los juegos de palabras</td>
                                <td><input type="radio" name="ling4_e" value="1" {{$ar_1['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling4_e" value="2" {{$ar_1['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling4_e" value="3" {{$ar_1['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling4_e" value="4" {{$ar_1['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling4_e" value="5" {{$ar_1['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Disfruta leer libros</td>
                                <td><input type="radio" name="ling5_e" value="1" {{$ar_1['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling5_e" value="2" {{$ar_1['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling5_e" value="3" {{$ar_1['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling5_e" value="4" {{$ar_1['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling5_e" value="5" {{$ar_1['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Escribe las palabras correctamente</td>
                                <td><input type="radio" name="ling6_e" value="1" {{$ar_1['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling6_e" value="2" {{$ar_1['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling6_e" value="3" {{$ar_1['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling6_e" value="4" {{$ar_1['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling6_e" value="5" {{$ar_1['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Aprecia las rimas absurdas, ocurrencias, trabalenguas, etc.</td>
                                <td><input type="radio" name="ling7_e" value="1" {{$ar_1['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling7_e" value="2" {{$ar_1['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling7_e" value="3" {{$ar_1['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling7_e" value="4" {{$ar_1['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling7_e" value="5" {{$ar_1['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>Le gusta escuchar la palabra hablada (historias, comentarios en la radio, etc.)</td>
                                <td><input type="radio" name="ling8_e" value="1" {{$ar_1['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling8_e" value="2" {{$ar_1['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling8_e" value="3" {{$ar_1['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling8_e" value="4" {{$ar_1['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling8_e" value="5" {{$ar_1['8']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene buen vocabulario para su edad</td>
                                <td><input type="radio" name="ling9_e" value="1" {{$ar_1['9']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling9_e" value="2" {{$ar_1['9']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling9_e" value="3" {{$ar_1['9']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling9_e" value="4" {{$ar_1['9']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling9_e" value="5" {{$ar_1['9']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Se comunica con los demás de una manera marcadamente verbal</td>
                                <td><input type="radio" name="ling10_e" value="1" {{$ar_1['10']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling10_e" value="2" {{$ar_1['10']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling10_e" value="3" {{$ar_1['10']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling10_e" value="4" {{$ar_1['10']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="ling10_e" value="5" {{$ar_1['10']==5 ? "checked": ""}}></td>
                            </tr>

                        </table>


                        <!--INTELIGENCIA LÓGICA Y MATEMÁTICA-->

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA LÓGICA Y MATEMÁTICA</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Hace muchas preguntas acerca del funcionamiento de las cosas</td>
                                <td><input type="radio" name="mat1_e" value="1" {{$ar_2['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat1_e" value="2" {{$ar_2['1']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat1_e" value="3" {{$ar_2['1']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat1_e" value="4" {{$ar_2['1']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat1_e" value="5" {{$ar_2['1']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Hace operaciones aritméticas mentalmente con mucha rapidez</td>
                                <td><input type="radio" name="mat2_e" value="1" {{$ar_2['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat2_e" value="2" {{$ar_2['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat2_e" value="3" {{$ar_2['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat2_e" value="4" {{$ar_2['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat2_e" value="5" {{$ar_2['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Disfruta las clases de matemáticas</td>
                                <td><input type="radio" name="mat3_e" value="1" {{$ar_2['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat3_e" value="2" {{$ar_2['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat3_e" value="3" {{$ar_2['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat3_e" value="4" {{$ar_2['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat3_e" value="5" {{$ar_2['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le interesan los juegos de matemáticas en computadoras</td>
                                <td><input type="radio" name="mat4_e" value="1" {{$ar_2['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat4_e" value="2" {{$ar_2['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat4_e" value="3" {{$ar_2['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat4_e" value="4" {{$ar_2['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat4_e" value="5" {{$ar_2['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le gustan los juegos y rompecabezas que requieran de la lógica</td>
                                <td><input type="radio" name="mat5_e" value="1" {{$ar_2['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat5_e" value="2" {{$ar_2['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat5_e" value="3" {{$ar_2['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat5_e" value="4" {{$ar_2['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat5_e" value="5" {{$ar_2['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le gusta clasificar y jerarquizar cosas</td>
                                <td><input type="radio" name="mat6_e" value="1" {{$ar_2['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat6_e" value="2" {{$ar_2['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat6_e" value="3" {{$ar_2['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat6_e" value="4" {{$ar_2['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat6_e" value="5" {{$ar_2['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Piensa en un nivel más abstracto y conceptual que sus compañeros</td>
                                <td><input type="radio" name="mat7_e" value="1" {{$ar_2['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat7_e" value="2" {{$ar_2['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat7_e" value="3" {{$ar_2['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat7_e" value="4" {{$ar_2['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat7_e" value="5" {{$ar_2['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>Tiene buen sentido de causa y efecto</td>
                                <td><input type="radio" name="mat8_e" value="1" {{$ar_2['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat8_e" value="2" {{$ar_2['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat8_e" value="3" {{$ar_2['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat8_e" value="4" {{$ar_2['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mat8_e" value="5" {{$ar_2['8']==5 ? "checked": ""}}></td>
                            </tr>


                        </table>



                        <!--INTELIGENCIA ESPACIAL-->

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA ESPACIAL</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Presenta imágenes visuales nítidas</td>
                                <td><input type="radio" name="esp1_e" value="1" {{$ar_3['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp1_e" value="2" {{$ar_3['1']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp1_e" value="3" {{$ar_3['1']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp1_e" value="4" {{$ar_3['1']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp1_e" value="5" {{$ar_3['1']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Lee mapas, gráficos y diagramas con más facilidad que el texto</td>
                                <td><input type="radio" name="esp2_e" value="1" {{$ar_3['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp2_e" value="2" {{$ar_3['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp2_e" value="3" {{$ar_3['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp2_e" value="4" {{$ar_3['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp2_e" value="5" {{$ar_3['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Fantasea más que sus compañeros</td>
                                <td><input type="radio" name="esp3_e" value="1" {{$ar_3['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp3_e" value="2" {{$ar_3['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp3_e" value="3" {{$ar_3['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp3_e" value="4" {{$ar_3['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp3_e" value="5" {{$ar_3['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Dibuja figuras avanzadas para su edad</td>
                                <td><input type="radio" name="esp4_e" value="1" {{$ar_3['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp4_e" value="2" {{$ar_3['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp4_e" value="3" {{$ar_3['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp4_e" value="4" {{$ar_3['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp4_e" value="5" {{$ar_3['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le gusta ver películas, diapositivas y otras presentaciones visuales</td>
                                <td><input type="radio" name="esp5_e" value="1" {{$ar_3['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp5_e" value="2" {{$ar_3['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp5_e" value="3" {{$ar_3['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp5_e" value="4" {{$ar_3['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp5_e" value="5" {{$ar_3['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le gusta resolver rompecabezas, laberintos y otras actividades visuales similares</td>
                                <td><input type="radio" name="esp6_e" value="1" {{$ar_3['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp6_e" value="2" {{$ar_3['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp6_e" value="3" {{$ar_3['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp6_e" value="4" {{$ar_3['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp6_e" value="5" {{$ar_3['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Crea construcciones tridimensionales avanzadas para su nivel (juegos tipo Play go o Lego)</td>
                                <td><input type="radio" name="esp7_e" value="1" {{$ar_3['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp7_e" value="2" {{$ar_3['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp7_e" value="3" {{$ar_3['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp7_e" value="4" {{$ar_3['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp7_e" value="5" {{$ar_3['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>Cuando lee, aprovecha más las imágenes que las palabras</td>
                                <td><input type="radio" name="esp8_e" value="1" {{$ar_3['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp8_e" value="2" {{$ar_3['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp8_e" value="3" {{$ar_3['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp8_e" value="4" {{$ar_3['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp8_e" value="5" {{$ar_3['8']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Hace grabados en sus libros de trabajo, plantillas de trabajo y otros materiales.</td>
                                <td><input type="radio" name="esp9_e" value="1" {{$ar_3['9']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp9_e" value="2" {{$ar_3['9']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp9_e" value="3" {{$ar_3['9']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp9_e" value="4" {{$ar_3['9']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="esp9_e" value="5" {{$ar_3['9']==5 ? "checked": ""}}></td>
                            </tr>


                        </table>


                        <!--INTELIGENCIA FÍSICA Y CINESTÉTICA-->

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA FÍSICA Y CINESTÉTICA</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Se destaca en uno o más deportes</td>
                                <td><input type="radio" name="sin1_e" value="1" {{$ar_4['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin1_e" value="2" {{$ar_4['1']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin1_e" value="3" {{$ar_4['1']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin1_e" value="4" {{$ar_4['1']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin1_e" value="5" {{$ar_4['1']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Se mueve o está inquieto cuando está sentado mucho tiempo</td>
                                <td><input type="radio" name="sin2_e" value="1" {{$ar_4['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin2_e" value="2" {{$ar_4['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin2_e" value="3" {{$ar_4['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin2_e" value="4" {{$ar_4['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin2_e" value="5" {{$ar_4['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Imita muy bien los gestos y movimientos característicos de otras personas</td>
                                <td><input type="radio" name="sin3_e" value="1" {{$ar_4['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin3_e" value="2" {{$ar_4['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin3_e" value="3" {{$ar_4['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin3_e" value="4" {{$ar_4['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin3_e" value="5" {{$ar_4['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le encanta desarmar cosas y volver a armarlas</td>
                                <td><input type="radio" name="sin4_e" value="1" {{$ar_4['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin4_e" value="2" {{$ar_4['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin4_e" value="3" {{$ar_4['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin4_e" value="4" {{$ar_4['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin4_e" value="5" {{$ar_4['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Apenas ve algo, lo toca todo con las manos</td>
                                <td><input type="radio" name="sin5_e" value="1" {{$ar_4['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin5_e" value="2" {{$ar_4['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin5_e" value="3" {{$ar_4['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin5_e" value="4" {{$ar_4['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin5_e" value="5" {{$ar_4['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le gusta correr, saltar, moverse rápidamente, brincar, luchar</td>
                                <td><input type="radio" name="sin6_e" value="1" {{$ar_4['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin6_e" value="2" {{$ar_4['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin6_e" value="3" {{$ar_4['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin6_e" value="4" {{$ar_4['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin6_e" value="5" {{$ar_4['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Demuestra destreza en artesanía</td>
                                <td><input type="radio" name="sin7_e" value="1" {{$ar_4['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin7_e" value="2" {{$ar_4['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin7_e" value="3" {{$ar_4['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin7_e" value="4" {{$ar_4['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin7_e" value="5" {{$ar_4['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>na manera dramática de expresarse</td>
                                <td><input type="radio" name="sin8_e" value="1" {{$ar_4['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin8_e" value="2" {{$ar_4['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin8_e" value="3" {{$ar_4['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin8_e" value="4" {{$ar_4['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin8_e" value="5" {{$ar_4['8']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Manifiesta sensaciones físicas diferentes mientras piensa o trabaja</td>
                                <td><input type="radio" name="sin9_e" value="1" {{$ar_4['9']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin9_e" value="2" {{$ar_4['9']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin9_e" value="3" {{$ar_4['9']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin9_e" value="4" {{$ar_4['9']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin9_e" value="5" {{$ar_4['9']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Disfruta trabajar con plastilina y otras experiencias táctiles</td>
                                <td><input type="radio" name="sin10_e" value="1" {{$ar_4['10']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin10_e" value="2" {{$ar_4['10']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin10_e" value="3" {{$ar_4['10']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin10_e" value="4" {{$ar_4['10']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="sin10_e" value="5" {{$ar_4['10']==5 ? "checked": ""}}></td>
                            </tr>

                        </table>


                        <!--INTELIGENCIA MUSICAL-->

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA MUSICAL</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Se da cuenta cuando la música está desentonada o suena mal</td>
                                <td><input type="radio" name="mus1_e" value="1" {{$ar_5['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus1_e" value="2" {{$ar_5['1']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus1_e" value="3" {{$ar_5['1']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus1_e" value="4" {{$ar_5['1']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus1_e" value="5" {{$ar_5['1']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Recuerda las melodías de las canciones</td>
                                <td><input type="radio" name="mus2_e" value="1" {{$ar_5['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus2_e" value="2" {{$ar_5['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus2_e" value="3" {{$ar_5['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus2_e" value="4" {{$ar_5['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus2_e" value="5" {{$ar_5['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene buena voz para cantar</td>
                                <td><input type="radio" name="mus3_e" value="1" {{$ar_5['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus3_e" value="2" {{$ar_5['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus3_e" value="3" {{$ar_5['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus3_e" value="4" {{$ar_5['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus3_e" value="5" {{$ar_5['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Toca un instrumento musical o canta en un coro o algún otro grupo</td>
                                <td><input type="radio" name="mus4_e" value="1" {{$ar_5['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus4_e" value="2" {{$ar_5['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus4_e" value="3" {{$ar_5['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus4_e" value="4" {{$ar_5['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus4_e" value="5" {{$ar_5['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Canturrea sin darse cuenta</td>
                                <td><input type="radio" name="mus5_e" value="1" {{$ar_5['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus5_e" value="2" {{$ar_5['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus5_e" value="3" {{$ar_5['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus5_e" value="4" {{$ar_5['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus5_e" value="5" {{$ar_5['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tamborilea rítmicamente sobre la mesa o escritorio mientras trabaja</td>
                                <td><input type="radio" name="mus6_e" value="1" {{$ar_5['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus6_e" value="2" {{$ar_5['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus6_e" value="3" {{$ar_5['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus6_e" value="4" {{$ar_5['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus6_e" value="5" {{$ar_5['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Es sensible a los ruidos ambientales (p.ejem. La lluvia sobre el techo)</td>
                                <td><input type="radio" name="mus7_e" value="1" {{$ar_5['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus7_e" value="2" {{$ar_5['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus7_e" value="3" {{$ar_5['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus7_e" value="4" {{$ar_5['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus7_e" value="5" {{$ar_5['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>Responde favorablemente cuando alguien pone música</td>
                                <td><input type="radio" name="mus8_e" value="1" {{$ar_5['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus8_e" value="2" {{$ar_5['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus8_e" value="3" {{$ar_5['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus8_e" value="4" {{$ar_5['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="mus8_e" value="5" {{$ar_5['8']==5 ? "checked": ""}}></td>
                            </tr>

                        </table>


                        <!--INTELIGENCIA INTERPERSONAL-->

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA INTERPERSONAL</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Disfruta conversar con sus compañeros</td>
                                <td><input type="radio" name="int1_e" value="1" {{$ar_6['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int1_e" value="2" {{$ar_6['1']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int1_e" value="3" {{$ar_6['1']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int1_e" value="4" {{$ar_6['1']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int1_e" value="5" {{$ar_6['1']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene características de líder natural</td>
                                <td><input type="radio" name="int2_e" value="1" {{$ar_6['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int2_e" value="2" {{$ar_6['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int2_e" value="3" {{$ar_6['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int2_e" value="4" {{$ar_6['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int2_e" value="5" {{$ar_6['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Aconseja a los amigos que tienen problemas</td>
                                <td><input type="radio" name="int3_e" value="1" {{$ar_6['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int3_e" value="2" {{$ar_6['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int3_e" value="3" {{$ar_6['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int3_e" value="4" {{$ar_6['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int3_e" value="5" {{$ar_6['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Parece tener buen sentido común</td>
                                <td><input type="radio" name="int4_e" value="1" {{$ar_6['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int4_e" value="2" {{$ar_6['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int4_e" value="3" {{$ar_6['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int4_e" value="4" {{$ar_6['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int4_e" value="5" {{$ar_6['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Pertenece a clubes, comités y otras organizaciones</td>
                                <td><input type="radio" name="int5_e" value="1" {{$ar_6['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int5_e" value="2" {{$ar_6['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int5_e" value="3" {{$ar_6['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int5_e" value="4" {{$ar_6['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int5_e" value="5" {{$ar_6['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Disfruta enseñar informalmente a otros niños</td>
                                <td><input type="radio" name="int6_e" value="1" {{$ar_6['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int6_e" value="2" {{$ar_6['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int6_e" value="3" {{$ar_6['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int6_e" value="4" {{$ar_6['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int6_e" value="5" {{$ar_6['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Le gusta jugar con otros niños</td>
                                <td><input type="radio" name="int7_e" value="1" {{$ar_6['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int7_e" value="2" {{$ar_6['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int7_e" value="3" {{$ar_6['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int7_e" value="4" {{$ar_6['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int7_e" value="5" {{$ar_6['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>Tiene dos o más buenos amigos</td>
                                <td><input type="radio" name="int8_e" value="1" {{$ar_6['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int8_e" value="2" {{$ar_6['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int8_e" value="3" {{$ar_6['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int8_e" value="4" {{$ar_6['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int8_e" value="5" {{$ar_6['8']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene buen sentido de empatía o interés por los demás</td>
                                <td><input type="radio" name="int9_e" value="1" {{$ar_6['9']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int9_e" value="2" {{$ar_6['9']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int9_e" value="3" {{$ar_6['9']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int9_e" value="4" {{$ar_6['9']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int9_e" value="5" {{$ar_6['9']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Otros buscan su compañía</td>
                                <td><input type="radio" name="int10_e" value="1" {{$ar_6['10']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="int10_e" value="2" {{$ar_6['10']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="int10_e" value="3" {{$ar_6['10']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="int10_e" value="4" {{$ar_6['10']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="int10_e" value="5" {{$ar_6['10']==5 ? "checked": ""}}></td>
                            </tr>


                        </table>

                        <!--INTELIGENCIA INTRAPERSONAL-->

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>INTELIGENCIA INTRAPERSONAL</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            </thead>

                            <tr>
                                <td>Demuestra sentido de independencia o voluntad fuerte</td>
                                <td><input type="radio" name="intra1_e" value="1" {{$ar_7['1']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra1_e" value="2" {{$ar_7['1']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra1_e" value="3" {{$ar_7['1']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra1_e" value="4" {{$ar_7['1']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra1_e" value="5" {{$ar_7['1']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene un concepto práctico de sus habilidades y debilidades</td>
                                <td><input type="radio" name="intra2_e" value="1" {{$ar_7['2']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra2_e" value="2" {{$ar_7['2']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra2_e" value="3" {{$ar_7['2']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra2_e" value="4" {{$ar_7['2']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra2_e" value="5" {{$ar_7['2']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Presenta buen desempeño cuando está solo jugando o estudiando</td>
                                <td><input type="radio" name="intra3_e" value="1" {{$ar_7['3']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra3_e" value="2" {{$ar_7['3']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra3_e" value="3" {{$ar_7['3']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra3_e" value="4" {{$ar_7['3']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra3_e" value="5" {{$ar_7['3']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Lleva un compás completamente diferente en cuanto a su estilo de vida y aprendizaje</td>
                                <td><input type="radio" name="intra4_e" value="1" {{$ar_7['4']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra4_e" value="2" {{$ar_7['4']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra4_e" value="3" {{$ar_7['4']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra4_e" value="4" {{$ar_7['4']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra4_e" value="5" {{$ar_7['4']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene un interés o pasatiempo sobre el que no habla mucho con los demás</td>
                                <td><input type="radio" name="intra5_e" value="1" {{$ar_7['5']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra5_e" value="2" {{$ar_7['5']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra5_e" value="3" {{$ar_7['5']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra5_e" value="4" {{$ar_7['5']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra5_e" value="5" {{$ar_7['5']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Tiene buen sentido de autodisciplina</td>
                                <td><input type="radio" name="intra6_e" value="1" {{$ar_7['6']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra6_e" value="2" {{$ar_7['6']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra6_e" value="3" {{$ar_7['6']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra6_e" value="4" {{$ar_7['6']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra6_e" value="5" {{$ar_7['6']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Prefiere trabajar solo</td>
                                <td><input type="radio" name="intra7_e" value="1" {{$ar_7['7']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra7_e" value="2" {{$ar_7['7']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra7_e" value="3" {{$ar_7['7']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra7_e" value="4" {{$ar_7['7']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra7_e" value="5" {{$ar_7['7']==5 ? "checked": ""}}></td>
                            </tr>


                            <tr>
                                <td>Expresa acertadamente sus sentimientos</td>
                                <td><input type="radio" name="intra8_e" value="1" {{$ar_7['8']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra8_e" value="2" {{$ar_7['8']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra8_e" value="3" {{$ar_7['8']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra8_e" value="4" {{$ar_7['8']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra8_e" value="5" {{$ar_7['8']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Es capaz de aprender de sus errores y logros en la vida</td>
                                <td><input type="radio" name="intra9_e" value="1" {{$ar_7['9']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra9_e" value="2" {{$ar_7['9']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra9_e" value="3" {{$ar_7['9']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra9_e" value="4" {{$ar_7['9']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra9_e" value="5" {{$ar_7['9']==5 ? "checked": ""}}></td>
                            </tr>

                            <tr>
                                <td>Demuestra un gran amor propio</td>
                                <td><input type="radio" name="intra10_e" value="1" {{$ar_7['10']==1 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra10_e" value="2" {{$ar_7['10']==2 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra10_e" value="3" {{$ar_7['10']==3 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra10_e" value="4" {{$ar_7['10']==4 ? "checked": ""}}></td>
                                <td><input type="radio" name="intra10_e" value="5" {{$ar_7['10']==5 ? "checked": ""}}></td>
                            </tr>


                        </table>

                        <div class="row" style="margin-left: 22%;">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Editar" />
                        </div>

                    </form>

                @endif



            </div>


        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li><a href="{{url('/int_mult_ej_1')}}" style="background-color: lightgray;">Ejercicio 1</a></li>
            <li><a href="{{url('/int_mult_ej_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/int_mult_ej_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/int_mult_ej_4')}}">Ejercicio 4</a></li>
            <li>
                <a href="{{url('/int_mult_ej_2')}}" aria-label="Next">
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
