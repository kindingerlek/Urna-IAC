<?php
include_once("eval_date.php");
  /*
  * Título: Valida idade
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição:  Verifica se a idade passada é maior que 16 anos
  *
  */
function evalAge($date){

    if(evalDate($date)){

    	$date=explode("/", $date);

    	$day = $date[0];
	    $month = $date[1];
	    $year = $date[2];

	    $date = $year."-".$month."-".$day;

	    //Verificando a idade
        $isAboveAge = date_diff(date_create($date), date_create('today'))->y < 16 ? 0 : 1;

        return $isAboveAge;

    } 
    
}

?>