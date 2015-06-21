<?php
  if(!isset($_SESSION)) 
	{ 
    session_start(); 
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Gerenciar Candidatos</title>
    
    <noscript>
      <meta http-equiv="refresh" content="0;url=enable_js.php">
    </noscript>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="lib/js/model_login.js"></script>  
    <script src="lib/js/controller_admin_manage_candidate.js"></script>
    <script src="lib/js/model_admin_manage_candidate.js"></script>
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
                <option value="nomeFantasia">Nome</option>                  
                <option value="idCandidato">Número</option>
                <option value="idPartido">Partido</option>
                <option value="idTipo">Cargo</option>
              </select>  
            </div>
                  
            
            <div class="col-xs-6">
              <input type="text" id="search-input" name="search-input" class="form-control" placeholder="Procurar por...">
            </div>
                      
            <div class="col-xs-3">
              <button type="submit" id="search-submit" name="search-submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar
              </button>
              
              <button type="button" id="register-candidate" class="btn btn-primary btn-block" data-toggle="modal" data-target="#popup-candidate">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Candidato
              </button>
            </div>
          </div>
        </form>
      
        <table class="table table-striped table-hover" id="table">
          <thead>
            <tr>
              <td class="col-xs-1">Cod</td>
              <td class="col-xs-4">Nome:</td>
              <td class="col-xs-2">Número:</td>
              <td class="col-xs-2">Partido:</td>
              <td class="col-xs-2">Cargo:</td>
            </tr>
          </thead>
          
          <tbody id="table-body">
            
          </tbody>
        </table>
     
     <form method ="POST" action ="#" enctype="multipart/form-data" id="form-register-candidate">
       <?php include "includes/modal/register/register_candidate.php" ?>
     </form>
     
     <form method="POST" action="#" name="form-removeCandidade">
      <?php include "includes/modal/status/status_candidate.php"?>
     </form>
     
     </div>
     
     
     
   <!-- Fim do corpo da Página -->
    </div>
    
    
    <!-- Rodapé da página -->
    <?php include "includes/footer/page_footer.php" ?> 
    
  </body>
  <script type="text/javascript">
      var pageTitle = $(document).find("title").text();
      $("#page-title").text(pageTitle);
      
      $("#table-body").on("click","tr",
      function()
      {
        $("#popup-status").modal('show');
        
        var inputs = ['#status-idElection','#status-name','#status-number','#status-party','#status-office'];
        var values = [];
        var image = '#status-photoImage';
        var imagePath = '../resources/candidate_photo/';
                  
        for(var i=0; i < inputs.length; i++)
        {
          values.push( $("td:eq(" + (i) + ")", this).text() );
          $(inputs[i]).val(values[i]);
        }
        
        imagePath = candidatePath[values[2]];
       

        $.ajax({
          url: imagePath, //or your url
          success: function(data){
            $(image).attr('src', imagePath);
          },
          error: function(data){
            $(image).attr('src', '../resources/images/noimage.png');
          },
        });

      });
    
   </script>
</html>    