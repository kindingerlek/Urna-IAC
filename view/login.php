<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Login</title>
    
    <noscript>
      <meta http-equiv="refresh" content="0;url=enable_js.php">
    </noscript>
    
    <script src="lib/js/jquery-1.11.0.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="lib/js/model_login.js"></script>  
    <script src="lib/js/controller_login.js"></script>
    <script src="lib/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/style.css" rel="stylesheet">    
    </head>
  <body>
    <!--
        Dicionário de IDs, Names e Classes
        
        >IDs e/ou Names
            - login-user            : Campo da seção 'Login' que receberá um CPF ou um AdminID.
            - login-password        : Campo da seção 'Login' que receberá a senha do usuário;
            - popup-pwRecover       : Identificação da seção 'Recuperar Senha'
            - popup-newUser         : Identificação da seção 'Novo Usuário'
            
            - register-name         : Receberá o nome digitado;
            - register-votingCard   : Receberá o título de eleitor;
            - register-zone         : Receberá a zona do eleitor;
            - register-session      : Receberá a seção do eleitor;
            - register-cpf          : Receberá o CPF do eleitor;
            - register-birthday     : Receberá a Data de Nascimento do Eleitor;
            - register-codeZip      : Receberá o CEP do Usuário;
            - register-adress       : Receberá o Endereço do Eleitor;
            - register-adressNum    : Receberá o número do endereço do Eleitor;
            - register-complement   : Receberá o Complemento do Endereço;
            - register-neighborhood : Receberá o Bairro do Eleitor;
            - register-city         : Receberá a Cidade do Eleitor;
            - register-state        : Receberá o estado do Eleitor;
            - register-password     : Receberá a senha do Eleitor.
            - register-cfmPassword  : Receberá novamente a senha
            
            - recover
    -->  
      
    
<<<<<<< HEAD
    
    <!-- Recuperação da Senha -->
    <div class="modal fade" id="popup-pwRecover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Titulo -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Recuperação de Senha</h4>
          </div>
=======
    <!-- Página -->      
    <div class="page">
      
      <!-- Cabeçalho da página -->
      <?php include "page_header_big.php" ?>
      
      <!-- Conteúdo da página -->
      <div class="page-content">
        <form id="form-login" method="POST" action="#">
>>>>>>> origin/master
          
          <!-- Input LOGIN -->
          <div class="form-group has-feedback" id="errorLogin">
            <label>CPF:</label>
            <input type="text" class="form-control" id="login-user" name="login-user" placeholder="Digite aqui seu CPF">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <!-- Input Senha -->
          <div class="form-group">
            <label for="exampleInputPassword3">Senha:</label>
            <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Digite aqui sua senha">
          </div>
          
          <!-- Div de Erro -->
          <div id="login-error" class="alert alert-danger" role="alert" style="display: none">
          </div>
          
          <!-- Links -->
          <p class="text-right">
            <a href="#" data-toggle="modal" data-target="#popup-pwRecover">Esqueci minha senha.</a></br>
            <a href="#" data-toggle="modal" data-target="#popup-newUser">Primeiro Acesso?</a>
          </p>
          
           <!-- Submit -->
          <button type="submit" id="login-submit" class="btn btn-primary btn-block">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  LOGIN
          </button>
        </form>
          
      </div>
      
      <form id="form-recover" method="POST" action="#">
        <?php include "recover_password.php" ?>
      </form>
      
      <form id="form-pwReset" method="POST" action="#">
        <?php include "recover_newPassword.php" ?>
      </form>
            
      <form id="form-register" method="POST" action="#">
        <?php include "register_new_user.php" ?>
      </form>
    <!-- Fim da página -->
    </div>
    
    <!-- Rodapé da página -->
    <?php include "page_footer.php" ?>
  </body>
  
  <script type="text/javascript">
   
</script>
  
</html>