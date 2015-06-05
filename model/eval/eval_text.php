<?php

/*
* Título: Validador de Campos de Texto
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se uma string é composta apenas por letras e espaços.
*
* Entrada: Um texto. ex: Carlos Augusto Grispan 
*
* Saída: Valor númerico, 1 caso campo válido, 0 caso campo inválido
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: Nenhuma
*
*/
function evalText($text){

	$searchInvalidChar = preg_match('/[^ A-Za-z/']/', $text);

	if($searchInvalidChar){
		//string inválida
		return 0;
	}else{
		//string válida
		return 1;
	}

?>