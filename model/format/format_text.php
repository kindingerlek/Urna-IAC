<?php

/*
* Título: Formatador de Campos de Texto
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata uma string de texto
*
* Entrada: Um texto. ex:   Carlos Augusto  
*
* Saída: Texto formatado. Ex.: CARLOS AUGUSTO
*
* Funções invocadas: Nenhuma
*
*/
function formatText($text){

	//Retira os espaços no começo e final da string
	$text = trim($text);

	//Retira os caracteres [ / . - ] da string 
	$text = strtoupper($text);

	return $text;

};

echo formatText("   Carlos Augusto   ");

?>