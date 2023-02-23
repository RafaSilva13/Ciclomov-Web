    <button type="button" id="btnSuporte" class="btn btn-info btn-lg btn-floating" data-mdb-toggle="modal" data-mdb-target="#exampleSideModal3" style="width: 4rem; height: 4rem; position: fixed; right: 1rem; bottom: 2rem;">
        <i class="fas fa-headset fa-2x"></i>
    </button>

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
                            location.reload(true);

                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
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
                    type: 'GET',
                    success: function(){
                        console.log('Saida efetuada!');
                        location.reload(true);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                }); 
            });


        });
    </script>

    <script>

        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

        var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = minutes + ":" + seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
        }, 1000);

    </script>

    <!-- Link script -->
    <script src="<?=base_url('assets/js/script.js');?>"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    
    <!-- Flowbite -->
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>