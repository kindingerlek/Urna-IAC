<!-- ---------------------------------------------------------------------------------------------------------------------- -->

<!-- PopUp Período -->
<div class="modal fade" id="popup-newElection-period" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Período</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12 form-group">
                  <label>Data:</label>
                  <input type="text" id="register-period" name="register-period" class="form-control" required>
              </div>
              <div class="col-md-12 form-group">
                  <label>Início:</label>
                  <input type="text" id="register-startTime" name="register-startTime" class="form-control" required>
              </div>
              <div class="col-md-12 form-group">
                  <label>Término:</label>
                  <input type="text" id="register-endTime" name="register-endTime" class="form-control" required>
              </div>
            </div>
          </div>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
        <button type="button" id="register_newElection_period_submit" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#popup-newElection-type">Avançar</button>
      </div>
    </div>
  </div>
</div>
