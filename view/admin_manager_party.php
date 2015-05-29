<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Gerenciar Partidos</title>
    
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
      <div class="page-header">
          <img src="../resources/images/votebem-logo.png" id="header-logo"/>
          <h1>Vote Bem</h1>
          <small>Um simulador de votação brasileira</small>
      </div>
            
      <!-- Conteúdo da página -->
      <div class="page-content">
        <div class="col-lg-12">
          <h1 class="text-center">Gerenciar Partidos</h1>
          <br>
        </div>
        
        <form class="" id="form-search">
          <div class="row">
            <div class="form-group col-lg-3">
              <select class="input-large form-control" id="search-combobox">
                <option value="">Sigla</option>
                <option value="">Número</option>
              </select>  
            </div>
                  
            
            <div class="col-lg-6">
              <input type="text" id="search-input" class="form-control" placeholder="Procurar por...">
            </div>
                      
            <div class="col-lg-3">
              <button type="submit" id="search-submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar Partidos
              </button>
            </div>
          </div>
        </form>
        
        <table class="table table-striped table-hover" id="table">
          <thead>
            <tr>
              <td class="col-md-1">#</td>
              <td class="col-md-7">Nome:</td>
              <td class="col-md-2">Sigla:</td>
              <td class="col-md-2">Número</td>
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
      
      <!-- Rodapé da página -->
      <footer class="footer">
        <div class="container middle">
          <p class="text-muted">
            Desenvolvido por:</br>
            Alisson Krul, Bruno Henrique, Carlos Augusto Grispan e Lucas Ernesto Kindinger.</br>
            Tecnologia em Análise e Desenvolvimento de Sistemas - Universidade Federal do Paraná.
          </p>
        </div>
      </footer>
    <!-- Fim do corpo da página -->
    </div>     
  </body>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.combobox').combobox();
      });
    </script>
</html>    