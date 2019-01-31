@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RELACIONES Y SIMBOLIZACIÓN</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">RELACIONES Y SIMBOLIZACIÓN</p></strong><br>


                2. Compara los conceptos de cada grupo. Elimina la palabra que sobra y escribe
                en las líneas punteadas lo que se te pide. Toma como referencia el ejemplo
                resuelto que se da.<br><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'TutorRelacionsController@store_rel_sim_2']) !!}

                    @if($e1 != NULL && $e2 != NULL && $e3 != NULL && $e4 != NULL && $e5 != NULL && $e6 != NULL && $e7 != NULL)

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
                                    <td>{!! Form::label('', $e4, ['class'=>'form-control'])!!}</td>
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
                                    <td>{!! Form::label('', $e1, ['class'=>'form-control'])!!}</td>
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
                                    <td>{!! Form::label('', $e5, ['class'=>'form-control'])!!}</td>
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
                                    <td>{!! Form::label('', $e2, ['class'=>'form-control'])!!}</td>
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
                                    <td>{!! Form::label('', $e6, ['class'=>'form-control'])!!}</td>
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
                                    <td>{!! Form::label('', $e3, ['class'=>'form-control'])!!}</td>
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
                                    <td>{!! Form::label('', $e7, ['class'=>'form-control'])!!}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                </tr>
                </table>
                <br><br>

                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif

                <table class="col-lg-12">
                    <tr>
                        <td><strong>Retroalimentación:</strong></td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <textarea rows="5" name ="retro2" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal2" class="form-control name_list center-block">
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

                @else

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorRelacionsController@edit_rel_sim_2']) !!}

                    @if($e1 != NULL && $e2 != NULL && $e3 != NULL && $e4 != NULL && $e5 != NULL && $e6 != NULL && $e7 != NULL)

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
                                        <td>{!! Form::label('', $e4, ['class'=>'form-control'])!!}</td>
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
                                        <td>{!! Form::label('', $e1, ['class'=>'form-control'])!!}</td>
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
                                        <td>{!! Form::label('', $e5, ['class'=>'form-control'])!!}</td>
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
                                        <td>{!! Form::label('', $e2, ['class'=>'form-control'])!!}</td>
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
                                        <td>{!! Form::label('', $e6, ['class'=>'form-control'])!!}</td>
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
                                        <td>{!! Form::label('', $e3, ['class'=>'form-control'])!!}</td>
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
                                        <td>{!! Form::label('', $e7, ['class'=>'form-control'])!!}</td>
                                    </tr>
                                </table>
                            </td>

                        </tr>

                        </tr>
                    </table>
                    <br><br>


                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif

                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro_e" class="form-control">{{$retro}}</textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal_e" class="form-control name_list center-block" value="{{$cal}}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Editar" />
                            </td>
                        </tr>
                    </table>

                    {!! Form::close() !!}

                @endif

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
