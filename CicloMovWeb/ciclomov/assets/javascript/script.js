$(function() {
    
    $('#loginCheck1').click(function(){
        
        var checkbox = $('#loginCheck1');

        if(checkbox.is(":checked")) {
            $('#senha').attr('type', 'text');
        } else {
            $('#senha').attr('type', 'password');
        }

    });

    $('#loginCheck2').click(function(){

        var checkbox = $('#loginCheck2');

        if(checkbox.is(":checked")) {
            $('#senha2').attr('type', 'text');
            $('#senha3').attr('type', 'text');
        } else {
            $('#senha2').attr('type', 'password');
            $('#senha3').attr('type', 'password');
        }

    });

    // $('.trava').hide();
    // $('.msgAviso').hide();
    $(".AreaSelecaoPonto").addClass("disabled");

});