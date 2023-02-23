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
                            
                            <label for="datetimepicker3">

                                <b>

                                    Tempo

                                </b>

                            </label>

                            <div class="btn-group">

                                <input type="text" class="form-control" data-mdb-toggle="dropdown" id="inputValor" readonly>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            
                                    <li>
                                        <option class="dropdown-item" value="15" onclick="mudarValorTempo(this.value)">
                                            <button onclick="mudarValorTempo(this.value)">
                                                15 minutos
                                            </button>
                                        </option>
                                    </li>
                                    
                                    <li>
                                        <option class="dropdown-item" value="30" onclick="mudarValorTempo(this.value)">
                                            <button onclick="mudarValorTempo(this.value)">
                                                30 minutos
                                            </button>
                                        </option>   
                                    </li>
                                    
                                    <li>
                                        <option class="dropdown-item" value="45" onclick="mudarValorTempo(this.value)">
                                            <button onclick="mudarValorTempo(this.value)">
                                                45 minutos
                                            </button>    
                                        </option>
                                    </li>
                                    
                                    <li>
                                        <option class="dropdown-item" value="60" onclick="mudarValorTempo(this.value)">
                                            <button onclick="mudarValorTempo(this.value)">
                                                60 minutos
                                            </button>
                                        </option>
                                    </li>

                                    <li>
                                        <option class="dropdown-item" value="80" onclick="mudarValorTempo(this.value)">
                                            <button onclick="mudarValorTempo(this.value)">
                                                80 minutos
                                            </button>
                                        </option>
                                    </li>
                                
                                </ul>
                                
                            </div>

                        </div>
                        
                        <div class='col-sm-6'>
                            
                            <label for="selectServico">

                                <b>

                                    Serviço Prestado

                                </b>

                            </label>

                            <div class="btn-group">

                                <input type="text" class="form-control" data-mdb-toggle="dropdown" id="selectServico" readonly>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            
                                    <li>
                                        <option class="dropdown-item" value="Estacionamento" onclick="mudarTipoServico(this.value)">
                                            <button onclick="mudarTipoServico(this.value)">
                                                Estacionamento
                                            </button>
                                        </option>
                                    </li>
                                    
                                    <li>
                                        <option class="dropdown-item" value="Aluguel" onclick="mudarTipoServico(this.value)">
                                            <button onclick="mudarTipoServico(this.value)">
                                                Aluguel
                                            </button>
                                        </option>
                                    </li>

                                    <li>
                                        <option class="dropdown-item" value="Manutencao" onclick="mudarTipoServico(this.value)">
                                            <button onclick="mudarTipoServico(this.value)">
                                                Manutenção
                                            </button>
                                        </option>   
                                    </li>
                                    
                                    <li>
                                        <option class="dropdown-item" value="Limpeza" onclick="mudarTipoServico(this.value)">
                                            <button onclick="mudarTipoServico(this.value)">
                                                Limpeza
                                            </button>    
                                        </option>
                                    </li>
                                    
                                    <li>
                                        <option class="dropdown-item" value="Manutencao e Limpeza" onclick="mudarTipoServico(this.value)">
                                            <button onclick="mudarTipoServico(this.value)">
                                                Manutenção e Limpeza
                                            </button>
                                        </option>
                                    </li>
                                
                                </ul>
                                
                            </div>
                            
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
                    <b>Serviço:</b> <span id="service"></span>
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
