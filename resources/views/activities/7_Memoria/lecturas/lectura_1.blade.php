@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">LA MEMORIA</p></strong><br>

                <table>
                        <tr>
                           <td>
                               La memoria puede definirse como la capacidad de
                               almacenar, procesar y recuperar información que
                               proviene del mundo exterior los conceptos de
                               aprendizaje y memoria están íntimamente
                               relacionados.
                               La memoria humana tiene tres fases, la codificación
                               de la información, su almacenaje y su posterior
                               recuperación
                           </td>
                            <td>
                                    <img width="200" height=200" src="images/7_Memoria/mem.png">
                            </td>
                        </tr>
                </table>
                <br>
                Una vez almacenamos la información se produce una progresiva pérdida de datos si
                el cerebro no recibe los estímulos adecuados para conservar los recuerdos.<br>
                Existen tres tipos de memoria humana según la duración de la retención del
                recuerdo.<br><br>

                <ol>
                    <li>
                        La memoria sensorial: está fuera de control de la conciencia y se da de una
                        manera automática. Provienen de los sentidos, como la vista y el oído, y
                        prolongan la duración de la estimulación.
                    </li>
                    <li>
                        Memoria a corto plazo. Una de las dicotomías más clásicas en relación con la
                        memoria cosiste en la distinción entre memoria a corto y a largo plazo.<br>
                        Memoria a corto plazo u operativa: esta memoria nos permite recordar entre
                        7-9 elementos durante 10-15 segundos. De esta serie de elementos siempre
                        recordamos mejor el primero y el último. Son ejemplos de memoria a corto
                        plazo la repetición de dígitos, palabras, frases, secuencias de bloques
                        señalados con el dedo, ritmos, números de teléfonos, etc.
                    </li>
                    <li>
                        Memoria a largo plazo: Es donde almacenamos los recuerdos vividos, el
                        conocimiento, las imágenes, los conceptos, estrategias de actuación, etc. Es
                        la que consideramos como memoria en general. La memoria a largo plazo
                        tiene una capacidad ilimitada y puede retener la información durante toda la
                        vida si recibe los estímulos adecuados.
                    </li>
                </ol>
                <br>
                Se calcula que el cerebro humano puede almacenar la información equivalente a 20
                millones de libros, como las bibliotecas más importantes del mundo. En toda nuestra
                vida solo utilizamos una diezmilésima parte del potencial de nuestro cerebro.
                Podemos potenciar nuestra memoria con algunas técnicas, por ejemplo con frases
                guía o con asociaciones mentales.<br>
                El hecho de hablar normalmente de memoria en singular, podría hacer pensar que la
                memoria humana es un sistema único. Sin embargo, la psicología experimental de la
                memoria ha mostrado la existencia de distintas memorias, cada una con
                características, funciones y procesos propios (v.g., Baddeley, 1990; Ballesteros,
                1994; Ruiz-Vargas, 1994; Schacter, 1996; Tulving, 1983). A lo largo de la historia del
                estudio científico de la memoria, unos teóricos han acentuado sus aspectos
                estructurales, otros los procesos implicados en la memoria, y otros aún los sistemas
                diferentes de memoria que existen en el cerebro humano (v.g., Atkinson y Shiffrin,
                1968; Craik y Lockhart, 1975; Roediger, 1990; Squire, 1987; Tulving y Schacter,
                1990).



            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/hab_est_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/hab_est_1')}}"><strong>Ejercicio previo</strong></a></li>
            <li><a href="{{url('/mem_l_1')}}" style="background-color: lightgray;">Lectura 1</a></li>
            <li><a href="{{url('/mem_l_2')}}">Lectura 2</a></li>
            <li>
                <a href="{{url('/mem_l_2')}}" aria-label="Next">
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
