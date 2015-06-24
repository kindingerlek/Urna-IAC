<?php
 
  /*
  * Título: Valida hora
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica se campo de hora é uma hora válida
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