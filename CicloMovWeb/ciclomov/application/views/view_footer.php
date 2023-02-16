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
                            $('#textSenhaIncorreta').text('Email ou senha incorretos!');
                            $("#erroToast").toast('show');
                        }
                        else
                        {
                            $('.btnlogin').hide();
                            $(".AreaSelecaoPonto").removeClass("disabled");
                            $('.trava').hide();
                            $('.msgAviso').hide();
                            $('#btnsaida').show();

                            // $("#modalLoginCadastro").hidden.bs.toast();
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
                    success:  function(data){
                        console.log(data);
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

                // $("#modalLoginCadastro").hidden.bs.toast();
            <?php } ?>
            <?php if(!isset($_SESSION['user'])) { ?>

                $('#btnTempo').hide();
                $('#textoTempo').hide();
                $('#btnsaida').hide();

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