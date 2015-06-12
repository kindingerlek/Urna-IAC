<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Eleitores</title>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="lib/js/model_login.js"></script>  
    <script src="lib/js/controller_admin_manage_voter.js"></script>
    <script src="lib/js/model_admin_manage_voter.js"></script>
    <script src="lib/js/jquery.maskedinput.js" type="text/javascript"></script>
    
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
            - table                 : Tabela para inserir os dados;
            - table-body            : Corpo da tabela para insersão dinâmica
          
    
    <!-- Página -->      
    <div class="page">
      
      <!-- Cabeçalho da página -->  
      <?php include "page_header_sml.php" ?>
            
      <!-- Conteúdo da página -->
      <div class="page-content">
        
      
        <form class="" id="form-search">
          <div class="row">
            <div class="form-group col-xs-3">
              <select class="input-large form-control" id="search-combobox" name="search-combobox">
                <option value="nome">Nome</option>
                <option value="tituloEleitor">Título</option>
                <option value="cpf">CPF</option>
              </select>  
            </div>
                  
            
            <div class="col-xs-6">
              <input type="text" id="search-input" class="form-control" placeholder="Procurar por..." name="search-input">
            </div>
                      
            <div class="col-xs-3">
              <button type="submit" id="search-submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar
              </button>
            </div>
          </div>
        </form>
      
        <table class="table table-striped table-hover" id="table">
          <thead>
            <tr>
              <td class="col-xs-1">Cod</td>
              <td class="col-xs-4">Nome:</td>
              <td class="col-xs-2">Título:</td>
              <td class="col-xs-2">CPF:</td>
              <td class="col-xs-1">Zona:</td>
              <td class="col-xs-1">Seção:</td>
            </tr>
          </thead>
          
          <tbody id="table-body">
            
          </tbody>
        </table>
      
        <div style="display:none">
          <button type="button" class="btn btn-default" aria-label="Editar">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </button>
          
          <button type="button" class="btn btn-default" aria-label="Excluir">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
      
    </div>
    
    <form method="POST" action="#" name="form-removeVoter">
      <?php include "status_voter.php" ?>
    </form>
    
    <!-- Rodapé da página -->
    <?php include "page_footer.php" ?>  
    
    <!-- Fim do corpo da Página -->
    </div>
  </body>
  <script type="text/javascript">
    var pageTitle = $(document).find("title").text();
      
    $("#page-title").text(pageTitle);
    
    
    $("#table-body").on("click","tr",
      function()
      {
        $("#popup-status").modal('show');
        
        var inputs = 
        [
          '#status-name',
          '#status-cpf',
          '#status-votingCard',
          '#status-zone',
          '#status-session',
          ];
        var values = [];
        var image = '#status-logoImage'
        var imagePath = '../resources/party_logo/';
                  
        for(var i=0; i < inputs.length; i++)
        {
          values.push( $("td:eq(" + (i+1) + ")", this).text() );
          $(inputs[i]).val(values[i]);
        }
        
        imagePath = imagePath + values[2] + ".jpg";
        if($.UrlExists(imagePath)){
          $(image).attr('src', imagePath);
        }
        else
        {
          $(image).attr('src', '../resources/images/noimage.png');
        }
        
      });
  </script>
</html>    