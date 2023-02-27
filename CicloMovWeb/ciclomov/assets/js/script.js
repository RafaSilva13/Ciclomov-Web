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

    $("#btnFecharModalLogin").click(function() {
        $(".erroToast").toast('hide');
    });

    // $('#btnTempo').hide();
    // $('#textoTempo').hide();

    $('#scroll').animate({
        scrollTop: $(this).height() // aqui introduz o numero de px que quer no scroll, neste caso é a altura da propria div, o que faz com que venha para o fim
    }, 280);

    $("#btnSuporte").click(function() {
        $("#btnSuporte").fadeOut();
        $("#exampleSideModal3").fadeIn();
    });

    $("#btnFecharChat").click(function() {
        $("#btnSuporte").fadeIn();
        $("#exampleSideModal3").fadeOut();
    });

});

$('#removeUpload').click(function() {
    location.reload(true);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(".file-upload-image").attr("src", e.target.result);
            $(".file-upload-content").show();

            $(".image-title").html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        removeUpload();
    }
}

$(".image-upload").bind("dragover", function() {
    $(".image-upload").addClass("image-dropping");
});
$(".image-upload").bind("dragleave", function() {
    $(".image-upload").removeClass("image-dropping");
});