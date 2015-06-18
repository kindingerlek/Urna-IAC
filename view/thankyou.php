<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Agradecimento</title>
    
    <noscript>
      <meta http-equiv="refresh" content="0;url=enable_js.php">
    </noscript>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
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
      <?php include "includes/header/page_header_sml.php" ?>
      
      <!-- Conteúdo da página -->
      <div class="brd page-content">
        <h1> Obrigado por usar nosso simulador!</h1>
        <p>
          A equipe <strong>To the World Group</strong> agradece por usar nosso sistema.<br>
          Esperamos que a experiência obtida nesse simulador tenha sido proveitosa para você.
        </p>
        
        <p>
          Lembre-se seu voto faz a diferença! Exerça seu direito!
        </p>
        
        <a href="ticket.php" target="_blank" class="btn btn-primary btn-xlg " id="thanks-generateTicket" name="thanks-generateTicket" role="button">
            <span class="glyphicon glyphicon-print"></span>
            
            Gerar PDF do ticket
        </a>
        
      </div>
      
      
    <!-- Fim do corpo da página -->
    </div>
      
    <!-- Rodapé da página -->
    <?php include "includes/footer/page_footer.php" ?>
    
    <script>
      var pageTitle = $(document).find("title").text();
      
      $("#page-title").text(pageTitle);
    </script>
  </body>
</html>  