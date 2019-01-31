@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">EJERCICIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">





                @if($edit==0)
                    <p style="text-align: center;">
                        <strong>  APTITUD NUMÉRICA</strong><br>
                    </p>

                    <p>
                        <strong>2. Aptitud Numérica:</strong> Hace referencia al pensamiento matemático, a las
                        operaciones y sistemas que pueden usarse en la solución de problemas con
                        números.
                    </p><br>
                {!! Form::open(['method'=>'POST', 'action'=>'InteligenciaController@store_int_mult_ej_2']) !!}

                <strong>* EJERCICIOS PARA DESARROLLAR LA APTITUD NUMÉRICA</strong><br><br>
                <strong>I. LOS ZOQUETES DE COLORES</strong><br>
                Hay diez zoquetes rojos y diez zoquetes azules mezclados en el cajón del armario.
                Los veinte zoquetes son exactamente iguales, salvo por el color. El cuarto está
                absolutamente a oscuras y tú quieres dos zoquetes del mismo color. ¿Cuál es el
                menor número de zoquetes que debes sacar del cajón para estar seguro de que
                tienes un par del mismo color?<br>

                <table>

                        <tr>
                            <div class="form-group">
                                <td>{!! Form::label('r1.1', 'R=') !!}</td>
                                <td class="col-sm-12">{!! Form::text('num_1', null, ['class'=>'form-control']) !!}</td>
                            </div>
                        </tr>
                </table>
                <br><br>

                <strong>II. PROBLEMA DE PESO</strong><br>
                Si una pelota de basket pesa ½ kilo más la mitad de su propio peso, ¿cuánto
                pesa?<br>

                <table>
                    <tr>
                        <div class="form-group">
                            <td>{!! Form::label('r2.1', 'R=') !!}</td>
                            <td class="col-sm-12">{!! Form::text('num_2', null, ['class'=>'form-control']) !!}</td>
                        </div>
                    </tr>
                </table>
                <br><br>

                <strong>III. LOS TRES GATOS</strong><br>
                Si tres gatos atrapan tres ratas en tres minutos, ¿cuántos gatos atraparán 100
                ratas en 100 minutos?<br>

                <table>
                    <tr>
                        <div class="form-group">
                            <td>{!! Form::label('r3.1', 'R=') !!}</td>
                            <td class="col-sm-12">{!! Form::text('num_3', null, ['class'=>'form-control']) !!}</td>
                        </div>
                    </tr>
                </table>
                <br><br>

                <div class="row" style="margin-left: 22%;">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                </div>

                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div>

                    <p style="text-align: center;">
                        <strong>  APTITUD NUMÉRICA</strong><br>
                    </p>

                    <p>
                        <strong>2. Aptitud Numérica:</strong> Hace referencia al pensamiento matemático, a las
                        operaciones y sistemas que pueden usarse en la solución de problemas con
                        números.
                    </p><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'InteligenciaController@edit_int_mult_ej_2']) !!}

                    <strong>* EJERCICIOS PARA DESARROLLAR LA APTITUD NUMÉRICA</strong><br><br>
                    <strong>I. LOS ZOQUETES DE COLORES</strong><br>
                    Hay diez zoquetes rojos y diez zoquetes azules mezclados en el cajón del armario.
                    Los veinte zoquetes son exactamente iguales, salvo por el color. El cuarto está
                    absolutamente a oscuras y tú quieres dos zoquetes del mismo color. ¿Cuál es el
                    menor número de zoquetes que debes sacar del cajón para estar seguro de que
                    tienes un par del mismo color?<br>

                    <table>

                        <tr>
                            <div class="form-group">
                                <td>{!! Form::label('r1.1', 'R=') !!}</td>
                                <td class="col-sm-12">{!! Form::text('num_1_e', $f_decode1, ['class'=>'form-control']) !!}</td>
                            </div>
                        </tr>
                    </table>
                    <br><br>

                    <strong>II. PROBLEMA DE PESO</strong><br>
                    Si una pelota de basket pesa ½ kilo más la mitad de su propio peso, ¿cuánto
                    pesa?<br>

                    <table>
                        <tr>
                            <div class="form-group">
                                <td>{!! Form::label('r2.1', 'R=') !!}</td>
                                <td class="col-sm-12">{!! Form::text('num_2_e', $f_decode2, ['class'=>'form-control']) !!}</td>
                            </div>
                        </tr>
                    </table>
                    <br><br>

                    <strong>III. LOS TRES GATOS</strong><br>
                    Si tres gatos atrapan tres ratas en tres minutos, ¿cuántos gatos atraparán 100
                    ratas en 100 minutos?<br>

                    <table>
                        <tr>
                            <div class="form-group">
                                <td>{!! Form::label('r3.1', 'R=') !!}</td>
                                <td class="col-sm-12">{!! Form::text('num_3_e', $f_decode3, ['class'=>'form-control']) !!}</td>
                            </div>
                        </tr>
                    </table>
                    <br><br>

                    <div class="row" style="margin-left: 22%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Editar" />
                    </div>

                    {!! Form::close() !!}

                @endif

            </div>







        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/int_mult_ej_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/int_mult_ej_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/int_mult_ej_2')}}" style="background-color: lightgray;">Ejercicio 2</a></li>
            <li><a href="{{url('/int_mult_ej_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/int_mult_ej_4')}}">Ejercicio 4</a></li>
            <li>
                <a href="{{url('/int_mult_ej_3')}}" aria-label="Next">
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
