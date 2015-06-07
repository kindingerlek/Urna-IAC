<!-- Recuperação da Senha -->
<div class="modal fade" id="popup-pwRecover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Recuperação de Senha</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <div class="row">
            <!-- Input CPF -->
            <div class="col-md-12 form-group has-feedback">
              <label>CPF:</label>
              <input id="recover-cpf" name="recover-cpf" type="text" class="form-control" placeholder="Somente números">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            
            <!-- Input Código Enviado -->
            <div class="col-md-10 form-group">
              <p class="text-right">Insira o código enviado para seu e-mail:</p>
            </div>
            
            <div class="col-md-2 form-group">
              <input type="text" id="recover-cod" class="form-control" maxLengh="4">
            </div>
            
            <div class="col-md-12">
              <button id="submit-email" type="button" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-send" aria-hidden="true"></span> Enviar código para o E-MAIL
              </button>
            </div>
            <div class="col-md-12 alert alert-success" id="#recover-success" style="">
              asdasdasd
            </div>
            
            <div class="col-md-12 alert alert-danger" id="#recover-error" style="display:none">
              
            </div>
            
          </div>
      </div>
      
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" id="recover-submit" class="btn btn-primary" data-dismiss="modal"  data-toggle="modal" data-target="#popup-pwReset">Confirmar código</button>
          
      </div>
    </div>
  </div>
</div>