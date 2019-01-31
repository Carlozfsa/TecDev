@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">EJERCICIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <p style="text-align: center;">
                    <strong>  APTITUD NUMÉRICA</strong><br>
                </p>

                <p>
                    <strong>2. Aptitud Numérica:</strong> Hace referencia al pensamiento matemático, a las
                    operaciones y sistemas que pueden usarse en la solución de problemas con
                    números.
                </p><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@store_int_mult_ej_2']) !!}


                    <strong>* EJERCICIOS PARA DESARROLLAR LA APTITUD NUMÉRICA</strong><br><br>
                <strong>I. LOS ZOQUETES DE COLORES</strong><br>
                Hay diez zoquetes rojos y diez zoquetes azules mezclados en el cajón del armario.
                Los veinte zoquetes son exactamente iguales, salvo por el color. El cuarto está
                absolutamente a oscuras y tú quieres dos zoquetes del mismo color. ¿Cuál es el
                menor número de zoquetes que debes sacar del cajón para estar seguro de que
                tienes un par del mismo color?<br>

                    @if($f_1 != NULL && $f_2 != NULL && $f_3 != NULL)

                <table>

                        <tr>
                            <div class="form-group">
                                <td>R=</td>
                                <td class="col-sm-12">{!! Form::label('num_1_e', $f_1, ['class'=>'form-control']) !!}</td>
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
                            <td>R=</td>
                            <td class="col-sm-12">{!! Form::label('num_2_e', $f_2, ['class'=>'form-control']) !!}</td>
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
                            <td>R=</td>
                            <td class="col-sm-12">{!! Form::label('num_2_e', $f_3, ['class'=>'form-control']) !!}</td>
                        </div>
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

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@edit_int_mult_ej_2']) !!}

                    <strong>* EJERCICIOS PARA DESARROLLAR LA APTITUD NUMÉRICA</strong><br><br>
                    <strong>I. LOS ZOQUETES DE COLORES</strong><br>
                    Hay diez zoquetes rojos y diez zoquetes azules mezclados en el cajón del armario.
                    Los veinte zoquetes son exactamente iguales, salvo por el color. El cuarto está
                    absolutamente a oscuras y tú quieres dos zoquetes del mismo color. ¿Cuál es el
                    menor número de zoquetes que debes sacar del cajón para estar seguro de que
                    tienes un par del mismo color?<br>

                    @if($f_1 != NULL && $f_2 != NULL && $f_3 != NULL)


                    <table>

                        <tr>
                            <div class="form-group">
                                <td>R=</td>
                                <td class="col-sm-12">{{$f_1}}</td>
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
                                <td>R=</td>
                                <td class="col-sm-12">{{$f_2}}</td>
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
                                <td>R=</td>
                                <td class="col-sm-12">{{$f_3}}</td>
                            </div>
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

@stop
