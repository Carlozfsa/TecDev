@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL APRENDIZAJE DE LAS MATEMÁTICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">ABSTRACCIÓN REFLEXIVA E INFERENCIAS LÓGICAS.</p></strong><br>

                Se refiere a la capacidad del individuo de abstraer con criterio lógico mediante la
                asociación de características, como forma, tamaño, color, posición entre otras, en
                conjuntos o series de elementos numéricos o gráficos. Asimismo, corresponde a la
                capacidad para interiorizar conceptos que no son tangibles o concretos, tales como
                número, conjuntos de números, puntos, líneas, superficies, entre otros<br><br>

                <strong>INSTRUCCIONES:</strong> Lea cuidadosamente las indicaciones que se dan en cada caso y
                responda a lo que se le pide.<br><br>


                1. En la columna izquierda denominada “Figuras problema” se da una serie de
                figuras que guardan alguna relación. De la columna de la derecha que se
                llama “Figuras respuesta” selecciona solo una de ellas que le de continuidad a
                las figuras de la izquierda.<br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'MatsController@store_mat_2']) !!}

                <strong>a</strong><br>


                <div style="margin-left: 18%">
                    <img width="500" height=100" src="images/12_Aprendizaje_matematicas/logica/log.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica/log1.png"></td>
                        <td>{!! Form::radio('p1', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica/log2.png"></td>
                        <td>{!! Form::radio('p1', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica/log3.png"></td>
                        <td>{!! Form::radio('p1', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica/log4.png"></td>
                        <td>{!! Form::radio('p1', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica/log5.png"></td>
                        <td>{!! Form::radio('p1', 5) !!}&nbsp e)</td>

                    </tr>
                </table>
                <br><br><br>


                <strong>b</strong><br>


                <div style="margin-left: 18%">
                    <img width="500" height=100" src="images/12_Aprendizaje_matematicas/logica2/log.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica2/log1.png"></td>
                        <td>{!! Form::radio('p2', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica2/log2.png"></td>
                        <td>{!! Form::radio('p2', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica2/log3.png"></td>
                        <td>{!! Form::radio('p2', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica2/log4.png"></td>
                        <td>{!! Form::radio('p2', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica2/log5.png"></td>
                        <td>{!! Form::radio('p2', 5) !!}&nbsp e)</td>

                    </tr>
                </table>
                <br><br><br>

                <strong>c</strong><br>


                <div style="margin-left: 18%">
                    <img width="500" height=100" src="images/12_Aprendizaje_matematicas/logica3/log.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica3/log1.png"></td>
                        <td>{!! Form::radio('p3', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica3/log2.png"></td>
                        <td>{!! Form::radio('p3', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica3/log3.png"></td>
                        <td>{!! Form::radio('p3', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica3/log4.png"></td>
                        <td>{!! Form::radio('p3', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/logica3/log5.png"></td>
                        <td>{!! Form::radio('p3', 5) !!}&nbsp e)</td>

                    </tr>
                </table>
                <br><br><br>



                2. Descubra a los Raposos, a los Atrabiliarios y a los Esenios que aún no tienen
                puesto su nombre.<br>


                <table class="col-sm-12">

                    <tr>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log1.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log2.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log3.png"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('l1', 'RAPOSO') !!}</td>
                        <td>&nbsp;&nbsp;&nbsp;{!! Form::label('l1', 'ATRABILIARIO') !!}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('l1', 'ESENIO') !!}</td>
                    </tr>

                    <tr>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log4.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log5.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log6.png"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('ESENIO', null) !!}</td>
                        <td>{!! Form::text('t1', null) !!}</td>
                        <td>{!! Form::text('t2', null) !!}</td>
                    </tr>

                    <tr>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log7.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log8.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log9.png"></td>
                    </tr>

                    <tr>
                        <td>{!! Form::text('t3', null) !!}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('l1', 'RAPOSO') !!}</td>
                        <td>{!! Form::text('t4', null) !!}</td>
                    </tr>

                    <tr>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log10.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log11.png"></td>
                        <td><img width="150" height=150" src="images/12_Aprendizaje_matematicas/logica4/log12.png"></td>
                    </tr>

                    <tr>
                        <td>{!! Form::text('t5', null) !!}</td>
                        <td>{!! Form::text('t6', null) !!}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('l1', 'ATRABILIARIO') !!}</td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                </table>

                <div class="form-group">
                    {!! Form::submit('Guardar',['class'=>'btn btn-primary form-control']) !!}
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
