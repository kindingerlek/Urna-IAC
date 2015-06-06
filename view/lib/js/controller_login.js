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
           if (verifyFieldsLogin() == 0){
                 
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
            
            //Se estado preenchido incorretamente, para o .submit
            if (checkField($("#register-state")) == 0){
                  return false;
            }

           //Se CPF invalido, para o .submit
            if (!evalCPF($("#register-cpf").val())) {
                  
                  return false;
            }

            if (passwordCheck() == 0){
                  return false;
            }
            

            alert('1');
            $.ajax(
            {
                  dataType: 'script',
                  data: $("#form-register").serialize(),
                  type: 'POST',
                  url:'../controller/controller_register_user/controller_register_user.php',
                  success: function(result)
                  {
                        alert("2");
                  }
            });
              alert('3');
          return false;
      });
});


