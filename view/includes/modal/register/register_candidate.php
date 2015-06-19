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
                <select class="input-large form-control" id="register-office" name="register-office">
                  <?php
                    require_once "../model/open_db/open_db.php";
                    require_once "../model/select/select.php";
                    
                   
                    
                    $conn = openDB();
                    
                    $query = "SELECT * FROM tipos";
                    $result = mysqli_query($conn,$query);
                    
                    
                    while($ri = mysqli_fetch_assoc($result))
                    {
                      $strTipo = preg_replace('/[ ]/', '_', $ri['tipo']);
                      echo "<option value=" .$strTipo. ">" . $ri['tipo'] . "</option>";
                    }
                    
                     
                    mysqli_close($conn); 
                    ?>
                  
                </select>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Nome:</label>
                <input type="text" id="register-name" name="register-name" class="form-control" placeholder="Nome do candidado"  required>
              </div>
              
              <!-- Input Nome -->
              <div class="form-group">
                <label>Partido:</label>
                <select id="register-party" name="register-party" class="input-large form-control">                  
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

                <input type="text" id="register-number" name="register-number" class="form-control" placeholder="" required>

              </div>
              
           </div>
           
           <!-- Coluna 2 -->
           <div class="col-md-6">
             
             <div class="col-md-12 form-group center-block">  
                <img src="../resources/images/noimage.png" class="center-block" id="register-photoImage" height="100"/>
             </div>
              
             <div class="col-md-12 form-group">
               <input type="file" id="register-photoInput" name="register-photoInput" accept=",.jpg,.JPG">
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