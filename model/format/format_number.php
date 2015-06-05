<?php

/*
* Título: Formatador de Campos Numéricos
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata uma string numérica
*
* Entrada: Um texto. ex: 9.9.9-9/9
*
* Saída: Texto formatado. Ex.: 999999999999999
*
* Funções invocadas: Nenhuma
*
*/
function formatNumber($number){

	//Retira os espaços no começo e final da string
	$number = trim($number);

	//Retira os caracteres [ / . - ] da string 
	$number = preg_replace('/[\/\.-]/', '', $number);

	return $number;

};

?>