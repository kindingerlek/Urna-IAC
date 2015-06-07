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
		
	if (valCombo == "cpf") {
		var cpf = $(field).val();

		if(!(cpf.match(/^[0-9]+$/i))) {
			$(field).val(cpf.replace(/[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.']/g,''));
		}
	}
};


// * Título: createMaskVoterName
// *
// * Autor: Bruno
// * Data de Criação: 06/06/2015
// *
// * Descrição: Valida o nome
// *
// * Entrada: Valor da combobox
// *
// * Funções invocadas: Nenhuma
// *

function createMaskVoterName(valCombo, field){
	var name = $(field).val();
	
	if (valCombo == "nome") {
		if(!(name.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.'-]+$/i))) {
			$(field).val(name.replace(/[0-9]/g,''));
		}
	}
}

/*
* Título: createMaskVoterVotingCard
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
function createMaskVoterVotingCard(valCombo, field){
		
	if (valCombo == "tituloEleitor") {
		var voltingCard = $(field).val();

		if(!(voltingCard.match(/^[0-9]+$/i))) {
			$(field).val(voltingCard.replace(/[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.']/g,''));
		}
	}	
}