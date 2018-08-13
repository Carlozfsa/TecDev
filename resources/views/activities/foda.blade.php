<!doctype html>
<html>
<head>
    <title>Panel de administración de actividades</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

<h2>Foda</h2>

<div class="table-responsive">
<form name="add_fort" id="add_fort">
    <table class="table table-bordered" id="dynamic_field">
        <tr>
            <td><input type="text" name="name[]" placeholder="Escriba una fortaleza" class="form-control name_list"></td>
            <td><button type="button" name="add" id="add" class="btn btn-success">Agregar</button></td>
        </tr>
    </table>
    <input type="button" name="submit" id="submit" class="btn btn-info" value="submit">
</form>
</div>

<script type="text/javascript">

$(document).ready(function(){
    var i=1;

    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').fadeOut();
    });

});


</script>

</body>

</html>