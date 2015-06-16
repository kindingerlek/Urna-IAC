<?php

/*
* Título: Formatador de data
*
* Autor: Alisson
* Data de Criação: 10/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata uma data de yyyy-mm-dd para dd/mm/yyyy
*
* Entrada: Um texto. ex: 9.9.9-9/9
*
* Saída: Texto formatado. Ex.: 999999999999999
*
* Funções invocadas: Nenhuma
*
*/
function formatDate($date){

	//Retira os espaços no começo e final da string
	$formatDate = explode('-', $date);
	$formatDate = array_reverse($formatDate);
	$date = implode('/', $formatDate);
	return $date;

};

?>