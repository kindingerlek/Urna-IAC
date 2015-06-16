<!-- Novo Usuário -->
<div class="modal fade" id="popup-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Informações do Candidato</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <form class="">
         <div class="row">
           
           <!-- Coluna 1 -->
           <div class="col-md-6">
             
             <!-- Input Cod -->
              <div class="form-group">
                <label>ID da Eleição:</label>
                <input type="text" id="status-idElection" name="status-idElection" class="form-control" readonly>
              </div>
             
              <!-- Input Cargo -->
              <div class="form-group">
                <label>Cargo:</label>
                <select class="input-large form-control" id="status-office" name="status-office" disabled>
                  <option value="prefeito">Prefeito</option>                  
                  <option value="vereador">Vereador</option>
                  <option value="deputado estadual">Deputado Estadual</option>
                  <option value="deputado federal">Deputado Federal</option>
                  <option value="presidente">Presidente</option>
                  <option value="senador">Senador</option>
                  <option value="governador">Governador</option>
                </select>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Nome:</label>
                <input type="text" id="status-name" name="status-name" class="form-control" placeholder="Nome do candidado" readonly>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Partido:</label>
                <select id="status-party" name="status-party" class="input-large form-control" disabled>
                  <option value="0"> Selecione um partido</option>
                  
                  <?php
                    require_once "../model/open_db/open_db.php";
                    require_once "../model/select/select.php";
                    
                   
                    
                    $conn = openDB();
                    
                    $query = "SELECT * FROM partidos ORDER BY idPartido";
                    $result = mysqli_query($conn,$query);
                    
                    
                    while($ri = mysqli_fetch_assoc($result))
                    {
                      echo "<option value=" .$ri['idPartido'] . ">" . $ri['idPartido'] . " - " .  $ri['nome'] . "</option>";
                    }
                    
                     
                    mysqli_close($conn); 
                    ?>
                </select>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Numero:</label>

                <input type="number" id="status-number" name="status-number" class="form-control" placeholder="" readonly>

              </div>
              
           </div>
           
           <!-- Coluna 2 -->
           <div class="col-md-6">
             
             <div class="col-md-12 form-group center-block">  
                <img src="../resources/images/noimage.png" class="center-block" id="status-photoImage" height="100"/>
             </div>
            
           </div>
           
         </div>
        </form>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" id="status-removeButton" class="btn btn-danger" name="status-removeButton">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Excluir
        </button>
      </div>
    </div>
  </div>
</div>