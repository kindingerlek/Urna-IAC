<!-- ---------------------------------------------------------------------------------------------------------------------- -->

<!-- PopUp Vagas Municipais -->
<div class="modal fade" id="popup-newElection-municipal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eleição Municipal - Vagas</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12 form-group">
                  <label>Prefeito:</label>
                  <input type="text" id="register-mayor" name="register-mayor" class="form-control" value="1" readonly>
              </div>
              <div class="col-md-12 form-group">
                  <label>Vereadores:</label>
                  <input type="text" id="register-vereador" name="register-vereador" class="form-control" >
              </div>
              
              <div class="election-error col-md-12 alert alert-error" style="display:none">
                  
              </div>
            </div>
          </div>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#popup-newElection-type">Voltar</button>
        <button type="submit" id="submit-newElection" class="btn btn-primary" >Agendar Eleição</button>
      </div>
    </div>
  </div>
</div>