@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

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
