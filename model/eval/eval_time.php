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
function evalTime($time){

    $time = explode(":", $time);

    $hour = is_numeric($time[0]) ? $time[0] : 99;
    $minute = is_numeric($time[1]) ? $time[1] : 99;

    $hourIsValid = $hour<24 && $hour>=0 ? 1 : 0;
    $minuteIsValid = $minute<60 && $minute>=0 ? 1 : 0;

    $isValid = $hourIsValid && $minuteIsValid ? 1 : 0;

    return $isValid;     
}

?>