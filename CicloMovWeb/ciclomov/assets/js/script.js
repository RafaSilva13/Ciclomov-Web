$(function() {
    
    $('#loginCheck1').click(function(){
        
        var checkbox = $('#loginCheck1');

        if(checkbox.is(":checked")) {

            $('#senha').attr('type', 'text');

        } 
        else 
        {

            $('#senha').attr('type', 'password');

        }

    });

    $('#loginCheck2').click( function(){

        var checkbox = $('#loginCheck2');

        if(checkbox.is(":checked")) {

            $('#senha2').attr('type', 'text');

            $('#senha3').attr('type', 'text');

        } 
        else 
        {

            $('#senha2').attr('type', 'password');

            $('#senha3').attr('type', 'password');
            
        }

        
        $('#btnsaida').hide();
    });

    $('#btnProximo').click(function() {	
        var tipo = $('#selectServico :selected').text();	
        var tempo = $('#appt').val();	

        $('#time').html(tempo);	
        $('#service').html(tipo);	

        header('location: http://localhost/rafael/github/CicloMov/CicloMovWeb/ciclomov/index.php/geral/servico/' + id_ponto + '/' + id_cliente + '/' + tempo + '/' + tipo)	

    });

    // $('.trava').hide();
    // $('.msgAviso').hide();
    // $(".AreaSelecaoPonto").addClass("disabled");

    $('#btnTempo').hide();
    $('#textoTempo').hide();
});

function get_id(id_p, id_c) {	
    id_ponto = id_p	
    id_cliente = id_c	
}