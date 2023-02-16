<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <a class="navbar-brand" href="<?php echo site_url("geral") ?>">
                    <img src="<?=base_url('assets/images/logo2.png');?>" alt="Logo" style="width: 40px; margin: 0px; padding: 0;">
                    <span class="tituloNav">CicloMov</span>
                </a>

                <li class="nav-item active">
                    <a class="nav-link item" href="<?php echo site_url("geral") ?>"><b>Home</b></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link item" href="<?php echo site_url("geral/pontos") ?>"><b>Pontos</b></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link item" href="<?php echo site_url("geral/sobre") ?>"><b>Sobre</b></a>
                </li>

            </ul>

            <form class="d-flex gap-5" id="btnlogin">
            
                <button type="button" class="btn btn-secondary btnlogin text-dark" data-mdb-toggle="modal" data-mdb-target="#modalLoginCadastro">Login</button>

            </form>

            <form class="d-flex gap-5">

                <b style="color: white; margin-top: 0.4rem; margin-right: -2rem;" id="textoTempo">
                    Tempo restante:
                </b>

                <button type="button" class="btn btn-secondary  btn-rounded text-black" style="font-size: 14px;" id="btnTempo">
                    <b>08:30</b>
                </button>

                <button type="button" class="btn btn-danger btnsaida" id="btnsaida"  data-mdb-toggle="modal" data-mdb-target="#exampleCentralModal1">Sair</button>

            </form>

        </div>
    
    </nav>