@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)

                    <strong><p style="text-align: center;">Búsqueda de relaciones de correspondencia</p></strong><br>

                    <strong>INSTRUCCIONES:</strong> Seleccione de las propuestas que se enuncian, la que
                    establezca una relación de semejanza con la interrogante. Posteriormente, deberá
                    fundamentar la elección por escrito.<br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'PensamientosController@store_pens_5']) !!}
                <ol>

                    <li>AZTECA es a MEXICANO como BALBUCEO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o1',1) !!}&nbsp palabra</li>
                            <li>{!! Form::radio('o1',2) !!}&nbsp lenguaje</li>
                            <li>{!! Form::radio('o1',3) !!}&nbsp sonido</li>
                            <li>{!! Form::radio('o1',4) !!}&nbsp alfabeto</li>
                            <li>{!! Form::radio('o1',5) !!}&nbsp sílaba</li>
                        </ol>

                    <li>CÓDICE es a HISTORIA como LIBRO es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o2',1) !!}&nbsp investigación</li>
                        <li>{!! Form::radio('o2',2) !!}&nbsp librería</li>
                        <li>{!! Form::radio('o2',3) !!}&nbsp biblioteca</li>
                        <li>{!! Form::radio('o2',4) !!}&nbsp escuela</li>
                        <li>{!! Form::radio('o2',5) !!}&nbsp bibliografía</li>
                    </ol>

                    <li>QUETZALCÓALTL es a TEOLOGÍA como PREHISPÁNICO es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o3',1) !!}&nbsp nahuátl</li>
                        <li>{!! Form::radio('o3',2) !!}&nbsp historia</li>
                        <li>{!! Form::radio('o3',3) !!}&nbsp mexica</li>
                        <li>{!! Form::radio('o3',4) !!}&nbsp antiguo</li>
                        <li>{!! Form::radio('o3',5) !!}&nbsp maya</li>
                    </ol>

                    <li>CORAZÓN es a SANGRE como SATÉLITE es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o4',1) !!}&nbsp tecnología</li>
                        <li>{!! Form::radio('o4',2) !!}&nbsp comunicación</li>
                        <li>{!! Form::radio('o4',3) !!}&nbsp información</li>
                        <li>{!! Form::radio('o4',4) !!}&nbsp imágenes</li>
                        <li>{!! Form::radio('o4',5) !!}&nbsp planeta</li>
                    </ol>

                </ol>

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


                    {!! Form::open(['method'=>'POST', 'action'=>'PensamientosController@edit_pens_5']) !!}
                    <ol>

                        <li>AZTECA es a MEXICANO como BALBUCEO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o1_e',1, $f_decode1==1 ? 1: 0) !!}&nbsp palabra</li>
                            <li>{!! Form::radio('o1_e',2, $f_decode1==2 ? 2 : 0) !!}&nbsp lenguaje</li>
                            <li>{!! Form::radio('o1_e',3, $f_decode1==3 ? 3 : 0) !!}&nbsp sonido</li>
                            <li>{!! Form::radio('o1_e',4, $f_decode1==4 ? 4 : 0) !!}&nbsp alfabeto</li>
                            <li>{!! Form::radio('o1_e',5, $f_decode1==5 ? 5 : 0) !!}&nbsp sílaba</li>
                        </ol>

                        <li>CÓDICE es a HISTORIA como LIBRO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o2_e',1, $f_decode2==1 ? 1: 0) !!}&nbsp investigación</li>
                            <li>{!! Form::radio('o2_e',2, $f_decode2==2 ? 2: 0) !!}&nbsp librería</li>
                            <li>{!! Form::radio('o2_e',3, $f_decode2==3 ? 3: 0) !!}&nbsp biblioteca</li>
                            <li>{!! Form::radio('o2_e',4, $f_decode2==4 ? 4: 0) !!}&nbsp escuela</li>
                            <li>{!! Form::radio('o2_e',5, $f_decode2==5 ? 5: 0) !!}&nbsp bibliografía</li>
                        </ol>

                        <li>QUETZALCÓALTL es a TEOLOGÍA como PREHISPÁNICO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o3_e',1, $f_decode3==1 ? 1: 0) !!}&nbsp nahuátl</li>
                            <li>{!! Form::radio('o3_e',2, $f_decode3==2 ? 2: 0) !!}&nbsp historia</li>
                            <li>{!! Form::radio('o3_e',3, $f_decode3==3 ? 3: 0) !!}&nbsp mexica</li>
                            <li>{!! Form::radio('o3_e',4, $f_decode3==4 ? 4: 0) !!}&nbsp antiguo</li>
                            <li>{!! Form::radio('o3_e',5, $f_decode3==5 ? 5: 0) !!}&nbsp maya</li>
                        </ol>

                        <li>CORAZÓN es a SANGRE como SATÉLITE es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o4_e',1, $f_decode4==1 ? 1: 0) !!}&nbsp tecnología</li>
                            <li>{!! Form::radio('o4_e',2, $f_decode4==2 ? 2: 0) !!}&nbsp comunicación</li>
                            <li>{!! Form::radio('o4_e',3, $f_decode4==3 ? 3: 0) !!}&nbsp información</li>
                            <li>{!! Form::radio('o4_e',4, $f_decode4==4 ? 4: 0) !!}&nbsp imágenes</li>
                            <li>{!! Form::radio('o4_e',5, $f_decode4==5 ? 5: 0) !!}&nbsp planeta</li>
                        </ol>

                    </ol>

                    <div class="form-group">
                        {!! Form::submit('Editar', ['class'=>'btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif

            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:10%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_l_4')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/pens_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/pens_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/pens_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/pens_4')}}">Ejercicio 4</a></li>
            <li><a href="{{url('/pens_5')}}" style="background-color: lightgray;">Ejercicio 5</a></li>
            <li><a href="{{url('/mapas_1')}}"><strong>Siguiente actividad</strong></a></li>

            <li>
                <a href="{{url('/mapas_1')}}" aria-label="Next">
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
