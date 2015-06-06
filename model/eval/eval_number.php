<?php

/*
* Título: Validador de Campos de Números
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se uam string é composta só por números
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
function evalNumber($number){

	
	$searchInvalidChar = preg_match('/[^0-9]/', $number);

	if($searchInvalidChar){
		//string inválida
		return 0;
	}else{
		//string válida
		return 1;
	}

};

?>