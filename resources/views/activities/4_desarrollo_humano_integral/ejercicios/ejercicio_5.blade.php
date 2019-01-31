@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit == 0)

                    <strong>Ejercicio</strong><br>

                    Analiza las analogías que hay en este pequeño poema.<br><br>


                    <div style="margin-left: 33%">
                        <strong>Azul de ti</strong><br>
                        Pensar en ti es azul, como ir vagando<br>
                        por un bosque dorado al mediodía:<br>
                        nacen jardines en el habla mía<br>
                        y con mis nubes por tus sueños ando.<br>
                        Nos une y nos separa un aire blando,<br>
                        una distancia de melancolía;<br>
                        yo alzo los brazos de mi poesía,<br>
                        azul de ti, dolido y esperando.<br>
                        Es como un horizonte de violines<br>
                        o un tibio sufrimiento de jazmines<br>
                        pensar en ti, de azul temperamento.<br><br>
                    </div>
                    <div style="margin-left: 60%">
                        Eduardo Carranza (Colombia,l913)<br><br>
                    </div>

                    Observa que "pensar en azul" puede representar pensar en sentimientos de
                    tranquilidad, paz, belleza del cielo; la relación entre "jardines" y "el habla mía" puede
                    ser la misma que existe entre las cosas hermosas y las palabras que expresa el
                    poeta.
                    Trata, ahora, de encontrar otras relaciones analógicas en el resto del poema.<br>

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/des_hum_int_ej_5')}}">
                    {{csrf_field()}}

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td ><input type="text" name="log[]" placeholder="Escriba una relación analógica" class="form-control name_list center-block"></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                            </tr>
                        </table>
                    </div>

                    <div class="row" style="margin-left: 22%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                    </div>
                </form>

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div>

                    <strong>Ejercicio</strong><br>

                    Analiza las analogías que hay en este pequeño poema.<br><br>


                    <div style="margin-left: 33%">
                        <strong>Azul de ti</strong><br>
                        Pensar en ti es azul, como ir vagando<br>
                        por un bosque dorado al mediodía:<br>
                        nacen jardines en el habla mía<br>
                        y con mis nubes por tus sueños ando.<br>
                        Nos une y nos separa un aire blando,<br>
                        una distancia de melancolía;<br>
                        yo alzo los brazos de mi poesía,<br>
                        azul de ti, dolido y esperando.<br>
                        Es como un horizonte de violines<br>
                        o un tibio sufrimiento de jazmines<br>
                        pensar en ti, de azul temperamento.<br><br>
                    </div>
                    <div style="margin-left: 60%">
                        Eduardo Carranza (Colombia,l913)<br><br>
                    </div>

                    Observa que "pensar en azul" puede representar pensar en sentimientos de
                    tranquilidad, paz, belleza del cielo; la relación entre "jardines" y "el habla mía" puede
                    ser la misma que existe entre las cosas hermosas y las palabras que expresa el
                    poeta.
                    Trata, ahora, de encontrar otras relaciones analógicas en el resto del poema.<br>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/des_hum_int_ej_5')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_edit">
                                @foreach($f_decode1 as $key=>$value)
                                    <tr id="row{{$key}}">
                                        <td ><input type="text" name="log_e[]" placeholder="Escriba una relación analógica" class="form-control name_list center-block" value="{{$value}}"></td>
                                        @if($key==1) <td><button type="button" name="add_edit" id="add_edit" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit" id="{{$key}}" class="btn btn-danger btn_remove_edit center-block">X</button></td> @endif
                                    </tr>
                                @endforeach
                            </table>
                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Editar" />
                        </div>

                    </form>

                @endif


                </div>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:15%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_ej_4')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_ej_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/des_hum_int_ej_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/des_hum_int_ej_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/des_hum_int_ej_4')}}">Ejercicio 4</a></li>
            <li><a href="{{url('/des_hum_int_ej_5')}}"style="background-color: lightgray;">Ejercicio 5</a></li>
            <li><a href="{{url('/des_hum_int_ej_6')}}">Ejercicio 6</a></li>
            <li>
                <a href="{{url('/des_hum_int_ej_6')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="log[]" placeholder="Escriba una relación analógica" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>

<script>
    $(document).ready(function(){


        var i= $('#dynamic_field_edit').length;

        $('#add_edit').click(function(){
            i++;
            $('#dynamic_field_edit').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="log_e[]" placeholder="Escriba una relación analógica" class="form-control name_list" /></td><td><button type="button" name="remove_edit" id="'+i+'" class="btn btn-danger btn_remove_edit center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove_edit', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>




@stop
