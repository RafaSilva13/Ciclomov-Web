<div class="container">

    <center>        
        <h1 style="margin-top: 90px;">
            <b>Pontos</b>
        </h1>
    </center>
    
    <div class="d-flex justify-content-center flex-wrap gap-4">
        

        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bd_estacionamento";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname); 

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT cod_ponto, vagas_livres_ponto, vagas_totais_ponto, descricao, mapa FROM pontos";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card" style="width: 16rem; margin-top: 30px; border-radius: 10px;">
                    <iframe src="<?php echo $row['mapa']; ?>" style="border-radius: 10px; width=100% " allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <?php

                        $totais=$row['vagas_totais_ponto'];
                        $livres=$row['vagas_livres_ponto'];
                        $ocupadas=$totais-$livres;
                        $por = 100-(($livres * 100) / $totais);

                    ?>

                    <div class="progress">
                    
                        <div class="progress-bar" style="width:<?php echo $por ?>%;"></div>

                    </div>

                    <buttom class="btn AreaSelecaoPonto" style="padding-left: auto; padding-right: auto;" id="" data-mdb-toggle="modal" data-mdb-target="#exampleCentralModal4">

                        <div class="card-body">
                            
                            <h6 class="card-text" style="margin-top: -15px; height: 0.9rem; font-size: 17px; color: rgb(62, 122, 122); text-align: center;"><?php echo $row['descricao']; ?>
                                
                                <i class="fas fa-lock trava" style="margin-left: 5px;"></i>

                            </h6>
                            
                        </div>

            </buttom>

                </div>

        <?php }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </div>

    <center>
        <h5 class="msgAviso" style="margin-top: 40px; color: brown;">Faça o login para prosseguir</h5>
    </center>

</div>
