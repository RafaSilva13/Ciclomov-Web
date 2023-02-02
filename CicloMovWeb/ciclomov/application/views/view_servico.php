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

                            <label for="selectServiço">Serviço Prestado</label>

                            <select class="form-select" aria-label="select" id="selectServiço">

                                <option selected></option>

                                <option value="1">One</option>

                                <option value="2">Two</option>

                                <option value="3">Three</option>

                            </select>

                        </div>
                    
                    </div>

                </div>    

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Voltar</button>

                <button type="button" class="btn btn-primary" data-mdb-target="#exampleModalToggle22" data-mdb-toggle="modal" data-mdb-dismiss="modal">Próximo</button>
            
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
                    <b>Ponto:</b> Jardim Norte    
                </li>
                
                <li class="list-group-item">
                    <b>Tempo:</b> 10 minutos
                </li>

                <li class="list-group-item">
                    <b>Serviço:</b> Estacionamento e Manutenção
                </li>

            </ul>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-mdb-target="#exampleCentralModal4" data-mdb-toggle="modal">Voltar</button>
                
                <button class="btn btn-primary"  data-mdb-dismiss="modal">Confirmar serviço</button>

            </div>
            
        </div>

    </div>

</div>
