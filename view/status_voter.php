<!-- Novo Usuário -->
<div class="modal fade" id="popup-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informações Usuário</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">      
        <div class="row">
          <!-- Input Nome -->
          <div class="col-md-12 form-group has-feedback">
            <label class="control-label">Nome:</label>
            <input type="text" id="status-name"  name="status-name" class="form-control" placeholder="Digite aqui seu Nome" readonly>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
            
          <!-- Input Título -->
          <div class="col-md-8 form-group has-feedback">
            <label class="control-label">Título de Eleitor:</label>
            <input type="text" id="status-votingCard"  name="status-votingCard" class="form-control" readonly>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <!-- Input Zona-->
          <div class="col-md-2 form-group has-feedback">  
            <label class="control-label">Zona:</label>
            <input type="text" id="status-zone"   name="status-zone" class="form-control" maxlength="3" readonly>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <!-- Input Seção-->
          <div class="col-md-2 form-group has-feedback">  
            <label class="control-label">Seção:</label>
            <input type="text" id="status-session"   name="status-session" class="form-control" maxlength="4" readonly>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div> 
          
          <!-- Input CPF -->
          <div class="col-md-12 form-group has-feedback">
            <label class="control-label">CPF:</label>
            <input type="text" id="status-cpf"  name="status-cpf" class="form-control" placeholder="Somente números" readonly>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
        </div>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" id="status-removeButton" class="btn btn-danger">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Excluir
        </button>
      </div>
    </div>
  </div>
</div>

