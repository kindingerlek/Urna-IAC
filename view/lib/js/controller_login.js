/* global $ */
/* global jQuery */
$(function(){
      chooseMask();  //Função que define a máscara do campo
      checkName();  //Função que checa se o nome só tem letras
      createMasks(); //Função que cria todas as máscaras
      $("#register-codeZip").blur(function(){  //Função para preenchimento do endereço a partir do CEP
            getAdress();
      });
      $("#register-votingCard").blur(function(){  //Função para validar título de eleitor
            evalVotingCard($("#register-votingCard").val());
      });
      $("#register-cpf").blur(function(){
            evalCPF($("#register-cpf").val());
      });
});


$(function()
{      
      $("#form-login").submit(function(){
           
           //Se campos vazios, para o .submit 
           if (verifyFields() == 0){
                 
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
                  
//
//$(function()
//{
//       $("#form-register").submit(function(){
//
//            $.ajax(
//            {
//                  dataType: 'script',
//                  data: $("#form-register").serialize(),
//                  type: 'POST',
//                  url:'../controller/controller_register_new_user.php',
//                  success: function(result)
//                  {
//                
//                  }
//            });
//            return false;
//      });
//});


