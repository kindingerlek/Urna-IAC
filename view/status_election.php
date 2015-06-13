<!-- Novo Partido -->
<div class="modal fade" id="popup-status" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  modal-md">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informações sobre a eleição</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <div clas= "row">
          <div class="form-group col-xs-12" >
            <label>status da Eleição:</label>
            <input type="text" id="status-status" class="form-control" readonly> </input>
          </div>
        
          <div class="form-group col-xs-6" >
            <label>Código da Eleição:</label>
            <input type="text" id="status-idElection" class="form-control" readonly> </input>
          </div>               
        
          <div class="form-group col-xs-6">
            <label>Data</label>
            <input type="text" id="status-period" class="form-control" readonly> </input>
          </div>
        
          <div class="form-group col-xs-6">
            <label>Hora de Inicio</label>
            <input type="text" id="status-startTime" class="form-control" readonly> </input>
          </div>
        
          <div class="form-group col-xs-6">
            <label>Hora de Término</label>
            <input type="text" id="status-endTime" class="form-control" readonly> </input>
          </div>
        
          <div class="form-group col-xs-12">
            <label>TIPO:</label>
            <select id="status-type" class="form-control" disabled>
              <option value="MUNICIPAL">MUNICIPAL</option>
              <option value="FEDERAL">FEDERAL</option>
            </select>
          </div>
        
          <div id="status-scheduled" style="display:none">
            <button type="button" class="btn btn-primary btn-block"> Gerenciar Candidatos</button>
          </div>
        
          <div id="status-started" style="display:none">
            Não há ações para uma eleição iniciada.
          </div>
        
          <div id="status-finished" style="display:none">
            <button type="button" class="btn btn-primary btn-block"> Ver Relatórios</button>
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
