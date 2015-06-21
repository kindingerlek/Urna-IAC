<?php
 
  /*
  * Título: Valida campo de texto
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica se campo de texto está preenchido e não contém caracterres inválidos
  *
  */

function evalText($text){

	if(preg_match('/_/', $text)){
		//echo(preg_replace('/_/', ' ', $text));
		$text = preg_replace('/_/', ' ', $text);
		//echo($text);
	}

	$searchInvalidChar = preg_match('/[^ A-Za-z]/', $text);
	
	//echo($searchInvalidChar);

	if($searchInvalidChar){
		//string inválida
		return 0;
	}else{
		//string válida
		return 1;
	}
}
?>