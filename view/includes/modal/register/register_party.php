<!-- Novo Partido -->
<div class="modal fade" id="popup-newParty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo Partido</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <form class="" >
          <div class="row">
            <div class="col-xs-6">
              <div class="col-xs-12 form-group">
                  <label>Nome:</label>
                  <input type="text" id="register-name" name="register-name" class="form-control" required>
              </div>
              <div class="col-xs-6 form-group">
                  <label>Sigla:</label>
                  <input type="text" id="register-acronym" name="register-acronym" class="form-control" required>
              </div>
              <div class="col-xs-6 form-group">
                  <label>Número:</label>
                  <input type="text" id="register-number" name="register-number" class="form-control" maxleght="2" required>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-12 form-group center-block">
                <img src="../resources/images/noimage.png" class="center-block" id="register-logoImage" height="100"/>
              </div>
              
               <div class="col-xs-12 form-group">
                 <input type="file" id="register-logoInput" name="register-logoInput" accept=".jpg,.JPG" required>
               </div>
                
            </div>
            
            <div id="register-error"  class="col-xs-12 alert alert-danger" role="alert" style="display: none">
              
            </div>
          </div>
        </form>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>