<?php
  
  /*
  * Título: Valida Data
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica se uma data é válida
  *
  */

function evalDate($date){
	
    $date = explode("/", $date);
    $day = is_numeric($date[0]) ? $date[0] : 99;
    $month = is_numeric($date[1]) ? $date[1] : 99;
    $year = is_numeric($date[2]) ? $date[2] : 99;

    $isValid = checkdate($month, $day, $year) ? 1 : 0;    

    return $isValid;     

}

?>