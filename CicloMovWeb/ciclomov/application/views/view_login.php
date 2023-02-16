<div class="modal fade" id="modalLoginCadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body p-4">
                
                <div class="row" style="margin-top: -20px; margin-bottom: 15px;">
                    
                    <div class="col-lg-12">

                        <ul class="nav nav-tabs nav-fill">
                            
                            <li class="nav-item" role="presentation">
                                
                                <a class="nav-link active" id="mdb-tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                            
                            </li>
                            
                            <li class="nav-item" role="presentation">

                                <a class="nav-link" id="mdb-tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false" tabindex="-1">Cadastrar</a>
                            
                            </li>

                        </ul>

                    </div>
                
                </div>

                <!-- Pills content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="mdb-tab-login">
            
                        <form id="formLogin">

                            <div class="text-center mb-3">
                                <p>Entre com</p>
                                
                                <a class="btn text-white btn-floating mx-1" style="background-color: #3b5998;" href="#!" role="button">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a class="btn text-white btn-floating mx-1" style="background-color: #dd4b39;" href="#!" role="button">
                                    <i class="fab fa-google"></i>
                                </a>

                            </div>

                            <p class="text-center">Ou</p>
                            
                            <!-- Email input -->
                            <div class="form-outline mb-4">

                                <input type="email" id="loginName" name="usuario" class="form-control" required>

                                <label class="form-label" for="loginName" style="margin-left: 0px;">Email</label>

                                <div class="form-notch">

                                    <div class="form-notch-leading" style="width: 9px;"></div>

                                    <div class="form-notch-middle" style="width: 114.4px;"></div>

                                    <div class="form-notch-trailing"></div>

                                </div>

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">

                                <input type="password" id="senha" name="senha" class="form-control" required>

                                <label class="form-label" for="senha" style="margin-left: 0px;">Senha</label>

                                <div class="form-notch">

                                    <div class="form-notch-leading" style="width: 9px;"></div>

                                    <div class="form-notch-middle" style="width: 64.8px;"></div>

                                    <div class="form-notch-trailing"></div>

                                </div>

                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">

                                <div class="col d-flex justify-content">
                                    
                                    <!-- Checkbox -->
                                    <div class="form-check gap-5">

                                        <input type="checkbox" class="form-check-input" id="loginCheck1">

                                        <label class="form-check-label" for="loginCheck1">Mostrar senha</label>

                                    </div>

                                </div>

                            </div>

                            <center>
                                <p style="color: red; margin-top: -1rem; margin-bottom: 1rem; font-weight: 500;">
                                    <span id="textSenhaIncorreta"></span>
                                </p>
                            </center>
                            
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" id="btnEntrarLogin">Entrar</button>

                            <!-- Register buttons -->
                            <div class="text-center">

                                <p class="mb-1">Não lembra a senha? Fale com o <a href="#!">Suporte</a></p>

                            </div>

                        </form>

                    </div>

                    <div style="margin-top: 1rem;" class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="mdb-tab-register">

                        <form id="formCadastro">
                            
                            <div class="text-center mb-3">
                                <p>Cadastre-se com</p>
                                
                                <a class="btn text-white btn-floating mx-1" style="background-color: #3b5998;" href="#!" role="button">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a class="btn text-white btn-floating mx-1" style="background-color: #dd4b39;" href="#!" role="button">
                                    <i class="fab fa-google"></i>
                                </a>

                            </div>

                            <p class="text-center">Ou</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                
                                <input type="text" id="registerName" name="cad_nome_completo" class="form-control" required>
                                
                                <label class="form-label" for="registerName" style="margin-left: 0px;">Nome Completo</label>
                                
                                <div class="form-notch">

                                    <div class="form-notch-leading" style="width: 9px;"></div>

                                    <div class="form-notch-middle" style="width: 8px;"></div>

                                    <div class="form-notch-trailing"></div>

                                </div>

                            </div>

                            <div class="row g-3">
                                    
                                <div class="col">

                                    <div class="form-outline mb-4">

                                        <input type="text" id="cpf" name="cad_cpf" class="form-control" required>
                                        
                                        <label class="form-label" for="cpf" style="margin-left: 0px;">CPF</label>
                                        
                                        <div class="form-notch">

                                            <div class="form-notch-leading" style="width: 9px;"></div>

                                            <div class="form-notch-middle" style="width: 8px;"></div>

                                            <div class="form-notch-trailing"></div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-outline mb-4">

                                        <input type="text" id="telefone" name="cad_telefone" class="form-control" required>
                                        
                                        <label class="form-label" for="telefone" style="margin-left: 0px;">Telefone</label>
                                    
                                        <div class="form-notch">

                                            <div class="form-notch-leading" style="width: 9px;"></div>

                                            <div class="form-notch-middle" style="width: 8px;"></div>
                                            
                                            <div class="form-notch-trailing"></div>
                                            
                                        </div>
                                        
                                    </div>
                                
                                </div>

                            </div>
                            
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                
                                <input type="text" id="registerUsername" name="cad_usuario" class="form-control" required>
                                    
                                <label class="form-label" for="registerUsername" style="margin-left: 0px;">Usuário</label>
                                
                                <div class="form-notch">

                                    <div class="form-notch-leading" style="width: 9px;"></div>

                                    <div class="form-notch-middle" style="width: 8px;"></div>

                                    <div class="form-notch-trailing"></div>

                                </div>

                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                
                                <input type="email" id="email" name="cad_email" class="form-control" required>
                                
                                <label class="form-label" for="email" style="margin-left: 0px;">Email</label>
                                
                                <div class="form-notch">
                                    
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                   
                                    <div class="form-notch-middle" style="width: 8px;"></div>
                                    
                                    <div class="form-notch-trailing"></div>
                               
                                </div>

                            </div>

                            <div class="row g-3">
                                    
                                <div class="col">

                                    <div class="form-outline mb-4">
                                    
                                        <input type="password" id="senha2" name="cad_senha" class="form-control" required>
                                    
                                        <label class="form-label" for="senha2" style="margin-left: 0px;">Senha</label>
                                        
                                        <div class="form-notch">
                                        
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                        
                                            <div class="form-notch-middle" style="width: 8px;"></div>
                                            
                                            <div class="form-notch-trailing"></div>
                                        
                                        </div>

                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-outline mb-4">

                                        <input type="password" id="senha3" class="form-control" required>
                                        
                                        <label class="form-label" for="senha3" style="margin-left: 0px;">Repita a senha</label>
                                        
                                        <div class="form-notch">

                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            
                                            <div class="form-notch-middle" style="width: 8px;"></div>
                                            
                                            <div class="form-notch-trailing"></div>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content mb-4">
                                
                                <input type="checkbox" class="form-check-input" id="loginCheck2">
                                
                                <label class="form-check-label" for="loginCheck2">Mostrar Senha</label>

                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-1">Cadastrar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>