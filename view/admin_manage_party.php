<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Partidos</title>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="lib/js/model_login.js"></script>  
    <script src="lib/js/controller_admin_manage_party.js"></script>
    <script src="lib/js/model_admin_manage_party.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/style.css" rel="stylesheet">
    <link href="lib/css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css"> 
    
    </head>
  <body>
     <!--
        Dicionário de IDs, Names e Classes        
             
        >IDs e/ou Names
            - form-search           : Formulário que terá a combobox, campo de pesquisa e o botão de submit;
            - search-combo          : Combobox seletivo do tipo de pesquisa
            - search-input          : Input de texto para a pesquisa;
            - search-submit         : Botão de submit da pesquisa;
            - register-party        : Botão que irá abrir o formulário de novo partido;
            - table                 : Tabela para inserir os dados;
            - table-body            : Corpo da tabela para insersão dinâmica
          
    
    
    <!-- Página -->      
    <div class="page">
      
      <!-- Cabeçalho da página -->  
      <?php include "page_header_sml.php" ?>
            
      <!-- Conteúdo da página -->
      <div class="page-content brd">
    
        <form class="" id="form-search">
          
          <div class="row">
            <div class="form-group col-xs-3">
              <select class="input-large form-control" id="search-combobox" name="search-combobox">
                <option value="nome">Nome</option>
                <option value="sigla">Sigla</option>
                <option value="idPartido">Número</option>
              </select>  
            </div>
                  
            
            <div class="col-xs-6">
              <input type="text" id="search-input" name="search-input" class="form-control" placeholder="Procurar por...">
            </div>
                      
            <div class="col-xs-3">
              <button type="submit" id="search-submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar Partidos
              </button>
              
              <button type="button" id="register-party" class="btn btn-primary btn-block" data-toggle="modal" data-target="#popup-newPartity">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo partido
              </button>
            </div>
          </div>
        </form>
        
        <table class="table table-striped table-hover" id="table">
          <thead>
            <tr>
              <td class="col-xs-1">Cod</td>
              <td class="col-xs-7">Nome:</td>
              <td class="col-xs-2">Sigla:</td>
              <td class="col-xs-2">Número</td>
            </tr>
          </thead>
          
          <tbody id="table-body">
            
          </tbody>
        </table>
        
        <form method = "POST" action ="#" enctype="multipart/form-data" id="form-register-party">
          <?php include "register_party.php" ?>
        </form>
        
        <form method="POST" action="">
          <?php include "edit_party.php" ?>
        </form>
        
      </div>
      
      <!-- Rodapé da página -->
      <?php include "page_footer.php" ?>
      
    <!-- Fim do corpo da página -->
    </div>     
  </body>
  <script type="text/javascript">
    var pageTitle = $(document).find("title").text();
      
      $("#page-title").text(pageTitle);
           
      $("#table-body").on("click","tr",
        function()
        {
          $("#popup-editParty").modal('show');
        });
      
      $("#register-logoInput").change(
        function()
        {
          var tmppath = URL.createObjectURL(event.target.files[0]);          
          if(tmppath)
            $("#register-logoImage").fadeIn("500").attr('src',tmppath);
          else          
            $("#register-logoImage").fadeIn("500").attr('src',"../resources/images/noimage.png")
        }        
      );
      
      
    </script>
</html>    