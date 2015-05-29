/* global jQuery */
 $(function(){
      $("#login-iptLogin").blur(function(){
            if($("#login-iptLogin").val() == ""){
                  alert("Não deixe o campo nulo.");
            };
            if ($("#login-iptLogin").val() == "___.___.___-__") {
                  alert("cpf");
              };
            if ($("login-iptLogin").val() == "") {
                  alert("entrou");
            };
      });
      
});


jQuery(function($){
        $.mask.definitions['~']='[#0-9]';
        if($("#login-iptLogin").val() == ""){
            $("#login-iptLogin").mask("~", {placeholder: ""});
        };
        $("#login-iptLogin").one("keydown",function(e){
              if(e.which != 51) {
                   $("#login-iptLogin").mask("999.999.999-99", 
                                             {completed:function(){
                                                   alert(this.val());
                                             }});      
              };

        });
        $("#login-iptLogin").keydown(function(e){
              if(e.which == 51) {
                  $("#login-iptLogin").mask("~999999", {placeholder: ""});
              }
             
           /*  if ($("#login-iptLogin").length() == 0) {
                   alert("ta");
                  $("#login-iptLogin").mask("999.999.999-99");  
             }*/
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
      


