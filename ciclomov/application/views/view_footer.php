    <script>
        $(function() {

            $("#formLogin").submit(function(e){
                e.preventDefault();
                                    
                var formData = new FormData(this);
                
                $.ajax({
                    url: "<?= site_url("Geral/login")?>",
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
                                url: "<?= site_url("Geral/pegarImagem")?>",
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
                    url: "<?= site_url("Geral/atualizarImagens")?>",
                    type: 'POST',
                    data: formData,
                    success: function(data){
                        console.log(data);

                        $.ajax({
                            url: "<?= site_url("Geral/pegarImagem")?>",
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
                    url: "<?= site_url("Geral/cadastro")?>",
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
                    url: "<?= site_url("Geral/verificarStatusServicos");?>",
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
                    url: "<?= site_url("Geral/sair")?>",
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
                    url: "<?= site_url("Geral/servico")?>",
                    type: 'POST',
                    data : { idPonto: id_ponto, tempo: tempo, tipo: tipo },
                    success: function(){
                        location.reload(true);
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

    <!-- LocalWeb -->
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>    
    
    <!-- Link script -->
    <script src="<?= base_url('assets/js/script.js');?>"></script>
    
</body>
</html>