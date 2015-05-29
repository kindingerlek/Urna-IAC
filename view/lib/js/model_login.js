/**
* Título: verifyFields
* 
* Autor: Bruno Henrique Pereira Braga
*
* Data de Criação: 29/05/2015 
* Última modificação:
* Modificado por:
* 
* Descrição: (Verifica se os campos estão nulos)
*
**/
function verifyFields(){
      $("#login-user").blur(function(){
            if($("#login-user").val() == ""){
                  alert("Não deixe o campo nulo.");
            };
            if ($("#login-user").val() == "___.___.___-__") {
                  alert("cpf");
            };
            
      });
      $("#login-iptPassword").blur(function(){
            if($("#login-iptPassword").val() == ""){
                  alert("Senha Nula");
            };
      });
      
};

/**
* Título: chooseMask
* 
* Autor: Bruno Henrique Pereira Braga
*
* Data de Criação: 29/05/2015 
* Última modificação:
* Modificado por:
* 
* Descrição: (Verifica se os campos estão nulos)
*
**/
function chooseMask(){
jQuery(function($){
      //Define um padrão para máscara      
      $.mask.definitions['~']='[#0-9]';
      //Cria uma máscara para escolher o modo de entrada
      if($("#login-user").val() == ""){
            $("#login-user").mask("~", {placeholder: ""});
      };
      //Cria máscara para CPF
      $("#login-user").one("keydown",function(e){
            if(e.which != 51) {
                  $("#login-user").mask("999.999.999-99");
            }
      });
      //Cria máscara para Admin
      $("#login-user").keydown(function(e){
            if(e.which == 51) {
                  $("#login-user").mask("~999999", {placeholder: ""});
            }
      });
        
});
};