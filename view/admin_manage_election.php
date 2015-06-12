<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Eleições</title>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="lib/js/model_login.js"></script>  
    <script src="lib/js/controller_admin_manage_election.js"></script>
    <script src="lib/js/model_admin_manage_election.js"></script>
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
            - form-search               : Formulário que terá a combobox, campo de pesquisa e o botão de submit;
            - search-combo              : Combobox seletivo do tipo de pesquisa
            - search-input              : Input de texto para a pesquisa;
            - search-submit             : Botão de submit da pesquisa;
            - register-election         : Botão que irá abrir o formulário de nova eleição;
            - table                     : Tabela para inserir os dados;
            - table-body                : Corpo da tabela para insersão dinâmica
            
        >IDs/Names (Pop-Up Período da Eleição)
            - popup-newElection-period  : Referente à pop-up em si;
            - register-period           : Input da data que a eleição deverá começar;
            - register-startTime        : Input da hora de início da eleição;
            - register-endTime          : Input da hora de Término da eleição;
            
        >IDs/Names (Pop-Up Tipo de Eleição)
            - popup-newElection-type    : Referente à pop-up em si;
            - register-type             : Combobox para selecionar o tipo de eleição entre municipal e estadual
                > municipal             : Valor da opção "Municipal";
                > federal               : Valor da opção "Estudual e Federal";
            - type-nextButton           : Botão avançar da popup;
            
        >IDs/Names (Pop-Up Vagas Minicipais)
            - popup-newElection-municipal : Referente à pop-up em si;
            - register-mayor              : Input para quantidade de vagas do Prefeito;
            - register-vereador           : Input para quantidade de vagas de Vereadores;
            
        >IDs/Names (Pop-Up Vagas Estaduais e Federais)
            - popup-newElection-federal   : Referente à pop-up em si;
            - register-president          : Input para a quantidade de Presidentes
            - register-governor           : Input para a quantidade de Goveradores
            - register-FederalDeputy      : Input para a quantidade de Deputados Federais
            - register-stateDeputy        : Input para a quantidade de Deputados Estaduias
            - register-senator            : Input para a quantidade de Senador
            
        
            
            
          
    
    
    <!-- Página -->      
    <div class="page">
      
      <!-- Cabeçalho da página -->  
      <?php include "page_header_sml.php" ?>
            
      <!-- Conteúdo da página -->
      <div class="page-content">
    
        <form class="" id="form-search">
          
          <div class="row">

            <div class="form-group col-lg-3">
              <select class="input-large form-control" id="search-combobox" name="search-combobox">
                <option value="idEleicao">Código</option>
                <option value="tipo">Tipo</option>
                <option value="status">Status</option>
                <option value="data">Data</option>
              </select>  
            </div>
                  
            

            <div class="col-lg-6">
              <input type="text" id="search-input" class="form-control" placeholder="Procurar por..." name="search-input">

            </div>
                      
            <div class="col-xs-3">
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
              <td class="col-xs-1">Cod</td>
              <td class="col-xs-3">Tipo:</td>
              <td class="col-xs-2">Status:</td>
              <td class="col-xs-2">Data:</td>
              <td class="col-xs-1">Início:</td>
              <td class="col-xs-1">Fim:</td>
            </tr>
          </thead>
          
          <tbody id="table-body">
            
          </tbody>
        </table>
        
        <!-- Form com todas as pop-ups -->
        <form action="#" id="form-newElection" name="form-newElection">
              <?php include "register_newElection_period.php"; 
                    include "register_newElection_type.php" ;
                    include "register_newElection_municipal.php" ;
                    include "register_newElection_federal.php"; ?>
        </form>
        
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
      
      $("#register-type").change(
        function()
        {          
          if($("#register-type").val() == "municipal")
            $("#type-nextButton").attr('data-target',"#popup-newElection-municipal");
          else
            $("#type-nextButton").attr('data-target',"#popup-newElection-federal");
        }        
      );
      
      
      
    </script>
</html>    