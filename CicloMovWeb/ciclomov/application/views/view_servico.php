<!-- First modal dialog -->
<div class="modal fade" id="exampleCentralModal4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
    
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalToggleLabel1">Informações</h5>

                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">
                
                <div class="container">

        <div class="row">
            
                        <div class='col-sm-6'>

                            <label for="selectServiço">Tempo</label>
                            
                            <div class="form-group">
                                
                                <div class='input-group date' id='datetimepicker3'>
                                    
                                    <input class="form-select" type="time" id="appt" name="appt">

                                    <span class="input-group-addon">
                                        
                                        <span class="glyphicon glyphicon-time"></span>
                                        
                                    </span>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class='col-sm-6'>
                            
                            <label for="selectServico">Serviço Prestado</label>
                            
                            <select class="form-select" aria-label="select" id="selectServico">
                                
                                <option selected></option>
                                
                                <option value="Estacionamento">Estacionamento</option>
                                
                                <option value="Manutenção">Manutenção</option>
                                
                                <option value="Limpeza">Limpeza</option>
                                
                                <option value="Manutenção e Limpeza">Manutenção e Limpeza</option>
                                
                            </select>
                            
                        </div>
                        
                    </div>
                    
                </div>    

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Voltar</button>

                <button type="button" class="btn btn-primary" data-mdb-target="#exampleModalToggle22" data-mdb-toggle="modal" data-mdb-dismiss="modal" id="btnProximo">Próximo</button>
            
            </div>

        </div>
        
    </div>

</div>

<!-- Second modal dialog -->
<div class="modal fade" id="exampleModalToggle22" aria-hidden="true" aria-labelledby="exampleModalToggleLabel22" tabindex="-1">
  
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalToggleLabel22">Confirmação</h5>

                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">

            <ul class="list-group">
                
                <li class="list-group-item">
                    <b>Ponto:</b> <span id="point"></span>  
                </li>
                
                <li class="list-group-item">
                    <b>Tempo:</b> <span id="time"></span>
                </li>

                <li class="list-group-item">
                    <b>Serviço:</b>  <span id="service"></span>
                </li>

            </ul>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-mdb-target="#exampleCentralModal4" data-mdb-toggle="modal">Voltar</button>
                
                <button id="confirmaServico" class="btn btn-primary"  data-mdb-dismiss="modal">Confirmar serviço</button>

            </div>
            
        </div>

    </div>

</div>
