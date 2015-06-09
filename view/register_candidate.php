<!-- Novo Usuário -->
<div class="modal fade" id="popup-candidate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      
      <!-- Titulo -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo Candidato</h4>
      </div>
      
      <!-- Corpo -->
      <div class="modal-body">
        <form class="">
         <div class="row">
           
           <!-- Coluna 1 -->
           <div class="col-md-6">
             
              <!-- Input Cargo -->
              <div class="form-group">
                <label>Cargo:</label>
                <select class="input-large form-control" id="search-combobox">
                  <option value="mayor">Prefeito</option>                  
                  <option value="vereador">Vereador</option>
                  <option value="stateDeputy">Deputado Estadual</option>
                  <option value="federalDeputy">Deputado Federal</option>
                  <option value="president">Presidente</option>
                  <option value="senator">Senador</option>
                  <option value="governor">Governador</option>
                </select>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Nome:</label>
                <input type="text" id="register-name-candidate" name="register-name" class="form-control" placeholder="Nome do candidado">
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Partido:</label>
                <select id="register-name-party" class="input-large form-control">
                  <option value="0"> Selecione um partido</option>
                  <?php
                    include "../model/open_db/open_db.php";
                    include "../model/select/select.php";
                    
                   
                    
                    $conn = openDB();
                    
                    $query = "SELECT * FROM partidos";
                    $result = mysqli_query($conn,$query);
                    
                    
                    while($ri = mysqli_fetch_assoc($result))
                    {
                      echo "<option value=" .$ri['idPartido'] . ">" . $ri['nome'] . "</option>";
                    }
                      echo "</select>";
                    
                      
                    ?>
                </select>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Numero:</label>
                <input type="text" id="register-name-num" name="register-name" class="form-control" placeholder="">
              </div>
              
           </div>
           
           <!-- Coluna 2 -->
           <div class="col-md-6">
             
             <div class="col-md-12 form-group center-block">  
                <img src="../resources/images/noimage.png" class="center-block" id="register-photoImage" height="100"/>
             </div>
              
             <div class="col-md-12 form-group">
               <input type="file" id="register-photoInput" name="register-photoInput" accept=".png,.PNG,.jpg,.JPG,.jpeg,.JPEG">
             </div>
            
           </div>
           
         </div>
        </form>
        
        <div id="register-error" class="alert alert-danger" role="alert" style="display: none">
         </div>
      </div>
                
      <!-- Rodapé -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>