<div class="modal fade" id="exampleCentralModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" data-gtm-vis-recent-on-screen-2340190_1302="399562" data-gtm-vis-first-on-screen-2340190_1302="399562" data-gtm-vis-total-visible-time-2340190_1302="100" data-gtm-vis-has-fired-2340190_1302="1">

    <div class="modal-dialog modal-sm">

        <div class="modal-content text-center">

            <div class="modal-header bg-danger text-white d-flex justify-content-center">

                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>

            </div>

            <div class="modal-footer d-flex justify-content-center">

                <button type="button" class="btn btn-outline-danger" data-mdb-dismiss="modal">Não</button>

                <button type="button" class="btn btn-danger" data-mdb-dismiss="modal" id="btnSair">Sim</button>

            </div>

        </div>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalAreaImgUser" tabindex="-1" aria-labelledby="modalAreaImgUserLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="modalAreaImgUserLabel">Foto de Perfil</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>

            </div>

            <form id="formEnviarImg"  method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    
                    <center>
                    
                        <div class="bg-image image-upload">
                            
                            <img src="<?= base_url('assets/images/'. $GLOBALS["imagem"])?>" id="fotoPerfil" class="figure-img img-fluid file-upload-image rounded-circle" style="width: 280px; height: 280px; margin-bottom: 1rem;">
                            
                        </div>
                        
                        <div class="form-outline mb-4 btn btn-primary" style="border-radius: 20px; width: 350px; height: 3rem; padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; margin-top: 1rem; color: white">
                        
                            <label for='arquivo_para_upload'>Selecionar um arquivo</label>
                            <input type="file" onchange="readURL(this);" class="form-control-lg text-white inputFile" name="arquivo_para_upload" id="arquivo_para_upload" id="formFileLg" style="border-radius: 20px; color: white; height: 3rem;"/>
                            
                        </div>

                    </center>
                
                </div>
                
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" id="removeUpload" data-mdb-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar imagem</button>
                    
                </div>

            </form>

        </div>

    </div>

</div>

<div class="modal fade modalChat" data-mdb-backdrop="false" id="exampleSideModal3" tabindex="-1" aria-labelledby="exampleSideModal2" data-gtm-vis-first-on-screen-2340190_1302="11717" data-gtm-vis-total-visible-time-2340190_1302="100" data-gtm-vis-has-fired-2340190_1302="1" aria-modal="true" role="dialog">

    <div class="modal-dialog" style="position: absolute; bottom: 0; right: 0; width: 18.75rem; padding: 0;">

        <div class="modal-content">

            <div class="modal-body" style="padding: 0;">

                <div class="card" id="chat1" style="position: absolute; bottom: 0; right: 0; border-radius: 0.938rem; width: 18.75rem; transform: scale(0.9);">

                    <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">

                        <i class="fas fa-left fa-lg"></i>

                        <p class="mb-0 fw-bold" style="font-size: 16px;">Suporte</p>

                        <button type="button" data-mdb-dismiss="modal" id="btnFecharChat">
                            <i class="fas fa-times"></i>
                        </button>

                    </div>

                    <div class="card-body" style="padding-left: 1.25rem; padding-right: 0.313rem; padding-top: 0.938rem; padding-bottom: 0.938rem;">

                        <div id="scroll" data-mdb-spy="scroll" data-mdb-target="#scrollspy1" data-mdb-offset="0" class="scrollbar scrollbar-info" style="padding-right: 0.938rem;">
                            
                            <div id="scroll" data-mdb-spy="scroll" data-mdb-target="#scrollspy1" data-mdb-offset="0" class="scrollbar scrollbar-info" style="padding-right: 0.938rem;">

                                <div class="msgPadrao">

                                    <div class="d-flex flex-row justify-content-start mb-3">
                                        
                                        <img src="<?= base_url('assets/images/suporte.png'); ?>" class="rounded-circle" alt="avatar 1" class="rounded-circle" alt="avatar 1" style="margin-top: 0.313rem; width: 45px; height: 100%;">
                                        
                                        <div class="p-3 ms-2 border" style="border-radius: 15px; background-color: #fbfbfb; margin-right: 0.313rem;">
                                            
                                            <p class="small mb-0">Olá, eu sou o assistente de suporte da CicloMov.</p>
                                            
                                        </div>

                                    </div>
                                    
                                    <div class="d-flex flex-row justify-content-start mb-3">
                                        
                                        <img src="<?= base_url('assets/images/suporte.png'); ?>" class="rounded-circle" alt="avatar 1" class="rounded-circle" alt="avatar 1" style="margin-top: 0.313rem; width: 45px; height: 100%;">
                                        
                                        <div class="p-3 ms-2 border" style="border-radius: 15px; background-color: #fbfbfb; margin-right: 0.313rem;">
                                        
                                            <p class="small mb-0">
                                                Digite sua dúvida abaixo e um atendente entrará em contato com você o mais breve.
                                            </p>

                                        </div>

                                    </div>
                                    
                                </div>

                                <!-- div class="d-flex flex-row justify-content-end mb-4">
                                    
                                    <div class="p-3 me-2" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2); margin-left: 0.625rem;">

                                        <p class="small mb-0" style="font-size: 14px;">Thank you, I really like your product.</p>

                                    </div>

                                    <img src="<?= base_url('assets/images/'.  $GLOBALS["imagem"])?>" class="rounded-circle" alt="avatar 1"  style="width: 2.813rem; height: 100%;  margin-top: 0.313rem;">

                                </div>

                                <div class="d-flex flex-row justify-content-start mb-4">
                                    
                                    <img src="<?= base_url('assets/images/suporte.png'); ?>" class="rounded-circle" alt="avatar 1" class="rounded-circle" alt="avatar 1" style="margin-top: 0.313rem; width: 45px; height: 100%;">
                                    
                                    <div class="p-3 ms-2 border" style="border-radius: 15px; background-color: #fbfbfb; margin-right: 0.313rem;">
                                    
                                        <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the video below.</p>

                                    </div>

                                </div>

                                <div class="d-flex flex-row justify-content-end mb-4">
                                    
                                    <div class="p-3 me-2" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2); margin-left: 0.625rem;">

                                        <p class="small mb-0" style="font-size: 14px;">Thank you, I really like your product.</p>

                                    </div>

                                    <img src="<?= base_url('assets/images/'.  $GLOBALS["imagem"])?>" class="rounded-circle" alt="avatar 1"  style="width: 2.813rem; height: 100%;  margin-top: 0.313rem;">

                                </div> -->

                                <center>

                                    <button type="button" class="btn btn-info" id="btnAbrirChamado">Abrir novo chamado</button>

                                </center>

                            </div>
                            
                        </div>

                    </div>

                    <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">

                        <img src="<?= base_url('assets/images/'.  $GLOBALS["imagem"])?>" class="rounded-circle" alt="avatar 3" style="width: 2.5rem; height: 100%; margin-right: 0.5rem;">

                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Digite uma mensagem" style="border-radius: 10px; font-size: 14px;">

                        <a class="ms-3" href="#">
                            
                            <i class="fas fa-paper-plane text-info fa-lg"></i>
                        
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalHistorico" tabindex="-1" aria-labelledby="modalHistoricoLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="modalHistoricoLabel">Historico de Serviços</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body" style="padding: 0;">

                <table class="table align-middle mb-0 bg-white">

                    <thead class="bg-light">

                        <tr>

                            <th>Ponto</th>
                            <th>Tipo</th>
                            <th>Status</th>
                            <th>Tempo</th>

                        </tr>

                    </thead>

                    <tbody id="tabela">

                    </tbody>

                </table>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Fechar</button>

            </div>

        </div>

    </div>

</div>

<script>
    $(function() {

        $("#btnModalHistorico").click(function() {

            $("#tabela tr").remove();

            $.ajax({
                url: '<?php echo site_url('Geral/listarServ'); ?>',
                type: 'GET',
                success: function(dados) {

                    variavelphp = JSON.parse(dados);

                    variavelphp.forEach(function(value, key) {

                        $('#tabela').append("<tr><td style='padding: 5px;'><div class='d-flex align-items-center'><div class='ms-1'><p class='fw-bold mb-1'>" + value.descricaoPonto + "</p></div></div></td><td style='padding: 5px;'><p class='fw-normal mb-1' id='tipoServico" + value.codServ + "'>" + value.tipoServ + "</p></td><td style='padding: 5px;'><span class='badge badge-" + value.tipoMsg + " rounded-pill d-inline'" + value.codServ + "'>" + value.statusServ + "</span></td><td style='padding: 5px;'>" + value.valorTempoPerma + " minutos </td></tr>");

                    });

                },
                cache: false,
                contentType: false,
                processData: false
            });

        });

    });
</script>

<style>
    .file-upload {
        background-color: #ffffff;
        width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        position: relative;
        transition: 0.25s;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: rgb(235, 235, 235);
        transition: 0.25s;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #15824B;
        padding: 60px 0;
    }
</style>