<div class="modal fade" id="modalLoginCadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="btn-close" id="btnFecharModalLogin" data-mdb-dismiss="modal" aria-label="Close"></button>

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

                            <div class="text-center mb-5" style="margin-top: 2rem; margin-bottom: 2rem;">
                              
                                <h2>Login</h2>

                            </div>
                            
                            <!-- Email input -->
                            <div class="form-outline mb-3">

                                <input type="email" id="loginName" name="usuario" class="form-control" required/>

                                <label class="form-label" for="loginName">Email</label>

                                <div class="form-notch">

                                    <div class="form-notch-leading" style="width: 9px;"></div>

                                    <div class="form-notch-middle" style="width: 114.4px;"></div>

                                    <div class="form-notch-trailing"></div>

                                </div>

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">

                                <input type="password" id="senha" name="senha" class="form-control" required>

                                <label class="form-label" for="senha">Senha</label>

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

                        </form>

                    </div>

                    <div style="margin-top: 1rem;" class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="mdb-tab-register">

                        <form id="formCadastro">
                            
                            
                            <div class="text-center mb-4" style="margin-top: 2rem; margin-bottom: 2rem;">
                              
                                <h2>Cadastro</h2>

                            </div>

                            <!-- Name input -->
                            <div class="form-outline mb-3">
                                
                                <input type="text" id="registerName" name="cad_nome_completo" class="form-control" required/>
                                
                                <label class="form-label" for="registerName">Nome Completo</label>
                            
                            </div>

                            <div class="row g-3">
                                    
                                <div class="col">

                                    <div class="form-outline mb-3">

                                        <input type="text" id="cpf" name="cad_cpf" class="form-control cpf-mask" required/>
                                        
                                        <label class="form-label" for="cpf">CPF</label>
                                        
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-outline mb-3">

                                        <input type="text" id="telefone" name="cad_telefone" class="form-control cel-sp-mask" required/>
                                        
                                        <label class="form-label" for="telefone">Telefone</label>
                                    
                                    </div>
                                
                                </div>

                            </div>
                            
                            <!-- Username input -->
                            <div class="form-outline mb-3">
                                
                                <input type="text" id="registerUsername" name="cad_usuario" class="form-control" required>
                                    
                                <label class="form-label" for="registerUsername">Usuário</label>
                              
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-3">
                                
                                <input type="email" id="email" name="cad_email" class="form-control" required>
                                
                                <label class="form-label" for="email">Email</label>
                           
                            </div>

                            <div class="row g-3">
                                    
                                <div class="col">

                                    <div class="form-outline mb-3">
                                    
                                        <input type="password" id="senha2" name="cad_senha" class="form-control" required>
                                    
                                        <label class="form-label" for="senha2">Senha</label>
                                     
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-outline mb-3">

                                        <input type="password" id="senha3" class="form-control" required>
                                        
                                        <label class="form-label" for="senha3">Repita a senha</label>
                                       
                                    </div>
                                    
                                </div>

                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content mb-3">
                                
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