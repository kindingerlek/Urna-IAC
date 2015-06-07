<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Eleitores</title>
    
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
                <option value="nome">Nome</option>
                <option value="tituloEleitor">Título</option>
                <option value="cpf">CPF</option>
              </select>  
            </div>
                  
            
            <div class="col-lg-6">
              <input type="text" id="search-input" class="form-control" placeholder="Procurar por...">
            </div>
                      
            <div class="col-lg-3">
              <button type="submit" id="search-submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar
              </button>
            </div>
          </div>
        </form>
      
        <table class="table table-striped table-hover" id="table">
          <thead>
            <tr>
              <td class="col-md-1">#</td>
              <td class="col-md-4">Nome:</td>
              <td class="col-md-2">Título:</td>
              <td class="col-md-2">CPF:</td>
              <td class="col-md-1">Zona:</td>
              <td class="col-md-1">Seção:</td>
              <td class="col-md-1">Ações:</td>
            </tr>
          </thead>
          
          <tbody id="table-body">
            <?php
              include "../model/open_db/open_db.php";
              
              $conn = openDB();
            
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              
              $sql = "SELECT nome, tituloEleitor, cpf, zona, secao FROM usuarios ORDER BY nome";
              $result = mysqli_query($conn, $sql);
              $i = 0;  
              
              while($row = mysqli_fetch_assoc($result))
              {
                $i++;
                
                $linha = 
                  "<tr><td>" . $i .
                  "</td><td>" . $row["nome"] . 
                  "</td><td>" . $row["tituloEleitor"] .                   
                  "</td><td>" . $row["cpf"] .                   
                  "</td><td>" . $row["zona"] .                   
                  "</td><td>" . $row["secao"] .                    
                  "</td><td>" . "Ações" .
                  "</td></tr>";
                
                echo $linha;
              }
            ?>
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
    
    <!-- Rodapé da página -->
    <?php include "page_footer.php" ?>  
    
    <!-- Fim do corpo da Página -->
    </div>
  </body>
  <script type="text/javascript">
    var pageTitle = $(document).find("title").text();
      
    $("#page-title").text(pageTitle);
    
    $(document).ready(function(){
      $('.combobox').combobox();
    });
  </script>
</html>    