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
          <div class="brd col-md-6">
            
            <div class="row">              
              <div class="brd col-md-6">
                
                <div class="brd col-md-12">
                  SEU VOTO VAI PARA:
                </div>
                
                <div class="brd col-md-12">
                  Cargo do maluco
                </div>
                
                <div class="brd col-md-12">
                  Numero: 
                </div>
                
              </div>
              
              <div class="brd col-md-6">
                imagem
              </div>              
            </div>
            
            <div class="row">
              <div class="brd col-md-12">
                Nome do maluco:
              </div>
              
              <div class="brd col-md-12">
                Parido: POOP
              </div>
            </div>
            
            <div class="row col-md-12">
              Aperte :
            </div>
            
            <div class="row col-md-12">
              VERDE para Confirmar
            </div>
              
            <div class="row col-md-12">
              Laranja para Corrigir
            </div>
            
          </div>
            
          <div class="brd col-md-6">
            
            <div class="brd row">
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">1</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">2</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">3</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">4</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">5</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">6</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">7</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">8</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">9</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-md-4 urn-key">
                
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block">0</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-default btn-lg btn-block">Branco</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
                <button type="button" class="btn btn-warning btn-lg btn-block">Corrige</button>
              </div>  
              
              <div class="brd col-md-4 urn-key">
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
      
      