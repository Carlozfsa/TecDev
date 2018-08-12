$(document).ready(function(){

    $('.btn-delete').click(function(e){
        e.preventDefault();

     //    $('#alert').fadeOut();
     //
        var row = $(this).parents('tr');
        var form =$(this).parents('form');
        var url = form.attr('action');

     // $('#alert').show();
     //
     //    $.post(url, form.serialize(), function(result){
     //        row.fadeOut();
     //        $('#alert'),html(result.message);
     //
     //    }).fail(function(){
     //        $('#alert').html('mal');
     //    });

        var act_id = $(this).val();
        $.ajax({
            type:'DELETE',
            url:'/eliminarActividad/'+'/'+act_id,
            success:function(){
                $('#alert').html('oks');
                row.remove();

            }


        });

    });

});
