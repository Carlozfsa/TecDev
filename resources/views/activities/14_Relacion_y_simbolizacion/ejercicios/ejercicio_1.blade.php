@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RELACIONES Y SIMBOLIZACIÓN</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">RELACIONES Y SIMBOLIZACIÓN</p></strong><br>

                Es de especial importancia en el estudio de razones y funciones, de progresiones,
                sucesiones y series, así como para relacionar ángulos y lados de triángulos al
                estudiar congruencia de figuras.<br><br>


                <strong>INSTRUCCIONES:</strong> Presta atención a la explicación que realizará el facilitador en
                base al argumenta que se presenta a continuación. Posteriormente, resuelve lo que
                se te pide.<br><br>

                Al analizar algunos gráficos, situaciones o ideas te darás cuenta que puedes hacer
                comparaciones entre las variables que las caracterizan haciéndolas semejantes o
                diferentes, así es como puedes llegar a establecer una comparación.<br>
                Cuando llegas al punto de comparar, te das cuenta de que existen, características
                que poseen todos los miembros del grupo de objetos que estas comparando y que
                te lleva a relacionarlos a través de un solo concepto, ésta característica se llama
                característica esencial, sin embargo cada elemento sigue siendo independiente y
                diferenciable del resto ya que tienen cualidades que lo hacen poderse distinguir de
                los demás, esta se llama característica particular.<br>
                Así al analizar las variables, compararlas en diversas situaciones y definir las
                características particulares y esenciales, puedes llegar a establecer relaciones.<br><br>

                1. Analiza las palabras que se dan en cada grupo, establece la relación que
                guardan y escribe sobre cada línea punteada lo que se pide en cada caso, y
                agrega dos elementos más. Antes de iniciar, analiza el ejemplo que se da. Los
                elementos agregados aparecen en letra negrita.<br><br>

                <div style="margin-left: 23%">
                    <img width="400" height=200" src="images/14_Relacion_y_simbolizacion/1/ej1.png">
                </div><br><br>

            {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@store_rel_sim_1']) !!}

                <table>
                    <tr>
                     <td>

                    <table>
                        <tr>
                            <td rowspan = "2">
                                <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/a.png">
                            </td>
                            <td>
                                Señala alguna
                                característica esencial:
                            </td>
                        </tr>
                        <tr>
                            <td>{!! Form::text('a', null, ['class'=>'form-control'])!!}</td>
                        </tr>
                    </table>
                     </td>

                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/e.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('e', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/b.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('b', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/f.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('f', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/c.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('c', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/g.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('g', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/d.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('d', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/1/h.png">
                                    </td>
                                    <td>
                                        Señala alguna
                                        característica esencial:
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::text('h', null, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>


                </tr>
                </table>
                <br><br>

              {!! Form::submit('Guardar', ['class'=>'form-control btn btn-primary']) !!}

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
