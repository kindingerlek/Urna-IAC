<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Eleições</title>
    
    <noscript>
      <meta http-equiv="refresh" content="0;url=enable_js.php">
    </noscript>
    
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

      <!-- Verificar User logado -->
      <?php include "../controller/controller_admin_logged.php" ?>
  
      <!-- Cabeçalho da página -->  
      <?php include "includes/header/page_header_sml.php" ?>
            
      <!-- Conteúdo da página -->
      <div class="page-content">
    
        <form class="" id="form-search">
          
          <div class="row">

            <div class="form-group col-xs-3">
              <select class="input-large form-control" id="search-combobox" name="search-combobox">
                <option value="idEleicao">Código</option>
                <option value="tipo">Tipo</option>
                <option value="status">Status</option>
                <option value="data">Data</option>
              </select>  
            </div>
                  
            

            <div class="col-xs-6">
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
              <td class="col-xs-4">Tipo:</td>
              <td class="col-xs-3">Status:</td>
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
              <?php include "includes/modal/register/register_newElection_period.php"; 
                    include "includes/modal/register/register_newElection_type.php" ;
                    include "includes/modal/register/register_newElection_municipal.php" ;
                    include "includes/modal/register/register_newElection_federal.php"; ?>
        </form>
        
        <form action="#" id="form-status">        
          <?php include "includes/modal/status/status_election.php" ?>        
        </form>
        
      </div>
     
    <!-- Fim do corpo da página -->
    </div> 
      
    <!-- Rodapé da página -->
    <?php include "includes/footer/page_footer.php" ?>
      
        
  </body>
  <script type="text/javascript">
  
    //Altera o Título da página
    var pageTitle = $(document).find("title").text();      
      $("#page-title").text(pageTitle);   
      
      
      /*
      Altera o data-target conforme a opção escolhida.
      Dessa forma, o fluxo das popUps é alterado.
      */      
      $("#register-type").change(
        function()
        {          
          if($("#register-type").val() == "municipal") 
            $("#type-nextButton").attr('data-target',"#popup-newElection-municipal");
          else
            $("#type-nextButton").attr('data-target',"#popup-newElection-federal");
        }        
      );
      
     //Recupera as informações da linha clicada e as transfere para as inputs.
      $("#table-body").on("click","tr",
      function()
      {
        $("#popup-status").modal('show');
        
        var inputs = 
        [
          '#status-idElection',
          '#status-type',
          '#status-status',
          '#status-period',
          '#status-startTime',
          '#status-endTime'
        ];
        
        var values = [];
                  
        for(var i=0; i < inputs.length; i++)
        {
          values.push( $("td:eq(" + (i) + ")", this).text() );
          $(inputs[i]).val(values[i]);
        }
        
        showStatusDiv(values[2]);
        setInputs(values[2]);
        
      });
      
      
      // Alterna entre as divs do html conforme o status da eleição;
      function showStatusDiv(getStatus)
      {        
        var status = ['AGENDADA', 'INICIADA', 'FINALIZADA'];
        var divs= ['#status-scheduled', '#status-started','#status-finished'];
        
        //Varre o vetor habilitando a div caso seja quivalente ao paramentro,
        //ou ocultando-a caso seja diferente.
        for(var i=0; i < divs.length; i++)
        {
          if(getStatus != status[i]) 
            $(divs[i]).hide();
          else
            $(divs[i]).show();
        }
      }
      
      // Habilita a edição ou não das inputs conforme o estado da eleição;
      function setInputs(getStatus)
      {
        inputs = ['#status-period','#status-startTime','#status-endTime'];
        if(getStatus == 'AGENDADA')
          EnableInputs(inputs);
        else
          ReadOnlyInputs(inputs);
      }   
      
      function EnableInputs(inputs)
      {
        for(var i=0; i < inputs.length; i++)
          $(inputs[i]).prop('readonly', false);
      }
      
      function ReadOnlyInputs(inputs)
      {
        for(var i=0; i < inputs.length; i++)
          $(inputs[i]).prop('readonly', true);
      }
            
    </script>
</html>    