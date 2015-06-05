/**
* Título: verifyFields
* 
* Autor: Bruno
*
* Data de Criação: 29/05/2015 
* Última modificação:
* Modificado por:
* 
* Descrição: (Verifica se os campos estão nulos)
*
**/
 

//Esta tag é um ícone de exclamação -> "!"
var exclamationIcon = "<span class=\"glyphicon glyphicon-exclamation-sign\"aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>"; 

function verifyFields(){      
            
            var user = $("#login-user").val();
            var password = $("#login-password").val();
            
            if(user == "" || user == "___.___.___-__"){
                  $("#login-error").html(exclamationIcon);
                  $("#login-error").append(" Não deixe o campo em branco.");
                  $("#login-error").show();
                  return 0;
            } else if(password == ""){
                  $("#login-error").html(exclamationIcon);  
                  $("#login-error").append(" Não deixe o campo em branco.");
                  $("#login-error").show();
                  return 0;
          }    
};

/**
* Título: chooseMask
* 
* Autor: Bruno
*
* Data de Criação: 29/05/2015 
* Última modificação:
* Modificado por:
* 
* Descrição: (Escolhe a máscara que será selecionada)
*
**/                
                  
function chooseMask(){
            
      jQuery(function($){
            
            //Define um padrão para máscara      
            $.mask.definitions['~']='[#0-9]';
            $.mask.definitions['N']='[A-Za-z0-9]';
                        
            var user = $("#login-user").val();

            $("#login-user").bind('keyup',function(){
            
                  user = $("#login-user").val();
                  
                  if(user == "" || user == "___.___.___-__"){
                        
                        $("#login-user").mask("~", {placeholder: ""});
                        
                        $("#login-user").one("keypress",function(e){
                              
                              //Cria máscara para CPF
                              if(e.which != 35) {
                                    $("#login-user").mask("999.999.999-99");
                                    $("#login-user").val() = user;
                                    
                              } else if(e.which == 35) { //Cria máscara para Admin
                                    $("#login-user").mask("~NNNNNNNN");
                                    $("#login-user").val() = user;
                              }                 
                        });
                  }
            });
            
            //Cria máscara para CPF
            $("#login-user").one("keypress",function(e){
                  if(e.which != 35) {
                        $("#login-user").mask("999.999.999-99");
                  } else { //Cria máscara para Admin
                        $("#login-user").mask("~NNNNNNNN");
                        $("#login-user") = user;
                  }                 
            });    
      });      
}            
         


/*
* Título: Validador de CPF
*
* Autor: Carlos
* Data de Criação: 27/05/2015
*
* Modificado por: Bruno
* Data de Modificação: 04/06/2015
* 
* Descrição: Verifica se um CPF é válido
*
* Entrada: Um CPF, uma sequencia de 11 números, ex:99999999999
*
* Saída: Valor númerico, 1 caso CPF válido, 0 caso CPF inválido
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: Nenhuma
*
*/
function evalCPF(CPF){
      
	//Retira os caracteres não numéricos
      CPF = CPF.replace(/[.-]/g,'');
      
	//Verifica se a string possui 11 caracteres
	if (CPF.length != 11){
            $("#login-error").html(exclamationIcon);
            $("#login-error").append(" CPF inválido");
            $("#login-error").show();
            $("#register-error").html(exclamationIcon);
            $("#register-error").append(" CPF inválido");
            $("#register-error").show();
		return false;
            
	//Verifica se alguma sequencia invalida foi digitada	
	} else if (	CPF == '00000000000' || 
				CPF == '11111111111' || 
				CPF == '22222222222' || 
				CPF == '33333333333' || 
				CPF == '44444444444' || 
				CPF == '55555555555' || 
				CPF == '66666666666' || 
				CPF == '77777777777' || 
				CPF == '88888888888' || 
				CPF == '99999999999') {
            $("#login-error").html(exclamationIcon);
            $("#login-error").append(" CPF invalido");
            $("#login-error").show();
            $("#register-error").html(exclamationIcon);
            $("#register-error").append(" CPF inválido");
            $("#register-error").show();
            return false;
        
     //Verifica se o CPF é válido
     } else {
		for (total = 9; total < 11; total++) {   
	        add = 0;
	        for (digit = 0; digit < total; digit++) {
	            add += CPF[digit] * ((total + 1) - digit);
	        }
	        add = ((10 * add) % 11) % 10;
	        if (CPF[digit] != add) {
                  $("#login-error").html(exclamationIcon);
                  $("#login-error").append(" CPF invalido");
                  $("#login-error").show();
                  $("#register-error").html(exclamationIcon);
                  $("#register-error").append(" CPF inválido");
                  $("#register-error").show();
                  return false;
	        }
	    }
          $("#register-error").hide();
          $("#login-error").hide();
	    return true;
    }
};

/*
* Título: Checar nome
*
* Autor: Bruno
* Data de Criação: 04/06/2015
*
* Descrição: Restringe o nome a letras
*
* Funções invocadas: Nenhuma
*
*/

function checkName(){
      
      $("#register-name").blur(function(){
            
            user = $("#register-name").val();
           
            
            if(!(user.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕ ,.'-]+$/i))){
                  
                  $("#register-error").html(exclamationIcon);
                  $("#register-error").append(" Nome só pode conter letras");
                  $("#register-error").show();
            }
      });
      
}


/*
* Título: Criar máscaras
*
* Autor: Bruno
* Data de Criação: 04/06/2015
*
* Descrição: Cria todas as máscaras que não precisam de validação
*
* Funções invocadas: Nenhuma
*
*/

function createMasks(){
      jQuery(function($){
       $("#register-cpf").mask("999.999.999-99");
      });
      
jQuery(function($){
       $("#register-zone").mask("9999", {placeholder: ""});
      });
      
jQuery(function($){
       $("#register-session").mask("9999", {placeholder: ""});
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
};



/*
* Título: Preenchimento de endereço automático
*
* Autor: http://www.oficinadanet.com.br/
*
* Modificado por: Bruno
* Data de Modificação: 05/06/2015
* 
* Descrição: Preenche os campos referente ao endereço a partir do CEP informado
*
* Entrada: Um CEP
*
* Saída: Campos preenchidos, ou um erro.
*
* Funções invocadas: Nenhuma
*
*/
function getAdress() {
      
      var webService = "http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=";
      var codeZip = $("#register-codeZip").val();
      
      if($.trim(codeZip) != ""){
            $.getScript(webService + codeZip, function(){
                  if (resultadoCEP["resultado"]) {
                        $("#register-adress").val(unescape(resultadoCEP["tipo_logradouro"]) + " " + unescape(resultadoCEP["logradouro"]));
                        $("#register-neighborhood").val(unescape(resultadoCEP["bairro"]));
                        $("#register-city").val(unescape(resultadoCEP["cidade"]));
                        $("#register-state").val(unescape(resultadoCEP["uf"]));
                        $("#register-error").hide();
                  }
                  if (resultadoCEP["resultado"] == 0) {
                        $("#register-error").html(exclamationIcon);
                        $("#register-error").append(" CEP invalido");
                        $("#register-error").show();
                  } 
            });
      }
};


/*
* Título: Validador de Títuo de Eleitor
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por: Bruno
* Data de Modificação: 05/06/2015
* 
* Descrição: Verifica se uma entrada corresponde a um título de eleitor válido
*
* Entrada: Um texto. ex: 739428739 
*
* Saída: Valor númerico, 1 caso campo válido, 0 caso campo inválido
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: Nenhuma
*
*/


function evalVotingCard(votingCard) {
      
      votingCard=votingCard.replace(/[^0-9]/g,'');
      
      //Preenchendo a string com 0s à esquerda para completar 12 digitos 
      votingCard = ("000000000000"+votingCard).slice(-12,-1)+("0"+votingCard).slice(-1);
      
      //Identificando os dígitos referentes à unidade federativa
      state = votingCard.slice(8, 10);
      state = parseInt(state, 10);
      
      if (votingCard.length != 12 || state < 1 || state > 28) {
            $("#register-error").html(exclamationIcon);
            $("#register-error").append(" Título invalido");
            $("#register-error").show();
            alert("1");
            return false;
      
      } else {
      
            //Algorítmo para verificação de título eleitoral
            add = 0;
            
            for (i = 0; i < 8; i++) {
                  add += votingCard[i] * (9 - i);
            }
            
            add %= 11;
            
            if (add < 2) {
                  if (state < 3) {
                        add = 1 - add;
                  } else {
                        add = 0;
                  }
            } else {
                  add = 11 - add;
            }
            
            if (votingCard[10] != add) {
                  $("#register-error").html(exclamationIcon);
                  $("#register-error").append(" Título invalido");
                  $("#register-error").show();
                  alert("2");
                  return false;
            }
            
            add *= 2;
            
            for (i = 8; i < 10; i++) {
                  add += votingCard[i] * (12 - i);
            }
            
            add %= 11;
            
            if (add < 2) {
                  if (state < 3) {
                        add = 1 - add;
                  } else {
                        add = 0;
                  }
            } else {
                  add = 11 - add;
            }
            
            if (votingCard[11] != add) {
                  $("#register-error").html(exclamationIcon);
                  $("#register-error").append(" Título invalido");
                  $("#register-error").show();
                  alert("3");
                  return false;
            }
            alert("4");
            $("#register-error").hide();
            return true;
      }
};
