<?php
$root = 'c:/wamp/www/Urna-IAC/';
require_once($root."model/eval/eval_number.php");
require_once($root."model/format/format_number.php");
/*
* Título: Verifica Numero 
*
* Autor: Alisson
* Data de Criação: 05/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata e verifica um campo do tipo number
*   
*/
function validateNumber($number)
{

$number = formatNumber($number); //retira mascaras

if(evalNumber($number) <= 0)
	return 0; // retorna 0 se numero invalido
return 1;    //retorna 1 se número é válido
}
?>