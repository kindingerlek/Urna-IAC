/*
* Título: createMaskElectionNum
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
function createMaskElectionNum(field){
	var num = $(field).val();
	
	if(!(num.match(/^[0-9]+$/i))) {
			$(field).val(num.replace(/[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.']/g,''));
		}
};

/* Título: createMaskElectionName
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
function createMaskElectionName(field){
	var name = $(field).val();
	
		if(!(name.match(/^[a-zA-ZáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕç ,.'-]+$/i))) {
			$(field).val(name.replace(/[0-9]/g,''));
		}
};

/* Título: createMaskElectionDate
*
* Autor: Bruno
* Data de Criação: 07/06/2015
*
* Descrição: Cria máscara de data
*
* Entrada: Campo
*
* Funções invocadas: Nenhuma
*/
function createMaskElectionDate(field){
	
	$(field).mask("99/99/9999");
	
};

/* Título: removeMask
*
* Autor: Bruno
* Data de Criação: 07/06/2015
*
* Descrição: Remove máscaras
*
* Entrada: Campo
*
* Funções invocadas: Nenhuma
*/
function removeMask(field){
	
	$(field).unmask();
	$(field).attr('placeholder', clear);
	
};

/* Título: createMaskElectionTime
*
* Autor: Bruno
* Data de Criação: 07/06/2015
*
* Descrição: Cria máscara de hora para o campo
*
* Entrada: Campo
*
* Funções invocadas: Nenhuma
*/
function createMaskElectionTime(field){
	
	$(field).mask("99:99");
	
};

/* Título: evalTime
*
* Autor: Bruno
* Data de Criação: 07/06/2015
*
* Descrição: Valida a data no campo específico
*
* Entrada: Campo
*
* Funções invocadas: Nenhuma
*/

function evalTime(field){
	var time = $(field).val();
	
	time = time.split(":");
	
	if (time[0] < 0 || time[0] > 23){
		return 0;
	} else if (time[1] < 0 || time[1] > 59){
		return 0;
	}
	
};