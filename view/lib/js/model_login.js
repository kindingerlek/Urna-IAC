/**
* Título: verifyFieldsLogin
* 
* Autor: Bruno
*
* Data de Criação: 29/05/2015 
* Última modificação:
* Modificado por:
* 
* Descrição: (Verifica se os campos da página de login estão nulos)
*
**/
 

//Esta tag é um ícone de exclamação -> "!"
var exclamationIcon = "<span class=\"glyphicon glyphicon-exclamation-sign\"aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>"; 

function verifyFieldsLogin(){      
            
            var user = $("#login-user").val();
            var password = $("#login-password").val();
                       
            if(user == "" || user == "___.___.___-__"){
                  return 2;
            } else if(password == ""){
                  return 2;
          }
};

/**
* Título: verifyFieldsRegister
* 
* Autor: Bruno
*
* Data de Criação: 06/06/2015 
* Última modificação:
* Modificado por:
* 
* Descrição: (Verifica se os campos da página de registro estão nulos)
*
**/
function verifyFieldsRegister(){      
      
      var array = 
      [
            $("#register-votingCard").val(),
            $("#register-zone").val(),
            $("#register-session").val(),
            $("#register-cpf").val(),
            $("#register-birthday").val(),
            $("#register-zipCode").val(),
            $("#register-address").val(),
            $("#register-addressNum").val(),
            $("#register-neighborhood").val(),
            $("#register-city").val(),
            $("#register-state").val(),
            $("#register-password").val(),
            $("#register-cfmPassword").val()
      ];
      
      for(var i=0; i < array.length; i++){
            if(array[i] == ""){
                  return 2;
            }
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
            //$.mask.definitions['#']='[#\b]';

            $("#login-user").on('keyup',function(){
            
                  var user = $("#login-user").val();
                  var firstChar = user[0];
                  
                  if(firstChar == "" || firstChar == "_"){
          
                        $("#login-user").mask("~", {placeholder: ""});
                       
                        //Cria máscara para CPF
                        $("#login-user").one("keypress",function(e){
                              if(e.which != 35) {
                                    $("#login-user").mask("999.999.999-99");
                              } else { //Cria máscara para Admin
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
                        $("#login-user").val() = user;
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
		return 0;
            
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
            return 0;
        
     //Verifica se o CPF é válido
     } else {
		for (total = 9; total < 11; total++) {   
	        add = 0;
	        for (digit = 0; digit < total; digit++) {
	            add += CPF[digit] * ((total + 1) - digit);
	        }
	        add = ((10 * add) % 11) % 10;
	        if (CPF[digit] != add) {
                  return 0;
	        }
	    }
	    return 1;
    }
};

/*
* Título: checkField
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Checa se o campo do tipo nome está preenchidos corretamente
*
* Funções invocadas: Nenhuma
*
*/

function checkField(field){
      
      var name = field.val();

      if(name == ''){

            return 2;
      } else if(!(name.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕ ,.'-]+$/i))) {
            return 0;
      } else {
            return 1;
      }
};

/*
* Título: checkFieldNum
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Checa se um campo de número está preenchidos corretamente
*
* Funções invocadas: Nenhuma
*
*/

function checkFieldNum(field){
      
      var num = field.val();
      
      if(num == ''){
            return 2;
      } else if(!(num.match(/^[0-9]+$/i))) {
            return 0;
      } else {
            return 1;
      }
};

/*
* Título: changeFieldState
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Muda o estado do campo
*
* Entrada: Um campo à ser modificado, estado a ser analisado
*
* Funções invocadas: Nenhuma
*
*/
function changeFieldState(field, state){
      var array = ['has-error','has-success','has-warning'];
      var icons = ['glyphicon-remove','glyphicon-ok','glyphicon-warning-sign'];
      
      field = field.parent();
            
      for(var i=0; i<array.length; i++){
            if(i != state) {
                  field.children("span").removeClass(icons[i]);
                  field.removeClass(array[i]);
            } else {
                  field.children("span").addClass(icons[i]);
                  field.addClass(array[i]);
            }
      }
      
};

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
      
      
      $("#register-zone").blur(function(){
            var registerZone = $("#register-zone").val();
            
            registerZone="000"+registerZone.replace(/[^0-9]/g,'');
            
            //Preenchendo a string com 0s à esquerda para completar 3 digitos 
            registerZone = registerZone.slice(-3,-1)+(registerZone).slice(-1);

            $("#register-zone").val(registerZone);
      });
      
      $("#register-session").blur(function(){
            var registerSession = $("#register-session").val();
            
            registerSession="0000"+registerSession.replace(/[^0-9]/g,'');
            
            //Preenchendo a string com 0s à esquerda para completar 4 digitos 
            registerSession = registerSession.slice(-4,-1)+(registerSession).slice(-1);

            $("#register-session").val(registerSession);
      });
      
      $("#register-votingCard").blur(function(){
      
            var votingCard = $("#register-votingCard").val();
            
            votingCard=votingCard.replace(/[^0-9]/g,'');
            
            //Preenchendo a string com 0s à esquerda para completar 12 digitos 
            votingCard = ("000000000000"+votingCard).slice(-12,-1)+("0"+votingCard).slice(-1);
            
            $("#register-votingCard").val(votingCard);

      });
      
jQuery(function($){
       $("#recover-cpf").mask("999.999.999-99");
      });
      
jQuery(function($){
       $("#register-zipCode").mask("99999-999");
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
function getAddress() {
      
      var webService = "http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=";
      var zipCode = $("#register-zipCode").val();
      
      if($.trim(zipCode) != ""){
            $.getScript(webService + zipCode, function(){
                  if (resultadoCEP["resultado"]) {
                        $("#register-address").val(unescape(resultadoCEP["tipo_logradouro"]) + " " + unescape(resultadoCEP["logradouro"]));
                        $("#register-neighborhood").val(unescape(resultadoCEP["bairro"]));
                        $("#register-city").val(unescape(resultadoCEP["cidade"]));
                        $("#register-state").val(unescape(resultadoCEP["uf"]));
                        return 1;
                  }
                  if (resultadoCEP["resultado"] == 0) {
                        return 0;
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
            return 0;
      
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
                  return 0;
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
                  return 0;
            }
            
            $("#register-error").hide();
            return 1;
      }
};


/*
* Título: Compara senha
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Compara os campos senha e confirmar senha
*
* Funções invocadas: Nenhuma
*
*/

function passwordCheck(){
      
      var password = $("#register-password").val();
      var cfmPassword = $("#register-cfmPassword").val();
      
      if(password != cfmPassword) {
            return 0;
      } else {
            return 1;
      }
};
