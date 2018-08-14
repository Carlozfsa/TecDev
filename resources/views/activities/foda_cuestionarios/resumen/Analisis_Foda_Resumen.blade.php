@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>


    <table class="table-responsive" style="margin-left:15%">
        <tr>
            <td>

                <div class="container col-sm-12">
                    <h2>Fortalezas</h2>
                    <div class="panel panel-default" style="background-color:blue; padding: 3%">
                        <div class="panel-body">A Basic Panel</div>
                        <form name="add_fort" id="add_fort">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td ><input type="text" name="name[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
                                </table>
                                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>

            </td>

            <td>

                <div class="container col-sm-12">
                    <h2>Oportunidades</h2>
                    <div class="panel panel-default panel-default" style="background-color:blue;  padding: 3%">
                        <div class="panel-body">A Basic Panel</div>
                        <form name="add_fort" id="add_fort">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td ><input type="text" name="name[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
                                </table>
                                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>

            </td>
        </tr>
        <tr>

            <td>

                <div class="container col-sm-12">
                    <h2>Debilidades</h2>
                    <div class="panel panel-default" style="background-color:blue;  padding: 3%">
                        <div class="panel-body">A Basic Panel</div>
                        <form name="add_fort" id="add_fort">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td ><input type="text" name="name[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
                                </table>
                                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>

            </td>

            <td>

                <div class="container col-sm-12">
                    <h2>Amenazas</h2>
                    <div class="panel panel-default" style="padding: 3%">
                        <div class="panel-body">A Basic Panel</div>
                        <form name="add_fort" id="add_fort">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td ><input type="text" name="name[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
                                </table>
                                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>

            </td>

        </tr>


    </table>


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
