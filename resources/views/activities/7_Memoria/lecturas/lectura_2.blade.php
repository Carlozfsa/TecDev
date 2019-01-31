@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">MEMORIA Y APRENDIZAJEs</p></strong><br>

                <strong>¿Por qué es relevante la memoria para el aprendizaje?</strong><br><br>

                Respuesta<br><br>

                Para aprender algo se necesita saber antes algo. Todo aprendizaje se realiza
                comparando lo nuevo con lo anterior.<br>
                “Cuando intentamos aprender algo nuevo, basamos nuestro aprendizaje en los
                esquemas ya existentes”, por lo tanto, cuantas más estructuras tengamos para
                compararlas con la nueva información, menos información será la que
                desechemos por que esta sea irrelevante o tenga que ser desvirtuada por que
                estemos intentando compararla con algo equivocado.
                Aprender algo que ya se estudió lleva mucho menos tiempo. Una vez que se ha
                aprendido algo puede reactivarse con mayor facilidad que si se trata de aprender
                una asignatura nueva.<br>
                Todo lo que el hombre experimenta contribuye a crear una concepción del mundo en
                uno u otro sentido (físico y espiritual)<br><br>

                <strong>Los tres tipos de memoria</strong><br>
                Los tipos de memoria más importantes para el aprendizaje son:<br><br>

                <ul>
                    <li>
                        <strong>Verbal:</strong> Dar nombre a las casas con objeto de recordarlas mejor o si el sonido de
                        las palabras le evoca el objeto. Crear vistosas imágenes al leer y con capacidad
                        de evocar cuando es necesario.<br>
                    </li>

                    <li>
                        <strong>Visual:</strong>Formar imágenes mentales (texturas, color, formas, entre otros).
                        <br>
                    </li>

                    <li>
                        <strong>Cinestésica:</strong>Complemento valioso para reforzar la memoria verbal y visual. Es
                        la que nos permite recordar gracias a nuestros músculos, la que nos proporciona
                        el sentido del espacio que nos rodea.
                        <br>
                    </li>


                </ul>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mem_l_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mem_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/mem_l_2')}}" style="background-color: lightgray;">Lectura 2</a></li>
            <li><a href="{{url('/mem_1')}}"><strong>Primer ejercicio</strong></a></li>
            <li>
                <a href="{{url('/mem_1')}}" aria-label="Next">
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
