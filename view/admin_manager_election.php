<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Eleições</title>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css"> 
    
    </head>
  <body>
     <!--
        Dicionário de IDs, Names e Classes        
             
        >IDs e/ou Names
            - form-search           : Formulário que terá a combobox, campo de pesquisa e o botão de submit;
            - search-combo          : Combobox seletivo do tipo de pesquisa
            - search-input          : Input de texto para a pesquisa;
            - search-submit         : Botão de submit da pesquisa;
            - register-election     : Botão que irá abrir o formulário de nova eleição;
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
            <div class="form-group col-lg-3">
              <select class="input-large form-control" id="search-combobox">
                <option value="">Código</option>
                <option value="">Tipo</option>
                <option value="">Status</option>
                <option value="">Data</option>
              </select>  
            </div>
                  
            
            <div class="col-lg-6">
              <input type="text" id="search-input" class="form-control" placeholder="Procurar por...">
            </div>
                      
            <div class="col-lg-3">
              <button type="submit" id="search-submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar Eleição
              </button>
              
              <button type="button" id="register-party" class="btn btn-primary btn-block" data-toggle="modal" data-target="#popup-newElection-period">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nova Eleição
              </button>
            </div>
          </div>
        </form>
        
        <table class="table table-striped table-hover" id="table">
          <thead>
            <tr>
              <td class="col-md-1">#</td>
              <td class="col-md-3">Tipo:</td>
              <td class="col-md-2">Status:</td>
              <td class="col-md-2">Data:</td>
              <td class="col-md-1">Início:</td>
              <td class="col-md-1">Fim:</td>
              <td class="col-md-2">Ações:</td>
            </tr>
          </thead>
          
          <tbody id="table-body">
            
          </tbody>
        </table>
        
        <!-- Form com todas as pop-ups -->
        <?php include "register_newElection_period.php"?>
        <?php include "register_newElection_type.php"?>
        
        <div style="display:none">
          <button type="button" class="btn btn-default" aria-label="Editar">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </button>
          
          <button type="button" class="btn btn-default" aria-label="Excluir">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          
          <button type="button" class="btn btn-default" aria-label="Candidatos"> Candidatos
          </button>
        </div>
        
      </div>
      
      <!-- Rodapé da página -->
      <?php include "page_footer.php" ?>
      
    <!-- Fim do corpo da página -->
    </div>     
  </body>
  <script type="text/javascript">
    var pageTitle = $(document).find("title").text();
      
      $("#page-title").text(pageTitle);
      $(document).ready(function(){
        $('.combobox').combobox();
        
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