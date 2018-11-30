@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RELACIONES Y SIMBOLIZACIÓN</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">Representación algebraica</p></strong><br>


                <strong>INSTRUCCIONES:</strong> Lee cuidadosamente con tus compañeros cada ejercicio y
                plantea tu respuesta.<br><br>
                {!! Form::open(['method'=>'POST', 'action'=>'TutorRelacionsController@store_rel_sim_4']) !!}

                    1. Una estancia tiene el doble de largo que de ancho: si el largo se disminuye en
                    6 m y el ancho aumenta en 4 m, la superficie de la estancia no varía. Obtén la
                    expresión matemática que te permita calcular las dimensiones de la estancia.<br>
                    {!! Form::label('a', $e1, ['class'=>'form-control'])!!}<br><br>

                    2. Tenía cierta suma de dinero. Ahorré una suma igual a la que tenía y gasté
                    $50.00; luego ahorré una suma igual al doble de lo que me quedaba y gasté
                    $390.00. Si ahora no tengo nada, ¿cuál es la expresión matemática que
                    representa al enunciado anterior?<br>
                    {!! Form::label('b', $e2, ['class'=>'form-control'])!!}<br><br>

                    3. Compré cuádruplo número de caballos que de vacas. Si hubiera comprado 5
                    caballos más y 5 vacas más tendría el triple de caballos que de vacas. Obtén la
                    expresión matemática que te permita calcular el número de caballos y de
                    vacas.<br>
                    {!! Form::label('c', $e3, ['class'=>'form-control'])!!}<br><br>



                <table class="col-lg-12">
                    <tr>
                        <td><strong>Retroalimentación:</strong></td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <textarea rows="5" name ="retro" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal" class="form-control name_list center-block">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><br>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                        </td>
                    </tr>
                </table>

                {!! Form::close() !!}

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
