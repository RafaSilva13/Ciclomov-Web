    <script>
        $(function() {
            $("#btnEntrarLogin").click(function(){

                $.post("<?php echo site_url("Geral/login")?>",{usuario: $("#loginName").val(), senha: $("#senha").val()}, 
                function(data){
                    if(data == 1)
                    {
                        console.log('Erro');
                        // $('.lserroToast').toast('show');
                    }

                    if(data == 0) 
                    {
                        console.log('Login efeituado');
                        // $('.btnlogin').hide();
                        // $(".AreaSelecaoPonto").removeClass("disabled");
                        // $('.trava').hide();
                        // $('.msgAviso').hide();
                    }

                });
            }); 
        });
    </script>

    <!-- Link script -->
    <script src="<?=base_url('assets/javascript/script.js');?>"></script>

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