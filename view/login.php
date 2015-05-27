<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title></title>
    
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/style.css" rel="stylesheet">    
    </head>
  <body>
    <!--
        Dicionário de IDs, Names e Classes
        
        >Class
            - mask-CPF              : Desenha a máscara de CPF;
            
        
        >IDs e/ou Names
            - login-iptLogin        : Campo da seção 'Login' que receberá um CPF ou um AdminID.
            - login-iptPassword     : Campo da seção 'Login' que receberá a senha do usuário;
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
            - register-neighborhood : Receberá o Bairro do Eleitor;
            - register-city         : Receberá a Cidade do Eleitor;
            - register-state        : Receberá o estado do Eleitor;
            - register-password     : Receberá a senha do Eleitor.
            - register-cfmPassword  : Receberá novamente a senha
            
            - recover
    -->  
      
          
    <!-- Conteúdo da página -->
    <div class="container page-content">
      <form id="form-login" class="middle" action="#">
        <h1 class="text-center">VOTE BEM</h1>
        
        <!-- Input LOGIN -->
        <div class="form-group">
          <label>CPF:</label>
          <input type="text" class="form-control" id="login-iptLogin" name="login-iptLogin" placeholder="Digite aqui seu CPF">
        </div>
        
        <!-- Input Senha -->
        <div class="form-group">
          <label for="exampleInputPassword3">Senha:</label>
          <input type="password" class="form-control" id="login-iptPassword" name="login-iptPassword" placeholder="Digite aqui sua senha">
        </div>
        
        <!-- Links -->
        <p class="text-right">
          <a href="#" data-toggle="modal" data-target="#popup-pwRecover">Esqueci minha senha.</a></br>
          <a href="#" data-toggle="modal" data-target="#popup-newUser">Primeiro Acesso?</a>
        </p>
        
        <!-- Submit -->
        <button type="submit" class="btn btn-primary btn-block">
          <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  LOGIN
        </button>
      </form>
        
    </div>
    
    
    <!-- Recuperação da Senha -->
    <div class="modal fade" id="popup-pwRecover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Titulo -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Recuperação de Senha</h4>
          </div>
          
          <!-- Corpo -->
          <div class="modal-body">
            <form>
                <!-- Input CPF -->
                <div class="col-md-12 form-group">
                  <label>CPF:</label>
                  <input id="recover-cpf" name="recover-cpf" type="text" class="form-control" placeholder="Somente números">
                </div>
                
                <!-- Input Código Enviado -->
                <div class="col-md-10 form-group">
                  <p class="text-right">Insira o código enviado para seu e-mail:</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="text" id="" class="form-control" maxLengh="4">
                </div>
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary btn-block">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span> Enviar código para o E-MAIL
                  </button>
                </div>
                &nbsp
            </form>
          </div>
          
          <!-- Rodapé -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Confirmar código</button>
              
          </div>
        </div>
      </div>
    </div>
    
    <!-- Novo Usuário -->
    <div class="modal fade" id="popup-newUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <!-- Titulo -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Novo Usuário</h4>
          </div>
          
          <!-- Corpo -->
          <div class="modal-body">
            <form class="form-inline"
              <!-- Input Nome -->
              <div class="col-md-12 form-group">
                <label>Nome:</label>
                <input type="text" id="register-name" name="register-name" class="form-control" placeholder="Digite aqui seu Nome">
              </div>
              
              <!-- Inputs Eleitor -->
              <div >
                <!-- Input Título -->
                <div class="col-md-8 form-group">
                  <label>Título de Eleitor:</label>
                  <input type="text" id="register-votingCard" name="register-votingCard" class="form-control">
                </div>
                
                <!-- Input Zona-->
                <div class="col-md-2 form-group">  
                  <label>Zona:</label>
                  <input type="text" id="register-zone" name="register-zone" class="form-control" maxlength="2" >
                </div>
                
                <!-- Input Seção-->
                <div class="col-md-2 form-group">  
                  <label>Seção:</label>
                  <input type="text" id="register-session" name="register-session" class="form-control" maxlength="2" >
                </div>  
              </div>
              
              <div>
                <!-- Input CPF -->
                <div class="col-md-6 form-group">
                  <label>CPF:</label>
                  <input type="text" id="register-cpf" name="register-cpf" class="form-control" placeholder="Somente números">
                </div>
                
                <!-- Input Data de Nascimento -->
                <div class="col-md-6 form-group">
                  <label>Data de Nascimento:</label>
                  <input type="text" id="register-birthday" name="register-birthday" name="register" class="form-control">
                </div>
              </div>
              
              
              
               <!-- Input CEP -->
              <div class="col-md-12 form-group">
                <label>CEP:</label>
                <input type="text" id="register-codeZip" name="register-codeZip" class="form-control" placeholder="Somente números">
              </div>
              
              <div>
                <!-- Input Endereço -->
                <div class="col-md-10 form-group">
                  <label>Endereço:</label>
                  <input type="text" id="register-adress" name="register-adress" class="form-control">
                </div>
                
                <!-- Input Número -->
                <div class="col-md-2 form-group">
                  <label>Número:</label>
                  <input type="text" id="register-adressNum" name="register-adressNum" class="form-control">
                </div>
              </div>
              
              <div>
                <!-- Input Bairro -->
                <div class="col-md-6 form-group">
                  <label>Bairro:</label>
                  <input type="text" id="register-neighborhood" name="register-neighborhood" class="form-control">
                </div>
                
                <!-- Input Cidade -->
                <div class="col-md-4 form-group">
                  <label>Cidade:</label>
                  <input type="text" id="register-city" name="register-city" class="form-control">
                </div>
                
                <!-- Input Estado -->
                <div class="col-md-2 form-group">
                  <label>Estado:</label>
                  <input type="text" id="register-state" name="register-state" class="form-control" maxlenght="2">
                </div>
              </div>
              
              <!-- Input e-mail -->
              <div class="col-md-12 form-group">
                <label>Email: <small>(válido, pois a recuperação de senha será através desse e-mail)</small></label>
                <input type="email" id="register-email" name="register-email" class="form-control">
              </div>
              
              <div>
                <!-- Input Senha -->
                <div class="col-md-6 form-group">
                  <label>Senha:</label>
                  <input type="text" id="register-password" name="register-password" class="form-control" maxlenght="2">
                </div>
                
                <!-- Input Confirmação da senha -->
                <div class="col-md-6 form-group">
                  <label>Confirmar Senha:</label>
                  <input type="text" id="register-cfmPassword" name="register-cfmPassword" class="form-control" maxlenght="2">
                </div>
              </div>
              
            </form>
            
            &nbsp
          </div>
                    
          <!-- Rodapé -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Confirmar</button>
          </div>
        </div>
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
    
    <script src="lib/js/jquery.min.js"></script>
    <script src="lib/js/bootstrap.js"></script>
  </body>
</html>