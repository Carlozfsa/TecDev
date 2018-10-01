@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    <strong>Ejercicio I</strong><br><br>
                    Uno de los primeros pasos para mejorar la habilidad de administrar el tiempo es
                    realizando un análisis de cómo se ha estado utilizando hasta este momento el
                    tiempo.<br>
                    Elabora una tabla para registrar por hora las actividades que realizas diariamente,
                    como se muestra en la figura.<br>
                </div><br><br>

                <div id="formato_unico">




                </div><br>


                <button id="add_activity">Add</button>

                <form name="d" id="d" method="post" action="{{url('/store/foda_4_4')}}">
                    {{csrf_field()}}

                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Categoría</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sabado</th>
                            <th>Domingo</th>
                            <th>TOTAL DE HORAS</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>1:00 AM</td>
                        <td id="a1" style="cursor: pointer;"></td>
                        <td id="a2" style="cursor: pointer;">1</td>
                        <td id="a3" style="cursor: pointer;">1</td>
                        <td id="a4" style="cursor: pointer;">1</td>
                        <td id="a5" style="cursor: pointer;">1</td>
                        <td id="a6" style="cursor: pointer;">1</td>
                        <td id="a7" style="cursor: pointer;">1</td>
                        <td id="a8" style="cursor: not-allowed;">1</td>
                    </tr>
                        <td>2:00 AM</td>
                        <td id="b1" style="cursor: pointer;">we1</td>
                        <td id="b2" style="cursor: pointer;">d1</td>
                        <td id="b3" style="cursor: pointer;">1</td>
                        <td id="b4" style="cursor: pointer;">1</td>
                        <td id="b5" style="cursor: pointer;">1</td>
                        <td id="b6" style="cursor: pointer;">1</td>
                        <td id="b7" style="cursor: pointer;">1</td>
                        <td id="b8" style="cursor: not-allowed;">1</td>
                    <tr>

                    </tr>

                    <tr>
                        <td>3:00 AM</td>
                        <td id="c1" style="cursor: pointer;">we1</td>
                        <td id="c2" style="cursor: pointer;">d1</td>
                        <td id="c3" style="cursor: pointer;">1</td>
                        <td id="c4" style="cursor: pointer;">1</td>
                        <td id="c5" style="cursor: pointer;">1</td>
                        <td id="c6" style="cursor: pointer;">1</td>
                        <td id="c7" style="cursor: pointer;">1</td>
                        <td id="c8" style="cursor: not-allowed;">1</td>
                    </tr>

                    </tr>
                    <td> 4:00 AM</td>
                    <td id="d1" style="cursor: pointer;">we1</td>
                    <td id="d2" style="cursor: pointer;">d1</td>
                    <td id="d3" style="cursor: pointer;">1</td>
                    <td id="d4" style="cursor: pointer;">1</td>
                    <td id="d5" style="cursor: pointer;">1</td>
                    <td id="d6" style="cursor: pointer;">1</td>
                    <td id="d7" style="cursor: pointer;">1</td>
                    <td id="d8" style="cursor: not-allowed;">1</td>
                    <tr>

                    <tr>
                        <td>5:00 AM</td>
                        <td id="e1" style="cursor: pointer;">we1</td>
                        <td id="e2" style="cursor: pointer;">d1</td>
                        <td id="e3" style="cursor: pointer;">1</td>
                        <td id="e4" style="cursor: pointer;">1</td>
                        <td id="e5" style="cursor: pointer;">1</td>
                        <td id="e6" style="cursor: pointer;">1</td>
                        <td id="e7" style="cursor: pointer;">1</td>
                        <td id="e8" style="cursor: not-allowed;">1</td>
                    </tr>
                    </tr>
                    <td>6:00 AM</td>
                    <td id="f1" style="cursor: pointer;">we1</td>
                    <td id="f2" style="cursor: pointer;">d1</td>
                    <td id="f3" style="cursor: pointer;">1</td>
                    <td id="f4" style="cursor: pointer;">1</td>
                    <td id="f5" style="cursor: pointer;">1</td>
                    <td id="f6" style="cursor: pointer;">1</td>
                    <td id="f7" style="cursor: pointer;">1</td>
                    <td id="f8" style="cursor: not-allowed;">1</td>
                    <tr>

                    <tr>
                        <td>7:00 AM</td>
                        <td id="g1" style="cursor: pointer;">we1</td>
                        <td id="g2" style="cursor: pointer;">d1</td>
                        <td id="g3" style="cursor: pointer;">1</td>
                        <td id="g4" style="cursor: pointer;">1</td>
                        <td id="g5" style="cursor: pointer;">1</td>
                        <td id="g6" style="cursor: pointer;">1</td>
                        <td id="g7" style="cursor: pointer;">1</td>
                        <td id="g8" style="cursor: not-allowed;">1</td>
                    </tr>

                    </tr>
                    <td>8:00 AM</td>
                    <td id="h1" style="cursor: pointer;">we1</td>
                    <td id="h2" style="cursor: pointer;">d1</td>
                    <td id="h3" style="cursor: pointer;">1</td>
                    <td id="h4" style="cursor: pointer;">1</td>
                    <td id="h5" style="cursor: pointer;">1</td>
                    <td id="h6" style="cursor: pointer;">1</td>
                    <td id="h7" style="cursor: pointer;">1</td>
                    <td id="h8" style="cursor: not-allowed;">1</td>
                    <tr>

                    <tr>
                        <td>9:00 AM</td>
                        <td id="i1" style="cursor: pointer;">we1</td>
                        <td id="i2" style="cursor: pointer;">d1</td>
                        <td id="i3" style="cursor: pointer;">1</td>
                        <td id="i4" style="cursor: pointer;">1</td>
                        <td id="i5" style="cursor: pointer;">1</td>
                        <td id="i6" style="cursor: pointer;">1</td>
                        <td id="i7" style="cursor: pointer;">1</td>
                        <td id="i8" style="cursor: not-allowed;">1</td>
                    </tr>

                    <tr>
                        <td>10:00 AM</td>
                        <td id="j1" style="cursor: pointer;">we1</td>
                        <td id="j2" style="cursor: pointer;">d1</td>
                        <td id="j3" style="cursor: pointer;">1</td>
                        <td id="j4" style="cursor: pointer;">1</td>
                        <td id="j5" style="cursor: pointer;">1</td>
                        <td id="j6" style="cursor: pointer;">1</td>
                        <td id="j7" style="cursor: pointer;">1</td>
                        <td id="j8" style="cursor: not-allowed;">1</td>
                    </tr>

                    <tr>
                        <td>
                            13:00 AM
                        </td>
                        <td id="k1" style="cursor: pointer;">we1</td>
                        <td id="k2" style="cursor: pointer;">d1</td>
                        <td id="k3" style="cursor: pointer;">1</td>
                        <td id="k4" style="cursor: pointer;">1</td>
                        <td id="k5" style="cursor: pointer;">1</td>
                        <td id="k6" style="cursor: pointer;">1</td>
                        <td id="k7" style="cursor: pointer;">1</td>
                        <td id="k8" style="cursor: not-allowed;">1</td>
                    </tr>

                    <tr>
                        <td>
                            14:00 AM
                        <td id="l1" style="cursor: pointer;">we1</td>
                        <td id="l2" style="cursor: pointer;">d1</td>
                        <td id="l3" style="cursor: pointer;">1</td>
                        <td id="l4" style="cursor: pointer;">1</td>
                        <td id="l5" style="cursor: pointer;">1</td>
                        <td id="l6" style="cursor: pointer;">1</td>
                        <td id="l7" style="cursor: pointer;">1</td>
                        <td id="l8" style="cursor: not-allowed;">1</td>
                    </tr>


                </table>

                </form>

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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="o4[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });
    });
    </script>


<script>

    $(document).ready(function(){
        //var i = 0;
        $('td').css({'border':'1px  #ccccb3 solid'});


        $('#a1').on('click', function(){

            //$('#formato_unico').css({'visibility':'hidden'});
            $('td').css({'border':'1px solid #ccccb3'});
            //$('td').removeAttr('button');
            $(this).css({'border': '3px solid  red'});

            $('#formato_unico').css({'visibility':'visible'});

            {{--$("#formato_unico").append("<form name='add_fort' id='add_fort' method='post' action='{{url('/store/foda_4_4')}}'>" +--}}
                {{--"<div class='table-responsive'>"+--}}
                {{--"<table class='table table-bordered' id='dynamic_field'>"+--}}
                    {{--"<tr>"+--}}
                        {{--"<td><input type='tex' name='o4[]' placeholder='Escriba su respuesta' class='form-control name_list center-block'></td>"+--}}
                        {{--"<td><button type='button' name='add' id='add' class='btn btn-success center-block'>Agregar</button></td>"+--}}
                    {{--"</tr>"+--}}
                    {{--"</table>"+--}}
                {{--"<input type='submit' name='submit' id='submit' class='btn btn-info' value='Guardar' />"+--}}
            {{--"</form>");--}}
        {{--});--}}

        $('#a2').on('click', function(){
            $('#formato_unico').css({'visibility':'hidden'});
            $('td').css({'border':'1px  solid #ccccb3'});
            $(this).css({'border': '3px solid  red'});
            $('#formato_unico').css({'visibility':'visible'});

        });

        $('#a3').on('click', function(){
            //i=0;
            //$('#btn_1', '').remove();
            $('td').css({'border':'1px  solid #ccccb3'});
            $(this).css({'border': '3px solid  red'});

        });

        $('#a4').on('click', function(){
            //i=0;
            //$('#btn_1', '').remove();
            $('td').css({'border':'1px  solid #ccccb3'});
            $(this).css({'border': '3px solid  red'});

        });

        $('#a5').on('click', function(){
            //i=0;
            //$('#btn_1', '').remove();
            $('td').css({'border':'1px  solid #ccccb3'});
            $(this).css({'border': '3px solid  red'});

        });

        $('#a6').on('click', function(){
            //i=0;
            //$('#btn_1', '').remove();
            $('td').css({'border':'1px  solid #ccccb3'});
            $(this).css({'border': '3px solid  red'});

        });

        $('#a7').on('click', function(){
            //i=0;
            //$('#btn_1', '').remove();
            $('td').css({'border':'1px  solid #ccccb3'});
            $(this).css({'border': '3px solid  red'});

        });

    });

    $('#b1').on('click', function(){

        $('td').css({'border':'1px solid #ccccb3'});
        //$('td').removeAttr('button');
        $(this).css({'border': '3px solid  red'});

        // if(i<1){
        //
        //     $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
        //     i++;
        // }
    });

    $('#b2').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#b3').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#b4').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#b5').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#b6').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#b7').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#c1').on('click', function(){

        $('td').css({'border':'1px solid #ccccb3'});
        //$('td').removeAttr('button');
        $(this).css({'border': '3px solid  red'});

        // if(i<1){
        //
        //     $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
        //     i++;
        // }
    });

    $('#c2').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#c3').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#c4').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#c5').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#c6').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#c7').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#d1').on('click', function(){

        $('td').css({'border':'1px solid #ccccb3'});
        //$('td').removeAttr('button');
        $(this).css({'border': '3px solid  red'});

        // if(i<1){
        //
        //     $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
        //     i++;
        // }
    });

    $('#d2').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#d3').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#d4').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#d5').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#d6').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#d7').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#e1').on('click', function(){

        $('td').css({'border':'1px solid #ccccb3'});
        //$('td').removeAttr('button');
        $(this).css({'border': '3px solid  red'});

        // if(i<1){
        //
        //     $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
        //     i++;
        // }
    });

    $('#e2').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#e3').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#e4').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#e5').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#e6').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#e7').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#f1').on('click', function(){

        $('td').css({'border':'1px solid #ccccb3'});
        //$('td').removeAttr('button');
        $(this).css({'border': '3px solid  red'});

        // if(i<1){
        //
        //     $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
        //     i++;
        // }
    });

    $('#f2').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#f3').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#f4').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#f5').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#f6').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#f7').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#g1').on('click', function(){

        $('td').css({'border':'1px solid #ccccb3'});
        //$('td').removeAttr('button');
        $(this).css({'border': '3px solid  red'});

        // if(i<1){
        //
        //     $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
        //     i++;
        // }
    });

    $('#g2').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#g3').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#g4').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#g5').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#g6').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });

    $('#g7').on('click', function(){
        //i=0;
        //$('#btn_1', '').remove();
        $('td').css({'border':'1px  solid #ccccb3'});
        $(this).css({'border': '3px solid  red'});

    });
    });







</script>



@stop
