<?php

 
  /*
  * Título: Formata Campos Títul texto
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Formata campos de texto retirando os espaços nos extremos e colocando em UpperCase
  *
  */

function formatText($text){

	//Retira os espaços no começo e final da string
	$text = trim($text);

	//Upper Case  
	$text = strtoupper($text);

	return $text;

};

?>