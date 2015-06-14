/*
* Título: addNum
*
* Autor: Bruno
* Data de Criação: 11/06/2015
*
* Descrição: Quando um número é clicado, ele preenche 
*
* Funções invocadas: Nenhuma
*
*/
function addNum(num, verifyOffice) {
	if($.trim($("#urn-number").text()).length < verifyOffice){
		$("#urn-number").append(num);
	}
};

/*
* Título: clearUrn
*
* Autor: Bruno
* Data de Criação: 11/06/2015
*
* Descrição: Urna é limpa
*
* Funções invocadas: Nenhuma
*
*/
function clearUrn() {
	$("#urn-number").html("");
	$("#urn-candidateName").html("");
	$("#urn-candidateParty").html("");
	$("#urn-candidatePhoto").css('background-image', "none");
}

/*
* Título: verifyOffice
*
* Autor: Bruno
* Data de Criação: 13/06/2015
*
* Descrição: Quando um número é clicado, ele preenche 
*
* Funções invocadas: Nenhuma
*
*/
function verifyOffice(office) {
	if (office == "PRESIDENTE" || office == "PREFEITO" || office == "GOVERNADOR") {
		return 2;
	} else if(office == "VEREADOR" || office == "DEPUTADO ESTADUAL") {
		return 5;
	} else if(office == "DEPUTADO FEDERAL") {
		return 4;
	} else if(office == "SENADOR") {
		return 3;
	}
}