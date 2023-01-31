<div class="container">

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
                <div class="card" style="width: 16rem; margin-top: 120px; border-radius: 10px;">
                    <iframe src="<?php echo $row['mapa']; ?>" style="border-radius: 10px; width=100% " allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <?php

                        $totais=$row['vagas_totais_ponto'];
                        $livres=$row['vagas_livres_ponto'];
                        $ocupadas=$totais-$livres;
                        $por = 100-(($livres * 100) / $totais);

                    ?>

                    <div class="progress">
                    
                        <div class="progress-bar" style="width:<?php echo $por ?>%;" >

                        </div>

                    </div>

                    <a href="ponto.php?id=<?php echo $row['cod_ponto']; ?>">

                        <div class="card-body">
                            <h6 class="card-text" style="margin-top: -5px; height: 0.9rem; font-size: 18px; color: rgb(62, 122, 122); text-align: center;"><?php echo $row['descricao']; ?></h6>
                        </div>

                    </a>

                </div>

        <?php }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>
