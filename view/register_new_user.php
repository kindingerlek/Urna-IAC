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
        <form class="">
          <div class="row">
            <!-- Input Nome -->
            <div class="col-md-12 form-group">
              <label>Nome:</label>
              <input type="text" id="register-name" name="register-name" class="form-control" placeholder="Digite aqui seu Nome">
            </div>
            
            <!-- Inputs Eleitor -->
            <div>
              <!-- Input Título -->
              <div class="col-md-8 form-group">
                <label>Título de Eleitor:</label>
                <input type="text" id="register-votingCard" name="register-votingCard" class="form-control">
              </div>
              
              <!-- Input Zona-->
              <div class="col-md-2 form-group">  
                <label>Zona:</label>
                <input type="text" id="register-zone" name="register-zone" class="form-control" maxlength="4" >
              </div>
              
              <!-- Input Seção-->
              <div class="col-md-2 form-group">  
                <label>Seção:</label>
                <input type="text" id="register-session" name="register-session" class="form-control" maxlength="4" >
              </div>  
            </div>
            
            <div>
              <!-- Input CPF -->
              <div class="col-md-6 form-group">
                <label>CPF:</label>
                <input type="text" id="register-cpf" name="register-cpf" class="form-control" placeholder="Somente números">
              </div>
              
              <!-- Input Data de Nascimento -->
              <div class="col-md-6 form-group">
                <label>Data de Nascimento:</label>
                <input type="text" id="register-birthday" name="register-birthday" name="register" class="form-control">
              </div>
            </div>
            
            
            
             <!-- Input CEP -->
            <div class="col-md-12 form-group">
              <label>CEP:</label>
              <input type="text" id="register-codeZip" name="register-codeZip" class="form-control" placeholder="Somente números">
            </div>
            
            <div>
              <!-- Input Endereço -->
              <div class="col-md-10 form-group">
                <label>Endereço:</label>
                <input type="text" id="register-adress" name="register-adress" class="form-control">
              </div>
              
              <!-- Input Número -->
              <div class="col-md-2 form-group">
                <label>Número:</label>
                <input type="text" id="register-adressNum" name="register-adressNum" class="form-control">
              </div>
            </div>
            
            <div>
              <!-- Input Bairro -->
              <div class="col-md-6 form-group">
                <label>Bairro:</label>
                <input type="text" id="register-neighborhood" name="register-neighborhood" class="form-control">
              </div>
              
              <!-- Input Cidade -->
              <div class="col-md-4 form-group">
                <label>Cidade:</label>
                <input type="text" id="register-city" name="register-city" class="form-control">
              </div>
              
              <!-- Input Estado -->
              <div class="col-md-2 form-group">
                <label>Estado:</label>
                <input type="text" id="register-state" name="register-state" class="form-control" maxlenght="2">
              </div>
            </div>
            
            <!-- Input e-mail -->
            <div class="col-md-12 form-group">
              <label>Email: <small>(válido, pois a recuperação de senha será através desse e-mail)</small></label>
              <input type="email" id="register-email" name="register-email" class="form-control">
            </div>
            
            <div>
              <!-- Input Senha -->
              <div class="col-md-6 form-group">
                <label>Senha:</label>
                <input type="text" id="register-password" name="register-password" class="form-control">
              </div>
              
              <!-- Input Confirmação da senha -->
              <div class="col-md-6 form-group">
                <label>Confirmar Senha:</label>
                <input type="text" id="register-cfmPassword" name="register-cfmPassword" class="form-control">
              </div>
            </div>
          </div>
          
        </form>
        
        <div id="register-error" class="alert alert-danger" role="alert" style="display: none">
         </div>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>