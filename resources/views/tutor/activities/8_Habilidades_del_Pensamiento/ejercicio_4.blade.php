@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">La palabra correcta</p></strong><br>

                <strong>INSTRUCCIONES:</strong> Seleccione del listado de palabras que se encuentra al pie del
                ejercicio, aquella que integre el enunciado correctamente, conjugando el verbo de la
                manera más apropiada cuando sea necesario.<br><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'TutorPensamientosController@store_pens_3']) !!}

                    @if($f1_decode != NULL && $f2_decode != NULL && $f3_decode != NULL && $f4_decode != NULL && $f5_decode != NULL)

                    <div class="form-group">
                        <table>
                             <tr>
                                 <td>1. La palabra persona se &nbsp</td>
                                 <td>{!! Form::select('text1',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f1_decode) !!}</td>
                                 <td>&nbsp con el &nbsp</td>
                                 <td>{!! Form::select('text2',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f2_decode) !!}</td>
                                 <td>&nbsp moral y psicológico &nbsp</td>
                             </tr>
                        </table>
                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>&nbsp propio del &nbsp</td>
                                <td>{!! Form::select('text3',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f3_decode) !!}</td>
                                <td>&nbsp humano &nbsp</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>2. Nuestros &nbsp</td>
                                <td>{!! Form::select('text4',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f4_decode) !!}</td>
                                <td>&nbsp nahuas también tenían, como los &nbsp</td>
                                <td>{!! Form::select('text5',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f5_decode) !!}</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>el mismo concepto de persona.</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>

                    <table>
                        <tr>
                            <td>3. La &nbsp</td>
                            <td>{!! Form::select('text6',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f6_decode) !!}</td>
                            <td>&nbsp “hablaré a nuestro rostro, a nuestro corazón” va &nbsp</td>
                            <td>{!! Form::select('text7',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f7_decode) !!}</td>
                        </tr>
                    </table>

                        <table>
                            <tr>
                                <td> al receptor.</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>4. Para los nahuas el corazón era el &nbsp</td>
                                <td>{!! Form::select('text8',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f8_decode) !!}</td>
                                <td>&nbsp del que parece provenir la &nbsp</td>
                            </tr>
                        </table>

                            <table>
                                <tr>
                                    <td>&nbsp</td>
                                </tr>
                            </table>


                            <table>
                                <tr>
                                    <td>&nbsp acción del &nbsp</td>
                                    <td>{!! Form::select('text9',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f9_decode) !!}</td>
                                </tr>
                            </table>


                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>


                        <table>
                            <tr>
                                <td>5. Lo  &nbsp</td>
                                <td>{!! Form::select('text10',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f10_decode) !!}</td>
                                <td>&nbsp de los indígenas, era la &nbsp</td>
                                <td>{!! Form::select('text11',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f11_decode) !!}</td>
                                <td>de la educación: </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>&nbsp universal y obligatoria</td>
                            </tr>
                        </table>

                        <br><br>

                        <div style="border: 1px gray solid; padding: 1%;">

                            <strong>Listado de palabras</strong><br>

                                eje, colaboración, expresión, maravilloso, reglamentación, helenos, relaciona,
                                encaminada, ser, individuo, aventón, viejos, dirigidos, aspecto.

                        </div>

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
                                    <textarea rows="5" name ="retro3" class="form-control"></textarea>
                                    <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <br>
                                    <strong>Calificación:</strong>
                                    <br><br>
                                    <input type="text" name="cal3" class="form-control name_list center-block">
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

                            {!! Form::open(['method'=>'POST', 'action'=>'TutorPensamientosController@edit_pens_3']) !!}

                            @if($f1_decode != NULL && $f2_decode != NULL && $f3_decode != NULL && $f4_decode != NULL && $f5_decode != NULL)

                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>1. La palabra persona se &nbsp</td>
                                        <td>{!! Form::select('text1',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f1_decode) !!}</td>
                                        <td>&nbsp con el &nbsp</td>
                                        <td>{!! Form::select('text2',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f2_decode) !!}</td>
                                        <td>&nbsp moral y psicológico &nbsp</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>&nbsp propio del &nbsp</td>
                                        <td>{!! Form::select('text3',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f3_decode) !!}</td>
                                        <td>&nbsp humano &nbsp</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>2. Nuestros &nbsp</td>
                                        <td>{!! Form::select('text4',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f4_decode) !!}</td>
                                        <td>&nbsp nahuas también tenían, como los &nbsp</td>
                                        <td>{!! Form::select('text5',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f5_decode) !!}</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>el mismo concepto de persona.</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>3. La &nbsp</td>
                                        <td>{!! Form::select('text6',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f6_decode) !!}</td>
                                        <td>&nbsp “hablaré a nuestro rostro, a nuestro corazón” va &nbsp</td>
                                        <td>{!! Form::select('text7',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f7_decode) !!}</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td> al receptor.</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>4. Para los nahuas el corazón era el &nbsp</td>
                                        <td>{!! Form::select('text8',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f8_decode) !!}</td>
                                        <td>&nbsp del que parece provenir la &nbsp</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>


                                <table>
                                    <tr>
                                        <td>&nbsp acción del &nbsp</td>
                                        <td>{!! Form::select('text9',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f9_decode) !!}</td>
                                    </tr>
                                </table>


                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>


                                <table>
                                    <tr>
                                        <td>5. Lo  &nbsp</td>
                                        <td>{!! Form::select('text10',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f10_decode) !!}</td>
                                        <td>&nbsp de los indígenas, era la &nbsp</td>
                                        <td>{!! Form::select('text11',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f11_decode) !!}</td>
                                        <td>de la educación: </td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>&nbsp</td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>&nbsp universal y obligatoria</td>
                                    </tr>
                                </table>

                                <br><br>

                                <div style="border: 1px gray solid; padding: 1%;">

                                    <strong>Listado de palabras</strong><br>

                                    eje, colaboración, expresión, maravilloso, reglamentación, helenos, relaciona,
                                    encaminada, ser, individuo, aventón, viejos, dirigidos, aspecto.

                                </div>

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
