<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Urna</title>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/style.css" rel="stylesheet"> 
    </head>
  <body>
    
    <!-- Página -->      
    <div class="page">
      
      <!-- Cabeçalho da página -->  
      <?php include "page_header_sml.php" ?>
            
      <!-- Conteúdo da página -->
      <div class="brd page-content">
        
        
        <div class="brd row">
          
          <!-- Tela da Urna -->
          <div class="brd col-xs-6" id="urn-screen">
            
            <div class="row">              
              <div class="brd col-xs-6">
                
                <div class="brd col-xs-12">
                  <h3> SEU VOTO VAI PARA:</h3>
                </div>
                
                <div class="brd col-xs-12">
                  <h2> Cargo do maluco </h2> 
                </div>
                
                <div class="brd col-xs-12">
                  <h3> Numero: </h3>
                </div>
                
              </div>
              
              <div class="brd col-xs-6">
                imagem
              </div>              
            </div>
            
            <div class="row">
              <div class="brd col-xs-12">
                Nome do maluco:
              </div>
              
              <div class="brd col-xs-12">
                Partido: POOP
              </div>
              
              <div class="brd col-xs-12" id="urn-screen-footer">
                Aperte : </br>
                VERDE para Confirmar </br>
                Laranja para Corrigir </br>
              </div>
            </div>
            
            
          </div>
          
          
          
          <!-- Botões da Urna -->
          <div class="brd col-xs-6">
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">1</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">2</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">3</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">4</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">5</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">6</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">7</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">8</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">9</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">0</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-default btn-lg btn-block">Branco</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-warning btn-lg btn-block">Corrige</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-success btn-lg btn-block">Confirma</button>
              </div>  
            </div>
                        
          </div>  
              
                
       </div>
      <!-- Fim do corpo da página -->
    </div>
    
    <script>
      var pageTitle = $(document).find("title").text();
      
      $("#page-title").text(pageTitle);
    </script>
  </body>
</html>  
      
      