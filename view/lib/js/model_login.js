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
            
            var user = $("#login-user").val();
            
            if(user == "" || user == "___.___.___-__"){
                  alert("Não deixe campos nulos.");
            }
                        
      });
      
      $("#login-password").blur(function(){
            
            var password = $("#login-password").val();
            
            if(password == ""){
                  alert("Não deixe campos nulos.");
            }
            
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
* Descrição: (Escolhe a máscara que será selecionada)
*
**/
function chooseMask(){
      
      jQuery(function($){
            
            //Define um padrão para máscara      
            $.mask.definitions['~']='[#0-9]';
            $.mask.definitions['N']='[Az0-9]';
            
            //Cria uma máscara para escolher o modo de entrada
            var user = $("#login-user").val();
            
            if(user == ""){
                  $("#login-user").mask("~", {placeholder: ""});
            };
            
            //Cria máscara para CPF
            $("#login-user").one("keydown",function(e){
                  if(e.which != 51) {
                        $("#login-user").mask("999.999.999-99");
                  }
            });
            
            //Cria máscara para Admin
            $("#login-user").one("keyup",function(e){
                  if(e.which == 51) {
                        $("#login-user").mask("~NNNNNN", {placeholder: ""});
                  }
            });
              
      });
};


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
	        }
	    }
	    return true;
    }
};

