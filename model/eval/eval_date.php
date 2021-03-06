<?php
/*
* Título: Validador de Títuo de Eleitor
*
* Autor: Carlos
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se uma entrada corresponde a um título de eleitor válido
*
* Entrada: Um texto. ex: 739428739 
*
* Saída: Valor númerico, 1 caso campo válido, 0 caso campo inválido
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: Nenhuma
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