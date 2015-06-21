<?php
 
  /*
  * Título: Formata Campos numéricos
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Formata campos numéricos retirando caracteres de máscara ( . / -)
  *
  */

function formatNumber($number){

	//Retira os espaços no começo e final da string
	$number = trim($number);

	//Retira os caracteres [ / . - ] da string 
	$number = preg_replace('/[ \/\.-]/', '', $number);

	return $number;

};

?>