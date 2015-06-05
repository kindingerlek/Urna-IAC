<!-- ---------------------------------------------------------------------------------------------------------------------- -->

<!-- PopUp seleção do tipo de Eleição -->
<div class="modal fade" id="popup-newElection-type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tipo</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <select class="input-large form-control" id="register-newElection-type">
                <option value="municipal">Municipal</option>
                <option value="federal">Estadual e Federal</option>
              </select> 
            </div>
          </div>
      </div>
                      
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#popup-newElection-period">Voltar</button>
        <button type="button" class="btn btn-primary" id="newElection-type-next" data-dismiss="modal" data-toggle="modal" data-target="#popup-newElection-municipal">Avançar</button>
      </div>
    </div>
  </div>
</div>