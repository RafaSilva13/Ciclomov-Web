<div class="container">

    <center>        
        <h1 style="margin-top: 90px;">
            <b>Pontos</b>
        </h1>
    </center>
    
    <div class="d-flex justify-content-center flex-wrap gap-4">
        
        <?php foreach($pontos as $registro) { ?>

            <div class="card" style="width: 16rem; margin-top: 30px; border-radius: 10px;" id="<?php echo $registro['cod']; ?>">

                <iframe src="<?php echo $registro['mapa']; ?>" style="border-radius: 10px; width=100% " allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <?php

                    $totais = $registro['vagasTotais'];

                    $livres = $registro['vagasLivres'];

                    $ocupadas = $totais-$livres;

                    $por = 100-(($livres * 100) / $totais);

                ?>

                <div class="progress">
                
                    <div class="progress-bar" style="width:<?php echo $por ?>%;"></div>

                </div>

                <buttom onclick="get_id('<?php echo $registro['descricao'] ?>' , <?php if(isset($_SESSION['user'])) { echo $_SESSION['user']; } ?>)" class="btn AreaSelecaoPonto disabled" style="padding-left: auto; padding-right: auto; border-radius: 10px;" id="<?php echo $registro['cod']; ?>" data-mdb-toggle="modal" data-mdb-target="#exampleCentralModal4">

                    <div class="card-body">
                        
                        <h6 class="card-text" style="margin-top: -15px; height: 0.9rem; font-size: 17px; color: rgb(62, 122, 122); text-align: center;"><?php echo $registro['descricao']; ?>
                            
                            <i class="fas fa-lock trava" style="margin-left: 5px;"></i>

                        </h6>
                        
                    </div>

                </buttom>

            </div>

        <?php } ?>

    </div>

    <center>
        <h5 class="msgAviso" style="margin-top: 40px; color: brown;">Faça o login para prosseguir</h5>
    </center>

</div>
