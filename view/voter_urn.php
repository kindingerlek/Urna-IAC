<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Urna</title>
    
    <noscript>
      <meta http-equiv="refresh" content="0;url=enable_js.php">
    </noscript>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/sound_lib_min.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="lib/js/controller_voter_urn.js"></script>
    <script src="lib/js/model_voter_urn.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/style.css" rel="stylesheet"> 
    </head>
  <body>
    
    <!-- Página -->      
    <div class="page">
      
      <!-- Cabeçalho da página -->  
      <?php include "page_header_sml.php" ?>
      <?php include "c://wamp/www/Urna-IAC/model/identify_office/identify_office.php" ?>
            
      <!-- Conteúdo da página -->
      <div class="brd page-content">
        
        
        <div class="brd row">
          
          <!-- Tela da Urna -->
          <div class="brd col-xs-6" id="urn-screen">
            
            <div class="row" style="height: 250px;">              
              <div class="brd col-xs-8">
                  <h3> SEU VOTO VAI PARA:</h3> 

                  <h2 id="urn-candidateOffice"><?php identifyOffice(); ?></h2> 

                  <h3> Numero: </h3>
                  <h2 id="urn-number"class="text-center"></h2>
              </div>
              <div class=" brd col-xs-4 full-height" id="urn-candidatePhoto">
              </div>              
            </div>
            
            <div class="row">
              <div class="brd col-xs-12">
                Nome do maluco: <p id="urn-candidateName"></p>
              </div>
              
              <div class="brd col-xs-12">
                Partido: <p id="urn-candidateParty"></p>
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
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-1" name="key-1">1</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-2" name="key-2">2</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-3" name="key-3">3</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-4" name="key-4">4</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-5" name="key-5">5</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-6" name="key-6">6</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-7" name="key-7">7</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-8" name="key-8">8</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-9" name="key-9">9</button>
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-inverted btn-xlg btn-block" id="key-0" name="key-0">0</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                
              </div>  
            </div>
            
            <div class="brd row">
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-default btn-lg btn-block" id="key-empty" name="key-empty">Branco</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-warning btn-lg btn-block" id="key-correct"name="key-correct">Corrige</button>
              </div>  
              
              <div class="brd col-xs-4 urn-key">
                <button type="button" class="btn btn-success btn-lg btn-block" id="key-confirm" name="key-confirm">Confirma</button>
              </div>  
            </div>
                        
          </div>  
       </div>
      <!-- Fim do corpo da página -->
      </div>
      </div>  
      
      <!-- Rodapé da página -->
      <?php include "page_footer.php" ?>
    <script>
      var pageTitle = $(document).find("title").text();
      ion.sound({
        sounds: 
        [
          {
              name: "confirm"
              volume: 1,
              preload: true
          },
          {
              name: "end",
              volume: 1,
              preload: true
          }
        ],
      volume: 1,
      path: "../resources/audio",
      preload: true
    });

      $("#page-title").text(pageTitle);
      $("#key-confirm").click(function(
        ion.sound.play("confirm");
      ));
    </script>
  </body>
</html>  
      
      