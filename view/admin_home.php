<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Home</title>
    
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
      <div class="page-content">
        <a class="btn btn-default btn-lg btn-block" href="admin_manage_voter.php" role="button" > Gerenciar Eleitores</a>
        <a class="btn btn-default btn-lg btn-block" href="admin_manage_party.php" role="button" > Gerenciar Partidos</a>
        <a class="btn btn-default btn-lg btn-block" href="admin_manage_election.php" role="button" > Gerenciar Eleições</a>  
      </div>
    
      <!-- Rodapé da página -->
      <?php include "page_footer.php" ?>
      
    <!-- Fim do corpo da página -->
    </div>
    
    <script>
      var pageTitle = $(document).find("title").text();
      
      $("#page-title").text(pageTitle);
    </script>
  </body>
</html>    