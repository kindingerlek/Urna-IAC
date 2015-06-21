<?php
 
  /*
  * Título: Formata data
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Formata data, transformando uma string no formato yyyy-mm-dd para dd/mm/yyyyy
  */

function formatDate($date){

	//Retira os espaços no começo e final da string
	$formatDate = explode('-', $date);
	$formatDate = array_reverse($formatDate);
	$date = implode('/', $formatDate);
	return $date;

};

?>