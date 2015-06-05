<?php
include_once("eval_date.php");

/*
* Título: Validador de Idade de Eleitor
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se a idade do eleitor é maior ou igual a 16
*
* Entrada: Uma data. ex: "10/10/1987" 
*
* Saída: Valor númerico, 1 caso maior, 0 caso menor.
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: eval_date
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