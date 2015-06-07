/* global $ */
/* global jQuery */
$(function(){
      chooseMask();  //Função que define a máscara do campo
      
      $("#register-name").blur(function(){  //Função que checa se o nome foi preenchido corretamente
           changeFieldState($(this), checkField($(this)));
      });
      
      $("#register-address").blur(function(){  //Função que checa se o endereço foi preenchido corretamente
           changeFieldState($(this), checkField($(this)));
      });
      
      createMasks(); //Função que cria todas as máscaras
      
      $("#register-zipCode").blur(function(){  //Função para preenchimento do endereço a partir do CEP
            changeFieldState($(this), getAddress());
      });
      
      $("#register-votingCard").blur(function(){  //Função para validar título de eleitor
            changeFieldState($(this), evalVotingCard($(this).val()));
      });
      
      $("#register-cpf").blur(function(){  //Função para validar o CPF na tela de registro
            changeFieldState($(this), evalCPF($(this).val()));
      });
      
      $("#login-user").blur(function(){  //Função para validar o CPF na tela de login
            if ($("#login-user").val()[0] != "#") {
                  changeFieldState($(this), evalCPF($(this).val()));
            }
      });
      
      $("#register-addressNum").blur(function(){  //Função que verifica se o número está preenchido corretamente
            changeFieldState($(this), checkFieldNum($(this)));
      });
      
      $("#register-zone").blur(function(){  //Função que verifica se a zona está preenchido corretamente
            changeFieldState($(this), checkFieldNum($(this)));
      });
      
      $("#register-session").blur(function(){  //Função que verifica se a seção está preenchido corretamente
            changeFieldState($(this), checkFieldNum($(this)));
      });
      
      $("#register-state").blur(function(){  //Função que verifica se o estado está preenchido corretamente
            changeFieldState($(this), checkField($(this)));
      });
      
      $("#register-neighborhood").blur(function(){  //Função que verifica se o bairro está preenchido corretamente
            changeFieldState($(this), checkField($(this)));
      });
     
      $("#register-city").blur(function(){  //Função que verifica se a cidade está preenchido corretamente
            changeFieldState($(this), checkField($(this)));
      });
      
      $("#register-cfmPassword").blur(function(){ //Função que verifica a igualdade dos dois campos de senha
           changeFieldState($(this), passwordCheck($(this)));
      });
      
       $("#recover-cpf").blur(function(){  //Função para validar o CPF na tela de recuperação de senha
            changeFieldState($(this), evalCPF($(this).val()));
       });
});


$(function()
{      
      $("#form-login").submit(function(){
           
           //Se campos vazios, para o .submit 
           if (verifyFieldsLogin() == 2){
                 
                 return false;  
           }
           
           //Se CPF invalido, para o .submit
            if ($("#login-user").val()[0] != "#") {
                  if (!evalCPF($("#login-user").val())) {
                         
                        return false;
                  }
                  
            }
            
      			
            $.ajax(
            {     
                  dataType: 'script',
                  data: $("#form-login").serialize(),
                  //data: { 'login-user': $("#login-user").val(), 'login-password': $("#login-password").val() },
                  type: 'POST',
                  url: '../controller/controller_login.php',
                  success: function(result)
                        {
                              
                        }
      
            });
            
            return false;
      });
});              
                  

$(function()
{
      $("#form-register").submit(function(){
            
            //Se campos vazios, para o .submit 
           if (verifyFieldsRegister() == 2){
                 $("#register-error").html(exclamationIcon);
                 $("#register-error").append(" Não deixe campos vazios.");
                 $("#register-error").show();
                 return false;  
           }

           //Se nome preenchido incorretamente, para o .submit
            if (checkField($("#register-name")) == 0){
                  return false;
            }

            //Se endereço preenchido incorretamente, para o .submit
            if (checkField($("#register-address")) == 0){
                  return false;
            }
            
            //Se número preenchido incorretamente, para o .submit
            if (checkFieldNum($("#register-addressNum")) == 0){
                  return false;
            }

            //Se cidade preenchido incorretamente, para o .submit
            if (checkField($("#register-city")) == 0){
                  return false;
            }
            
           //Se bairro preenchido incorretamente, para o .submit
            if (checkField($("#register-neighborhood")) == 0){
                  return false;
            }
            
            //Se zona ou sessao forem igual à 0, para o .submit
            if ($("#register-zone") < 1 || $("#register-session") < 1){
                  return false;
            }
            
            //Se estado preenchido incorretamente, para o .submit
            if (checkField($("#register-state")) == 0){
                  return false;
            }

           //Se CPF invalido, para o .submit
            if (!evalCPF($("#register-cpf").val())) {
                  return false;
            }
            
            //Se senhas desiguais, para o .submit
            if (passwordCheck() == 0){
                  return false;
            }

            $.ajax(
            {
                  dataType: 'script',
                  data: $("#form-register").serialize(),
                  type: 'POST',
                  url:'../controller/controller_register_user/controller_register_user.php',
                  success: function(result)
                  {

                  }
            });
          return false;
      });
});


$(function(){
      
      $("#submit-email").click(function(){
            
            //Se CPF invalido, para o .submit
            if (!evalCPF($("#recover-cpf").val())) {
                  return false;
            }
            
            $.ajax(
            {
                  dataType: 'script',
                  data: { 'recover-cpf': $("#recover-cpf").val()},
                  type: 'POST',
                  url:'../controller/controller_recover_password/controller_recover_password_send.php',
                  success: function(result)
                  {
                      
                  }
            });
            
            return false;
      });
      
      $("#recover-submit").click(function(){
            
            //Se código com tamanho inválido, para o .submit
            if ($("#recover-cod").val().length != 6){

                    alert("false");
                    return false;
            }
           
            $.ajax(
            {
                  dataType: 'script',
                  data: { 'recover-code': $("#recover-cod").val()},
                  type: 'POST',
                  url:'../controller/controller_recover_password/controller_recover_password_confirm.php',
                  success: function(result)
                  {
                       
                  }
            });

            return false;
            
      });
      
      $("#pwReset-submit").click(function(){

            //Se as senhas forem diferentes, para o .submit
            if($("#recover-cfmPassword").val() != $("#recover-password").val()) {
                  return false;
            }
           
            $.ajax(
            {
                  dataType: 'script',
                  data: { 'recover-password': $("#recover-password").val(), 'recover-cfmPassword': $("#recover-cfmPassword").val()},
                  type: 'POST',
                  url:'../controller/controller_recover_password/controller_recover_password_update.php',
                  success: function(result)
                  {
                     
                  }
            });
            
            return false;
            
      });
      
      
});


