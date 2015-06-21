/* Título: createMaskCandidateName
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
function createMaskCandidateName(field){
	var name = $(field).val();
	
		if(!(name.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.'-]+$/i))) {
			$(field).val(name.replace(/[0-9]/g,''));
		}
};

/*
* Título: createMaskCandidateNum
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
function createMaskCandidateNum(field){
	var num = $(field).val();
	
	if(!(num.match(/^[0-9]+$/i))) {
			$(field).val(num.replace(/[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.']/g,''));
		}
};

/*
* Título: fillInput
*
* Autor: Bruno
* Data de Criação: 15/06/2015
*
* Descrição: Valida os campos com números
*
* Entrada: O que vai ser preenchido, campo a ser preenchido
*
* Funções invocadas: Nenhuma
*
*/
function fillInput(content,field){
	
	$(field).val(content);
	
}

/*
* Título: verifyOffice
*
* Autor: Bruno
* Data de Criação: 13/06/2015
*
* Entrada: Combobox que contém os cargos
*
* Descrição: Verifica o cargo do candidado, e retorna o tamanho máx de seu número 
*
* Funções invocadas: Nenhuma
*
*/
function verifyOffice(office) {
	if (office == "PRESIDENTE" || office == "PREFEITO" || office == "GOVERNADOR") {
		return 2;
	} else if(office == "VEREADOR" || office == "DEPUTADO_ESTADUAL") {
		return 5;
	} else if(office == "DEPUTADO_FEDERAL") {
		return 4;
	} else if(office == "SENADOR") {
		return 3;
	}
}