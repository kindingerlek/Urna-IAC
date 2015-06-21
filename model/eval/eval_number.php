<?php
  
  /*
  * Título: Valida campo númerico
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica se campo númerico está preenchido e não contém caracterres inválidos
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