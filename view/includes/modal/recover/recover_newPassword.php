<!-- Recuperação da Senha -->
<div class="modal fade" id="popup-pwReset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Recuperação de Senha</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 form-group">
            <label>Nova Senha:</label>
            <input type="password" id="recover-password" name="recover-password" type="text" class="form-control" placeholder="Digite sua nova senha aqui">
          </div>
          
          <div class="col-md-12 form-group">
            <label>Confirmar Nova Senha:</label>
            <input type="password" id="recover-cfmPassword" name="recover-cfmPassword" type="text" class="form-control" placeholder="Confirm sua senha">
          </div>
        </div>
      </div>
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" id="pwReset-submit" class="btn btn-primary">Confirmar Senha</button>          
      </div>
    </div>
  </div>
</div>