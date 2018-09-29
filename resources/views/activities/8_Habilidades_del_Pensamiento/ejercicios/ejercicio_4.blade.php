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


                {!! Form::open() !!}

                    <div class="form-group">
                        <table>
                             <tr>
                                 <td>1. La palabra persona se &nbsp</td>
                                 <td>{!! Form::text('text1', null, ['class'=>'form-control']) !!}</td>
                                 <td>&nbsp con el &nbsp</td>
                                 <td>{!! Form::text('text2', null, ['class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::text('text3', null, ['class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::text('text4', null, ['class'=>'form-control']) !!}</td>
                                <td>&nbsp nahuas también tenían, como los &nbsp</td>
                                <td>{!! Form::text('text5', null, ['class'=>'form-control']) !!}</td>
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
                            <td>{!! Form::text('text6', null, ['class'=>'form-control']) !!}</td>
                            <td>&nbsp “hablaré a nuestro rostro, a nuestro corazón” va &nbsp</td>
                            <td>{!! Form::text('text7', null, ['class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::text('text8', null, ['class'=>'form-control']) !!}</td>
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
                                    <td>{!! Form::text('text9', null, ['class'=>'form-control']) !!}</td>
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
                                <td>{!! Form::text('text10', null, ['class'=>'form-control']) !!}</td>
                                <td>&nbsp de los indígenas, era la &nbsp</td>
                                <td>{!! Form::text('text11', null, ['class'=>'form-control']) !!}</td>
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
