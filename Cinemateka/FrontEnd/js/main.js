$(document).ready(function() {
    $("#lista").on('click','option',function(){
    $.ajax({
        url: 'filter_cines.php',
        data: {"data": $("#lista").val()},
        success: function(response) {
            $('#cines').html('');
            for (var i = 0; ; i++){
                $('#cines').append('<br>'+'<li>'+ response[i] + '</li>'+'<br>');
                }
        }
            });
    });
});

