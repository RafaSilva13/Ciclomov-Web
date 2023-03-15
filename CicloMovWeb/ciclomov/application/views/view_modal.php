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