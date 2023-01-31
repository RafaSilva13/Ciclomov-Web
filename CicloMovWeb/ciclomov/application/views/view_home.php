
    <!-- Background image -->
    <div id="intro-example" class="p-5 text-center bg-image" style="background-image: url('<?=base_url('assets/images/fundo_pagina_n.jpg');?>'); box-shadow: 31px 31px 62px #c7c7c7,-31px -31px 62px #ffffff;">
        
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">

            <div class="d-flex justify-content-center align-items-center h-100">

                <div class="text-white">

                    <h1 class="mb-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Viva agora o movimento</h1>
                    
                    <br>

                    <h4 class="mb-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Conecte-se</h4>

                    <a class="btn btn-outline-light btn-lg btnHome" data-mdb-ripple-color="dark" href="<?php echo site_url("geral/login") ?>" role="button">Login</a>

                </div>

            </div>

        </div>

    </div>

</header>

<section>

    <center>
        <h2 class="tituloHome">Simplifique sua vida e conecte a <br> uma sociedade em movimento.</h2>
    </center>    

    <div class="col-lg-6 segundacoluna">

        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            </div>
        
            <div class="carousel-inner" style="border-radius: 20px; box-shadow: 3px 4px 7.6px rgba(0, 0, 0, 0.031), 7.2px 9.6px 18.2px rgba(0, 0, 0, 0.044), 13.5px 18px 34.2px rgba(0, 0, 0, 0.055), 24.1px 32.2px 61px rgba(0, 0, 0, 0.066), 45.1px 60.2px 114.1px rgba(0, 0, 0, 0.079), 108px 144px 273px rgba(0, 0, 0, 0.11);">
                <div class="carousel-item active">
                    <img style="height: 390px; width: 550px;" src="<?=base_url('assets/images/imagem1.jpg');?>" class="d-block w-100" alt="Wild Landscape"/>
                </div>

                <div class="carousel-item">
                    <img style="height: 390px; width: 550px;" src="<?=base_url('assets/images/imagem2.jpg');?>" class="d-block w-100" alt="Camera"/>
                </div>

                <div class="carousel-item">
                    <img style="height: 390px; width: 550px;" src="<?=base_url('assets/images/imagem3.jpg');?>" class="d-block w-100" alt="Exotic Fruits"/>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>    

    </div>
    
</section>