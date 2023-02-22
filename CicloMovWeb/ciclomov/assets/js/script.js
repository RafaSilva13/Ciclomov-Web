$(function() {

    $('#loginCheck1').click(function() {

        var checkbox = $('#loginCheck1');

        if (checkbox.is(":checked")) {

            $('#senha').attr('type', 'text');

        } else {

            $('#senha').attr('type', 'password');

        }

    });

    $('#loginCheck2').click(function() {

        var checkbox = $('#loginCheck2');

        if (checkbox.is(":checked")) {

            $('#senha2').attr('type', 'text');

            $('#senha3').attr('type', 'text');

        } else {

            $('#senha2').attr('type', 'password');

            $('#senha3').attr('type', 'password');

        }


        $('#btnsaida').hide();
        $('#areaMenu').hide();
    });

    $('#btnProximo').click(function() {
        tipo = $('#selectServico').val();
        tempo = $('#inputValor').val();

        $('#time').html(tempo);
        $('#service').html(tipo);
        $('#point').html(id_ponto);

    });

    $('#confirmaServico').click(function() {
        window.location.href = "http://localhost/luizim/github/CicloMov/CicloMovWeb/ciclomov/index.php/geral/servico/" + id_ponto + "/" + tempo + "/" + tipo;
    })

    $("#btnFecharModalLogin").click(function(){
        $(".erroToast").toast('hide');
    });

    $('#btnTempo').hide();
    $('#textoTempo').hide();

    $('#scroll').animate({
        scrollTop: $(this).height() // aqui introduz o numero de px que quer no scroll, neste caso é a altura da propria div, o que faz com que venha para o fim
    }, 280);

    $("#btnSuporte").click(function(){
        $("#btnSuporte").fadeOut();
        $("#exampleSideModal3").fadeIn();
    });
    
    $("#btnFecharChat").click(function(){
        $("#btnSuporte").fadeIn();
        $("#exampleSideModal3").fadeOut();
    });

});

function mudarValorTempo(tempo) {
    $("#inputValor").val(tempo);
}

function mudarTipoServico(tempo) {
    $("#selectServico").val(tempo);
}

function get_id(id_p, id_c) {
    id_ponto = id_p
    id_cliente = id_c
}