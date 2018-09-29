@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INFERENCIAS LÓGICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">INFERENCIAS LÓGICAS.</p></strong><br>

                Las inferencias lógicas se refieren a la posibilidad del individuo para deducir
                conclusiones, a partir de datos o proposiciones conocidas.<br><br>

                <strong>Falso o verdadero</strong><br><br>

                <strong>INSTRUCCIONES:</strong> Lea cuidadosamente cada argumentación y marca en la línea,
                con una “V”, si son conclusiones lógicas, y con una “F” si no lo son.<br>

                Los perros son animales, los animales tienen orejas, por lo tanto los perros tienen orejas.<br><br>

                {!! Form::open() !!}

                <ol>
                    <li>
                        Pocas casas de este barrio tienen balcones, pero todas tienen ascensor. Por lo
                        tanto:
                                <table>
                                    <tr>
                                        <td>
                                            a) Algunas tienen o balcón o ascensor &nbsp
                                        </td>
                                        <td>
                                            {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                        </td>
                                    </tr>
                                </table>



                            <table>
                                <tr>
                                    <td>
                                        b) Algunas tienen balcón y ascensor &nbsp
                                    </td>
                                    <td>
                                        {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                    </td>
                                </tr>
                            </table>
                            </li>

                    <br>
<!--Número 2 -->
                    <li>
                        El metro es más barato que el autobús. No tengo dinero suficiente para ir en
                        autobús, por lo tanto:
                        <table>
                            <tr>
                                <td>
                                    a)Tengo dinero suficiente para ir en metro &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>


                    <table>
                        <tr>
                            <td>
                                b) Puedo tener o no dinero suficiente para ir en metro &nbsp
                            </td>
                            <td>
                                {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                            </td>
                        </tr>
                    </table>
                    <br>

                    </li>

                    <!--Número 3 -->

                    <li>
                        Va por la calle. Una moto a toda velocidad lo atropella, por lo tanto:
                        <table>
                            <tr>
                                <td>
                                    a)La moto es mal manejada &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>


                        <table>
                            <tr>
                                <td>
                                    b) No debería permitirse circular a las motos &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>
                                    c) Desconocemos la causa del atropellamiento &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>

                    </li>
                    <br>

                    <!--Número 4 -->

                    <li>
                        Cuando A es más grande que B, X es más pequeña que B, Por lo tanto:
                        <table>
                            <tr>
                                <td>
                                    a) X nunca es más grande que A &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>


                        <table>
                            <tr>
                                <td>
                                    b) X nunca es más pequeña que A &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>
                                    c) X nunca es más pequeña que B &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>

                    </li>
                    <br>


                    <!--Número 5 -->

                    <li>
                        Cuando H es J, M es P. Cuando M no es P, R es J o P, por lo tanto :
                        <table>
                            <tr>
                                <td>
                                    a) Cuando H es J, R no es J ni P &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>


                        <table>
                            <tr>
                                <td>
                                    b) Cuando M es P, J o P es R &nbsp
                                </td>
                                <td>
                                    {!! Form::select('o1',[''=>'Verdadero', 'Falso'], null) !!}
                                </td>
                            </tr>
                        </table>

                    </li>


                </ol>

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
