<!-- Novo Partido -->
<div class="modal fade" id="popup-status" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> Informações Partido</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <form class="" >
          <div class="row">
            <div class="col-xs-8">
              <div class="col-xs-12 form-group">
                  <label>Nome:</label>
                  <input type="text" id="status-name" name="status-name" class="form-control" readonly>
              </div>
              <div class="col-xs-6 form-group">
                  <label>Sigla:</label>
                  <input type="text" id="status-acronym" name="status-acronym" class="form-control" readonly>
              </div>
              <div class="col-xs-6 form-group">
                  <label>Número:</label>
                  <input type="text" id="status-number" name="status-number" class="form-control" maxleght="2" readonly>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="col-xs-12 form-group center-block">
                <img src="../resources/images/noimage.png" class="center-block" id="status-logoImage" height="100"/>
              </div>                
            </div>
          </div>         
        </form>
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