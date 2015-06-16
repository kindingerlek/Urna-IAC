/* Título: createMaskPartyName
*
* Autor: Bruno
* Data de Criação: 07/06/2015
*
* Descrição: Valida o nome
*
* Entrada: Campo
*
* Funções invocadas: Nenhuma
*/
function createMaskPartyName(field){
	var name = $(field).val();
	
		if(!(name.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.'-]+$/i))) {
			$(field).val(name.replace(/[0-9]/g,''));
		}
};


/*
* Título: createMaskPartyNum
*
* Autor: Bruno
* Data de Criação: 07/06/2015
*
* Descrição: Valida os campos com números
*
* Entrada: Campo
*
* Funções invocadas: Nenhuma
*
*/
function createMaskPartyNum(field){
	var num = $(field).val();
	
	if(!(num.match(/^[0-9]+$/i))) {
			$(field).val(num.replace(/[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.']/g,''));
		}
};