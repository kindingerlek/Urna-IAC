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
function verifyFields(){      
            
            var user = $("#login-user").val();
            var password = $("#login-password").val();
            
            if(user == "" || user == "___.___.___-__"){
                  $("#login-error").html("<span class=\"glyphicon glyphicon-exclamation-sign\""+"aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>");
                  $("#login-error").append("Não deixe o campo em branco.");
                  $("#login-error").show();
                  return 0;
            } else if(password == ""){
                  $("#login-error").html("<span class=\"glyphicon glyphicon-exclamation-sign\""+"aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>");
                  $("#login-error").append("Não deixe o campo em branco.");
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
            $.mask.definitions['N']='[AZaz0-9]';
                        
            var user = $("#login-user").val();
            
            
            
      }
            
//            $("#login-user").bind('keypress',function(){
//                       
//                  user = $("#login-user").val();
//                  
//                  if(user == "" || user == "___.___.___-__"){
//                        
//                        $("#login-user").mask("~", {placeholder: ""});
//                        
//                        $("#login-user").one("keypress",function(e){
//                              
//                              if(e.which != 35) {
//                                    $("#login-user").mask("999.999.999-99");
//                                    
//                              } else if(e.which == 35) { //Cria máscara para Admin
//                                    $("#login-user").mask("~NNNNNN", {placeholder: ""});
//                                    $("#login-user").val() = user;
//                              }                 
//                        });
//                  }
//            });
//            
//            $("#login-user").one("keypress",function(e){
//                  if(e.which != 35) {
//                        $("#login-user").mask("999.999.999-99");
//                  } else { //Cria máscara para Admin
//                        $("#login-user").mask("~NNNNNN", {placeholder: ""});
//                        $("#login-user") = user;
//                  }                 
//            });
//            
//            if(user[0]== "#")
//            {
//                  $("#login-user").mask("#NNNNNN", {placeholder: ""});
//                  $("#login-user") = user;
//            }
//            else
//            {
//                  $("#login-user").mask("999.999.999-99");
//                  $("#login-user") = user;
//            }
                        
      });      
}            
            
            
            
//            //Cria uma máscara para escolher o modo de entrada
//            var user = $("#login-user").val();
//
//            if(user == ""){
//                  $("#login-user").mask("~", {placeholder: ""});
//            }
//            
//            $("login-user").keyup(function(){
//                   if(user == ""){
//                        $("#login-user").mask("~", {placeholder: ""});
//                   }      
//            })
//            
//            //Cria máscara para CPF
//            $("#login-user").one("keypress",function(e){
//                  if(e.which != 35) {
//                        $("#login-user").mask("999.999.999-99");
//                  } else { //Cria máscara para Admin
//                        $("#login-user").mask("#NNNNNN", {placeholder: ""});
//                  }                 
//            });            
//      });
//};


/*
* Título: Validador de CPF
*
* Autor: Carlos
* Data de Criação: 27/05/2015
*
* Modificado por: Bruno
* Data de Modificação: 29/05/2015
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
	CPF = CPF.replace('/[^0-9]/', '');

	//Verifica se a string possui 11 caracteres
	if (CPF.length != 11){
		return false;
            alert("laga");
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
        return false;
        alert("galse");
     //Verifica se o CPF é válido
     } else {
		for (total = 9; total < 11; total++) {   
	        $add = 0;
	        for (digit = 0; digit < total; digit++) {
	            add += CPF[$digit] * ((total + 1) - digit);
	        }
	        add = ((10 * add) % 11) % 10;
	        if (CPF[digit] != add) {
	            return false;
                  alert("false");
	        }
	    }
//	    return true;
    }
};


