@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)

                    <strong><p style="text-align: center;">La palabra correcta</p></strong><br>

                    <strong>INSTRUCCIONES:</strong> Seleccione del listado de palabras que se encuentra al pie del
                    ejercicio, aquella que integre el enunciado correctamente, conjugando el verbo de la
                    manera más apropiada cuando sea necesario.<br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'PensamientosController@store_pens_4']) !!}

                    <div class="form-group">
                        <table>
                             <tr>
                                 <td>1. La palabra persona se &nbsp</td>
                                 <td>{!! Form::select('text1',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                 <td>&nbsp con el &nbsp</td>
                                 <td>{!! Form::select('text2',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::select('text3',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::select('text4',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>&nbsp nahuas también tenían, como los &nbsp</td>
                                <td>{!! Form::select('text5',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                            <td>{!! Form::select('text6',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>&nbsp “hablaré a nuestro rostro, a nuestro corazón” va &nbsp</td>
                            <td>{!! Form::select('text7',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::select('text8',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                    <td>{!! Form::select('text9',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::select('text10',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>&nbsp de los indígenas, era la &nbsp</td>
                                <td>{!! Form::select('text11',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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

                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class'=>'btn-primary form-control']) !!}
                        </div>

                        {!! Form::close() !!}

                        @else

                            <div class="alert alert-success">
                                <strong>Aviso!</strong><br>
                                Registro guardado. Es posible editar la actividad.<br>
                                Puede continuar con la siguiente parte.
                            </div><br><br>

                            <strong><p style="text-align: center;">La palabra correcta</p></strong><br>

                            <strong>INSTRUCCIONES:</strong> Seleccione del listado de palabras que se encuentra al pie del
                            ejercicio, aquella que integre el enunciado correctamente, conjugando el verbo de la
                            manera más apropiada cuando sea necesario.<br><br>

                            {!! Form::open(['method'=>'POST', 'action'=>'PensamientosController@edit_pens_4']) !!}

                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>1. La palabra persona se &nbsp</td>
                                        <td>{!! Form::select('text1_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode1, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                        <td>&nbsp con el &nbsp</td>
                                        <td>{!! Form::select('text2_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode2, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                        <td>{!! Form::select('text3_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode3, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                        <td>{!! Form::select('text4_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode4, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                        <td>&nbsp nahuas también tenían, como los &nbsp</td>
                                        <td>{!! Form::select('text5_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode5, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                        <td>{!! Form::select('text6_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode6, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                        <td>&nbsp “hablaré a nuestro rostro, a nuestro corazón” va &nbsp</td>
                                        <td>{!! Form::select('text7_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode7, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                        <td>{!! Form::select('text8_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode8, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                        <td>{!! Form::select('text9_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode9, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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
                                        <td>{!! Form::select('text10_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode10, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                        <td>&nbsp de los indígenas, era la &nbsp</td>
                                        <td>{!! Form::select('text11_e',['0'=>'---','1'=>'eje','2'=>'colaboración','3'=>'expresión','4'=>'maravilloso','5'=>'reglamentación','6'=>'helenos','7'=>'relaciona','8'=>'encaminada','9'=>'ser','10'=>'individuo','11'=>'aventón','12'=>'viejos','13'=>'dirigidos','14'=>'aspecto'], $f_decode11, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
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

                                <div class="form-group">
                                    {!! Form::submit('Editar', ['class'=>'btn-primary form-control']) !!}
                                </div>

                                {!! Form::close() !!}

                        @endif


                        <br><br>

                        <div style="border: 1px gray solid; padding: 1%;">

                            <strong>Listado de palabras</strong><br>

                                eje, colaboración, expresión, maravilloso, reglamentación, helenos, relaciona,
                                encaminada, ser, individuo, aventón, viejos, dirigidos, aspecto.

                        </div>

                    </div>

            </div>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:17%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_l_3')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/pens_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/pens_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/pens_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/pens_4')}}" style="background-color: lightgray;">Ejercicio 4</a></li>
            <li><a href="{{url('/pens_5')}}">Ejercicio 5</a></li>
            <li>
                <a href="{{url('/pens_5')}}" aria-label="Next">
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
