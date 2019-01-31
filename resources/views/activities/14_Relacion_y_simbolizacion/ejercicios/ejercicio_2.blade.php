@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RELACIONES Y SIMBOLIZACIÓN</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                    <strong><p style="text-align: center;">RELACIONES Y SIMBOLIZACIÓN</p></strong><br>


                    2. Compara los conceptos de cada grupo. Elimina la palabra que sobra y escribe
                    en las líneas punteadas lo que se te pide. Toma como referencia el ejemplo
                    resuelto que se da.<br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@store_rel_sim_2']) !!}
                <table>
                    <tr>
                     <td>

                    <table>
                        <tr>
                            <td rowspan = "2">
                                <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/ej1.png">
                            </td>
                            <td>
                                <strong>Se llaman:<br>
                                    Cubiertos</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Pon una característica<br>
                                esencial a 3 conceptos:<br>
                                <strong>Se usan para
                                    manejar alimentos</strong>
                            </td>
                        </tr>
                    </table>
                     </td>

                        <td>
                            <table>
                                <tr>
                                    <td rowspan = "2">
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/e.png">
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
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/b.png">
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
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/f.png">
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
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/c.png">
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
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/g.png">
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
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/d.png">
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
                                        <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/h.png">
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

               @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br>

                    <strong><p style="text-align: center;">RELACIONES Y SIMBOLIZACIÓN</p></strong><br>


                    2. Compara los conceptos de cada grupo. Elimina la palabra que sobra y escribe
                    en las líneas punteadas lo que se te pide. Toma como referencia el ejemplo
                    resuelto que se da.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@edit_rel_sim_2']) !!}
                    <table>
                        <tr>
                            <td>

                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/ej1.png">
                                        </td>
                                        <td>
                                            <strong>Se llaman:<br>
                                                Cubiertos</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Pon una característica<br>
                                            esencial a 3 conceptos:<br>
                                            <strong>Se usan para
                                                manejar alimentos</strong>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/e.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('e_e', $f_decode4, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/b.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('b_e', $f_decode1, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/f.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('f_e', $f_decode5, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/c.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('c_e', $f_decode2, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/g.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('g_e', $f_decode6, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/d.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('d_e', $f_decode3, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                            <td>
                                <table>
                                    <tr>
                                        <td rowspan = "2">
                                            <img width="100" height=100" src="images/14_Relacion_y_simbolizacion/2/h.png">
                                        </td>
                                        <td>
                                            Señala alguna
                                            característica esencial:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('h_e', $f_decode7, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                        </tr>


                        </tr>
                    </table>
                    <br><br>

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
                    <a href="{{url('/rel_sim_1')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/rel_sim_1')}}">Ejercicio 1</a></li>
                <li><a href="{{url('/rel_sim_2')}}" style="background-color: lightgray;">Ejercicio 2</a></li>
                <li><a href="{{url('/rel_sim_3')}}">Ejercicio 3</a></li>
                <li><a href="{{url('/rel_sim_4')}}">Ejercicio 4</a></li>
                <li><a href="{{url('/rel_sim_5')}}">Ejercicio 5</a></li>
                <li>
                    <a href="{{url('/rel_sim_3')}}" aria-label="Next">
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
