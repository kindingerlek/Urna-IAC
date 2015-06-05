/* global $ */
/* global jQuery */
$(function(){
      chooseMask();  //Função que define a máscara do campo
      checkName();  //Função que checa se o nome só tem letras
});


$(function()
{      
      $("#form-login").submit(function(){
           
           //Se campos vazios, para o .submit 
           if (verifyFields() == 0){
                 return false;  
           }
           
           //Se CPF invalido, para o .submit
            if (!evalCPF($("#login-user").val())) {
                  return false;
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
                             // alert('oi1');
                        }
      
            });
            return false;
      });
});              
                  
jQuery(function($){
       $("#register-cpf").mask("999.999.999-99");
      });
      
jQuery(function($){
       $("#recover-cpf").mask("999.999.999-99");
      });
      
jQuery(function($){
       $("#register-codeZip").mask("99999-999");
      });
   
jQuery(function($){
       $("#register-birthday").mask("99/99/9999");
      });
      


