<!-- Novo Partido -->
<div class="modal fade" id="popup-editParty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Partido</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <form class="" >
          <div class="row">
            <div class="col-xs-6">
              <div class="col-xs-12 form-group">
                  <label>Nome:</label>
                  <input type="text" id="edit-name" name="edit-name" class="form-control">
              </div>
              <div class="col-xs-6 form-group">
                  <label>Sigla:</label>
                  <input type="text" id="edit-acronym" name="edit-acronym" class="form-control">
              </div>
              <div class="col-xs-6 form-group">
                  <label>Número:</label>
                  <input type="text" id="edit-number" name="edit-number" class="form-control" maxleght="2">
              </div>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-12 form-group center-block">
                <img src="../resources/images/noimage.png" class="center-block" id="register-logoImage" height="100"/>
                      <br>
                <div id="disp_tmp_path"></div>
              </div>
              
               <div class="col-xs-12 form-group">
                 <input type="file" id="edit-logoInput" name="edit-logoInput" accept=".png,.PNG,.jpg,.JPG,.jpeg,.JPEG">
               </div>
                
            </div>
            
            <div id="register-error" class="alert alert-danger" role="alert" style="display: none">
              
            </div>
          </div>         
        </form>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" id="removePartyButton" class="btn btn-danger">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Excluir
        </button>
        <button type="submit" class="btn btn-success">Confirmar Edição</button>
      </div>
    </div>
  </div>
</div>