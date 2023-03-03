    <button type="button" id="btnSuporte" class="btn btn-info btn-lg btn-floating" data-mdb-toggle="modal" data-mdb-target="#exampleSideModal3" style="width: 4rem; height: 4rem; position: fixed; right: 1rem; bottom: 2rem;">
        <i class="fas fa-headset fa-2x"></i>
    </button>

    <!-- <button type="button" class="btn btn-info btn-lg btn-floating" style="width: 4rem; height: 4rem; position: fixed; right: 1rem; bottom: 2rem;" data-mdb-container="body" data-mdb-toggle="popover" data-mdb-placement="left" data-mdb-content="Função indisponível no momento">
        <i class="fas fa-headset fa-2x"></i>
    </button> -->
    
    <script>
        $(function() {

            $("#formLogin").submit(function(e){
                e.preventDefault();
                                    
                var formData = new FormData(this);
                
                $.ajax({
                    url: "<?php echo site_url("Geral/login")?>",
                    type: 'POST',
                    data: formData,
                    success:  function(data){
                        if(data == 'SenhaUserIn')
                        {
                            $(".erroToast").toast('show');
                        }
                        else
                        {
                            $('.btnlogin').hide();
                            $(".AreaSelecaoPonto").removeClass("disabled");
                            $('.trava').hide();
                            $('.msgAviso').hide();
                            $('#textoHome').hide();
                            $('#btnPrincHome').hide();
                            $('#btnSegundHome').show();
                            $('#btnsaida').show();
                            $('#areaMenu').show();

                            $.ajax({
                                url: "<?php echo site_url("Geral/pegarImagem")?>",
                                type: 'POST',
                                cache: false,
                                contentType: false,
                                processData: false
                            }); 

                            location.reload('hard');

                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                }); 
            });
            
            $("#formEnviarImg").submit(function(e){
                e.preventDefault();

                var fileInput = document.getElementById('arquivo_para_upload');   
                var filename = fileInput.files[0].name;

                var formData = new FormData(this);
                formData.append("nome", filename);

                $.ajax({
                    url: "<?php echo site_url("Geral/atualizarImagens")?>",
                    type: 'POST',
                    data: formData,
                    success: function(data){
                        console.log(data);

                        $.ajax({
                            url: "<?php echo site_url("Geral/pegarImagem")?>",
                            type: 'POST',
                            success: function(data){
                                location.reload(true);
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        }); 
                    },
                    cache: false,
                    processData: false,
                    contentType: false,
                });
            });

            $("#formCadastro").submit(function(e){
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: "<?php echo site_url("Geral/cadastro")?>",
                    type: 'POST',
                    data: formData,
                    success: function(data){
                        if(data == '1')
                        {
                            $(".cadastroToast").toast('show');
                            
                            $("#registerName").val("");
                            $("#cpf").val("");
                            $("#telefone").val("");
                            $("#registerUsername").val("");
                            $("#email").val("");
                            $("#senha2").val("");
                            $("#senha3").val("");
                        }
                        else
                        {
                            $(".cadErroToast").toast('show');
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                }); 
            });

            <?php if(isset($_SESSION['user'])) { ?>                
                $('.btnlogin').hide();
                $(".AreaSelecaoPonto").removeClass("disabled");
                $('.trava').hide();
                $('.msgAviso').hide();
                $('#btnsaida').show();
                $('#areaMenu').show();
                $('#textoHome').hide();
                $('#btnPrincHome').hide();
                $('#btnSegundHome').show();

                $.ajax({
                    url: "<?php echo site_url("Geral/verificarStatusServicos");?>",
                    type: 'POST',
                    success: function(data){    

                        if(data == '0')
                        {
                            $('#btnTempo').hide();
                            $('#textoTempo').hide();
                        }
                        else
                        {
                            $('#btnTempo').show();
                            $('#textoTempo').show();
                            $(".AreaSelecaoPonto").addClass("disabled");

                            var countDownDate = new Date(data).getTime();
            
                            var x = setInterval(function() {

                                var now = new Date().getTime();

                                var distance = countDownDate - now;

                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                if(minutes < 10) {
                                    minutesMod = '0' + minutes;
                                }
                                else {
                                    minutesMod = minutes;
                                }

                                if(seconds < 10) {
                                    secundsMod = '0' + seconds;
                                }
                                else {
                                    secundsMod = seconds;
                                }

                                document.getElementById("timer").innerHTML = minutesMod + ":" + secundsMod;

                                if (distance < 0) {
                                    clearInterval(x);
                                    
                                    document.getElementById("timer").innerHTML = "EXPIRADO";

                                    $.ajax({
                                        url: "<?php echo site_url("Geral/terminarServico")?>",
                                        type: 'POST',
                                        success: function(data){
                                            location.reload(true);
                                        },
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        async: false 
                                    });
                                }

                            }, 1000);
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: false 
                });     

                // $("#modalLoginCadastro").hidden.bs.toast();
            <?php } ?>
            <?php if(!isset($_SESSION['user'])) { ?>

                $('#btnTempo').hide();
                $('#textoTempo').hide();
                $('#btnsaida').hide();
                $('#areaMenu').hide();
                $('#textoHome').show();
                $('#btnPrincHome').show();
                $('#btnSegundHome').hide();

            <?php } ?>

            $('#btnSair').click(function(){

                $.ajax({
                    url: "<?php echo site_url("Geral/sair")?>",
                    type: 'POST',
                    success: function(){
                        console.log('Saida efetuada!');
                        location.reload(true);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                }); 
            });


            $('#btnProximo').click(function() {
                tipo = $('#selectServico').val();
                tempo = $('#inputValor').val();

                $('#time').html(tempo);
                $('#service').html(tipo);
                $('#point').html(id_ponto);

            });

            $('#confirmaServico').click(function() {
                $.ajax({
                    url: "<?php echo site_url("Geral/servico")?>",
                    type: 'POST',
                    data : { idPonto: id_ponto, tempo: tempo, tipo: tipo },
                    success: function(){
                        location.reload(true);
                    },
                    cache: false
                }); 
            });
            
            $('#btnAbrirChamado').click(function() {
                $.ajax({
                    url: "<?php echo site_url("Geral/abrirChamado")?>",
                    type: 'POST',
                    success: function(){
                        $("#btnAbrirChamado").hide();
                        $(".msgPadrao").css("display", "block");
                    },
                    cache: false
                }); 
            });

            $("#btnSuporte").click(function(){
                $.ajax({
                    url: "<?php echo site_url("Geral/verificarChamados")?>",
                    type: 'POST',
                    success: function(data){
                        if(data == 1) {
                            $("#btnAbrirChamado").hide();
                            $(".msgPadrao").css("display", "block");
                        }
                        else{
                            $("#btnAbrirChamado").show();
                            $(".msgPadrao").css("display", "none");
                        }
                    },
                    cache: false
                }); 
            });
    
        });
        
        function mudarValorTempo(tempo) {
            $("#inputValor").val(tempo);
        }

        function mudarTipoServico(tempo) {
            $("#selectServico").val(tempo);
        }

        function get_id(id_p, id_c) {
            id_ponto = id_p;
            id_cliente = id_c;
        }
    </script>

    <!-- Link script -->
    <script src="<?=base_url('assets/js/script.js');?>"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>