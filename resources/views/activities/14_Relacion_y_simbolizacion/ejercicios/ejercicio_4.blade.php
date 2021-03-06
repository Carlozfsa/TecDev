@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RELACIONES Y SIMBOLIZACIÓN</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                    <strong><p style="text-align: center;">Representación algebraica</p></strong><br>


                    <strong>INSTRUCCIONES:</strong> Lee cuidadosamente con tus compañeros cada ejercicio y
                    plantea tu respuesta.<br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@store_rel_sim_4']) !!}

                    1. Una estancia tiene el doble de largo que de ancho: si el largo se disminuye en
                    6 m y el ancho aumenta en 4 m, la superficie de la estancia no varía. Obtén la
                    expresión matemática que te permita calcular las dimensiones de la estancia.<br>
                    {!! Form::text('a', null, ['class'=>'form-control'])!!}<br><br>

                    2. Tenía cierta suma de dinero. Ahorré una suma igual a la que tenía y gasté
                    $50.00; luego ahorré una suma igual al doble de lo que me quedaba y gasté
                    $390.00. Si ahora no tengo nada, ¿cuál es la expresión matemática que
                    representa al enunciado anterior?<br>
                    {!! Form::text('b', null, ['class'=>'form-control'])!!}<br><br>

                    3. Compré cuádruplo número de caballos que de vacas. Si hubiera comprado 5
                    caballos más y 5 vacas más tendría el triple de caballos que de vacas. Obtén la
                    expresión matemática que te permita calcular el número de caballos y de
                    vacas.<br>
                    {!! Form::text('c', null, ['class'=>'form-control'])!!}<br><br>



                    {!! Form::submit('Guardar', ['class'=>'form-control btn btn-primary']) !!}

                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br>

                    <strong><p style="text-align: center;">Representación algebraica</p></strong><br>


                    <strong>INSTRUCCIONES:</strong> Lee cuidadosamente con tus compañeros cada ejercicio y
                    plantea tu respuesta.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@edit_rel_sim_4']) !!}

                    1. Una estancia tiene el doble de largo que de ancho: si el largo se disminuye en
                    6 m y el ancho aumenta en 4 m, la superficie de la estancia no varía. Obtén la
                    expresión matemática que te permita calcular las dimensiones de la estancia.<br>
                    {!! Form::text('a_e', $f_decode1, ['class'=>'form-control'])!!}<br><br>

                    2. Tenía cierta suma de dinero. Ahorré una suma igual a la que tenía y gasté
                    $50.00; luego ahorré una suma igual al doble de lo que me quedaba y gasté
                    $390.00. Si ahora no tengo nada, ¿cuál es la expresión matemática que
                    representa al enunciado anterior?<br>
                    {!! Form::text('b_e', $f_decode2, ['class'=>'form-control'])!!}<br><br>

                    3. Compré cuádruplo número de caballos que de vacas. Si hubiera comprado 5
                    caballos más y 5 vacas más tendría el triple de caballos que de vacas. Obtén la
                    expresión matemática que te permita calcular el número de caballos y de
                    vacas.<br>
                    {!! Form::text('c_e', $f_decode3, ['class'=>'form-control'])!!}<br><br>



                    {!! Form::submit('Editar', ['class'=>'form-control btn btn-primary']) !!}

                    {!! Form::close() !!}

                @endif

            </div>



        </div>
    </div>

    <div class="center-block" style="margin-left:20%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/rel_sim_3')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/rel_sim_1')}}">Ejercicio 1</a></li>
                <li><a href="{{url('/rel_sim_2')}}">Ejercicio 2</a></li>
                <li><a href="{{url('/rel_sim_3')}}">Ejercicio 3</a></li>
                <li><a href="{{url('/rel_sim_4')}}" style="background-color: lightgray;">Ejercicio 4</a></li>
                <li><a href="{{url('/rel_sim_5')}}">Ejercicio 5</a></li>
                <li>
                    <a href="{{url('/rel_sim_5')}}" aria-label="Next">
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
