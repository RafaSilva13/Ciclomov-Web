<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">

            <a class="navbar-brand" href="<?php echo site_url("geral") ?>">
                <img src="<?=base_url('assets/images/logo2.png');?>" alt="Logo" style="width: 40px; margin: 0px; padding: 0;">
                <span class="tituloNav">CicloMov</span>
            </a>

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item active">
                        <a class="nav-link item" href="<?php echo site_url("geral") ?>"><b>Home</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link item" href="<?php echo site_url("geral/pontos") ?>"><b>Pontos</b></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link item" href="<?php echo site_url("geral/sobre") ?>"><b>Sobre nós</b></a>
                    </li>

                </ul>
                
                <form class="d-flex gap-5">

                    <b style="color: white; margin-top: 0.4rem; margin-right: -2.5rem;" id="textoTempo">
                        Tempo restante:
                    </b>
                    
                    <button type="button" class="btn btn-secondary  btn-rounded text-black" style="font-size: 14px;" id="btnTempo">
                    
                        <b>
                        
                            <span id="timer">00:00</span>
                            
                        </b>
                    
                    </button>

                    <form class="d-flex gap-5" id="btnlogin">

                        <button type="button" class="btn btn-secondary btnlogin text-dark" data-mdb-toggle="modal" data-mdb-target="#modalLoginCadastro">Login</button>
                    
                    </form>

                    <div class="dropdown areaMenu" style="margin: 0;" id="areaMenu">

                        <button class="btn btn-secondary btn-lg btn-floating rounded-circle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" style="filter: drop-shadow(0px 0px 2px 3a3939);">

                            <img src="<?= base_url('assets/images/'.  $GLOBALS["imagem"])?>" class="w-100 rounded-circle"/>
                            
                        </button>
                        
                        <ul class="dropdown-menu">

                            <li class="dropdown-item">

                                <center>

                                    <button class="btn btn-secondary btn-lg btn-floating bg-image hover-overlay ripple shadow-1-strong rounded-circle areaImgUser" type="button" style="width: 3.5rem; height: 3.5rem;" data-mdb-toggle="modal" data-mdb-target="#modalAreaImgUser">
                                                                                
                                        <img src="<?= base_url('assets/images/'.  $GLOBALS["imagem"])?>" class="w-100 rounded-circle"/>
                                                                                
                                        <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6);">
                                            
                                            <i class="fas fa-camera fa-lg" style="color: white;  margin-top: 0.3rem;"></i>
                                        
                                        </div>

                                    </button>

                                    <p style="margin-bottom: 0.1rem;">
                                        <span>
                                            <b>Usuario</b>
                                        </span>
                                    </p>

                                </center>

                            </li>

                            <li>
                                
                                <button id="btnModalHistorico" class="dropdown-item" type="button" data-mdb-toggle="modal" data-mdb-target="#modalHistorico">
                                    Histórico
                                </button>
                        
                            </li>
                                            
                            <li class="botoesMenu">

                                <center>

                                    <button type="button" class="btn btn-danger btnsaida btn-rounded" id="btnsaida"  data-mdb-toggle="modal" data-mdb-target="#exampleCentralModal1">Sair</button>
                                
                                </center>
                                
                            </li>

                        </ul>

                    </div>

                </form>

            </div>

        </div>
    
    </nav>