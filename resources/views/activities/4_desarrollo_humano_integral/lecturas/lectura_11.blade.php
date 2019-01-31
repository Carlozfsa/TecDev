@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>RELACIONES ANALÓGICAS</strong><br><br>

                <strong>Transferencia de relaciones</strong>
                Lee la siguiente historia:<br>
                Un día Sherlock Holmes trataba de descifrar el caso de un hombre que fue
                asesinado. No me explico cómo sucedió -- dijo Watson -- la puerta estaba bien
                cerrada y la única ventana está a casi 6 m de altura y es imposible escalar por ahí.
                Sin embargo, Mr. Williams siempre la dejaba abierta --dijo Sherlock--creo que por ahí
                se arrojó el cuchillo que lo mató.<br>
                Sólo que el criminal haya volado como un ave --dijo con cierta burla Watson. ¿Volar
                has dicho? ¡Claro, tienes razón! Uno de los sospechosos debió trabajar en un circo o
                en un gimnasio en donde tienen trampolines de resortes, usando ese aparato lanzó
                el cuchillo.<br>
                Es verdad, sé que Peters se dedicó en su juventud a probar ese tipo de aparatos en
                una fábrica. Pero ¿cómo lo supiste?<br>
                Elemental mi querido Watson, pero tú me diste la respuesta, --dijo Sherlock.
                Una característica de las personas inteligentes es transferir una relación que se da
                en una situación, "las aves vuelan", a otra muy diferente "un hombre puede volar".<br>
                Seguramente has leído líneas como ésta en algún poema como el siguiente: "tu risa
                es un río alegre que baja la montaña" que tiene que ver el río con la risa, en este
                ejemplo? Claro, en el contexto del verso ambos se parecen porque pueden ser
                agradables al oído.<br>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_10')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/des_hum_int_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/des_hum_int_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/des_hum_int_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/des_hum_int_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/des_hum_int_l_6')}}">Lectura 6</a></li>
            <li><a href="{{url('/des_hum_int_l_7')}}">Lectura 7</a></li>
            <li><a href="{{url('/des_hum_int_l_8')}}">Lectura 8</a></li>
            <li><a href="{{url('/des_hum_int_l_9')}}">Lectura 9</a></li>
            <li><a href="{{url('/des_hum_int_l_10')}}">Lectura 10</a></li>
            <li><a href="{{url('/des_hum_int_l_11')}}" style="background-color: lightgray;">Lectura 11</a></li>
            <li><a href="{{url('/des_hum_int_l_12')}}">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_12')}}" aria-label="Next">
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
