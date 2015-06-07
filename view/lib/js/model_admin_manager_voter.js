/*
* Título: identifyCombo
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Identifica a opção atualmente selecionada no combobox
*
* Funções invocadas: Nenhuma
*
*/
function indentifyCombo(combo){
	return combo.val();
};

/*
* Título: createMaskVoterCPF
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Cria máscara de CPF
*
* Entrada: Valor da combobox
*
* Funções invocadas: Nenhuma
*
*/
function createMaskVoterCPF(valCombo, field){
		
	if (valCombo == 3) {
   		$(field).mask("999.999.999-99");
	}
		
	
};

/*
* Título: createMaskVoterName
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Valida o nome
*
* Entrada: Valor da combobox
*
* Funções invocadas: Nenhuma
*
*/
function createMaskVoterName(valCombo){
	var name = $("#search-input").val();
	
	if (valCombo == 1) {
		if(!(name.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.'-]+$/i))) {
			if(name == ""){
				alert("Campo vazio");
			} else {
				alert("Caracteres inválidos");
			}
		}
	}
}

/*
* Título: removeMask
*
* Autor: Bruno
* Data de Criação: 06/06/2015
*
* Descrição: Remove máscara de um campo
*
* Entrada: Campo que será afetado
*
* Funções invocadas: Nenhuma
*
*/
function removeMask(field){
	$(field).unmask();
	$(field).attr('placeholder',clear);
}