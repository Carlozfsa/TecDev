@extends('layouts.sideBarTutor')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 3: INTROSPECCIÓN. Oportunidades.
        </div>
        <div class="panel-body">


            <strong>INSTRUCCIONES:</strong>

            <div class="instrucciones" style="margin: 10px">

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_foda_4_2')}}">
                    {{csrf_field()}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <th style="text-align: center; background-color: lightblue;">Oportunidades</th>
                        </tr>
                    @foreach($o2_decode as $key=>$value)
                            <tr>
                                <td >{{$value}}</td>
                            </tr>
                @endforeach
                <br>
                    </table><br>

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

                    </div>
                </form>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:20%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>

            </li>
            <li><a href="{{url('/foda_1_1')}}" style="background-color: lightgray;">Fortalezas 1</a></li>
            <li><a href="{{url('/foda_1_2')}}">Fortalezas 2</a></li>
            <li><a href="{{url('/foda_1_3')}}">Fortalezas 3</a></li>
            <li><a href="{{url('/foda_1_4')}}">Fortalezas 4</a></li>
            <li>
                <a href="{{url('/foda_1_2')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="f1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
