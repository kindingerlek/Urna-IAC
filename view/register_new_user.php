<!-- Novo Usuário -->
<div class="modal fade" id="popup-newUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo Usuário</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        
          <div class="row">
            <!-- Input Nome -->
            <div class="col-md-12 form-group has-feedback">
              <label class="control-label">Nome:</label>
              <input type="text" id="register-name"  name="register-name" class="form-control" placeholder="Digite aqui seu Nome">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            
            <!-- Inputs Eleitor -->
            <div>
              <!-- Input Título -->
              <div class="col-md-8 form-group has-feedback">
                <label>Título de Eleitor:</label>
                <input type="text" id="register-votingCard"  name="register-votingCard" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Zona-->
              <div class="col-md-2 form-group has-feedback">  
                <label>Zona:</label>
                <input type="text" id="register-zone"   name="register-zone" class="form-control" maxlength="3" >
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Seção-->
              <div class="col-md-2 form-group has-feedback">  
                <label>Seção:</label>
                <input type="text" id="register-session"   name="register-session" class="form-control" maxlength="4" >
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>  
            </div>
            
            <div>
              <!-- Input CPF -->
              <div class="col-md-6 form-group has-feedback">
                <label>CPF:</label>
                <input type="text" id="register-cpf"  name="register-cpf" class="form-control" placeholder="Somente números">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Data de Nascimento -->
              <div class="col-md-6 form-group has-feedback">
                <label>Data de Nascimento:</label>
                <input type="text" id="register-birthday"  name="register-birthday" name="register" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>
            
            
            
             <!-- Input CEP -->
            <div class="col-md-12 form-group has-feedback">
              <label>CEP:</label>
              <input type="text" id="register-zipCode"   name="register-zipCode" class="form-control" placeholder="Somente números">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            
            <div>
              <!-- Input Endereço -->
              <div class="col-md-7 form-group has-feedback">
                <label>Endereço:</label>
                <input type="text" id="register-address"  name="register-address" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Número -->
              <div class="col-md-2 form-group has-feedback">
                <label>Número:</label>
                <input type="text" id="register-addressNum"  name="register-addressNum" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Número -->
              <div class="col-md-3 form-group has-feedback">
                <label>Complemento:</label>
                <input type="text" id="register-complement"  name="register-complement" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>
            
            <div>
              <!-- Input Bairro -->
              <div class="col-md-6 form-group has-feedback">
                <label>Bairro:</label>
                <input type="text" id="register-neighborhood"  name="register-neighborhood" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Cidade -->
              <div class="col-md-4 form-group has-feedback">
                <label>Cidade:</label>
                <input type="text" id="register-city"  name="register-city" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Estado -->
              <div class="col-md-2 form-group has-feedback">
                <label>Estado:</label>
                <input type="text" id="register-state"  name="register-state" class="form-control" maxlenght="2">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>
            
            <!-- Input e-mail -->
            <div class="col-md-12 form-group has-feedback">
              <label>Email: <small>(válido, pois a recuperação de senha será através desse e-mail)</small></label>
              <input type="email" id="register-email"  name="register-email" class="form-control">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            
            <div>
              <!-- Input Senha -->
              <div class="col-md-6 form-group has-feedback">
                <label>Senha:</label>
                <input type="password" id="register-password"  name="register-password" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              
              <!-- Input Confirmação da senha -->
              <div class="col-md-6 form-group has-feedback">
                <label>Confirmar Senha:</label>
                <input type="password" id="register-cfmPassword"  name="register-cfmPassword" class="form-control">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>
          </div>
          
        
        
        <div id="register-error" class="alert alert-danger" role="alert" style="display: none">
         </div>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>

