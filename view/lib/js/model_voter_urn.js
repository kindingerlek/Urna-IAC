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
function addNum(num) {
	if($.trim($("#urn-number").text()).length < 5){
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
}