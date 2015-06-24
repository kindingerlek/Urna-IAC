<?php
$root = 'c:/wamp/www/Urna-IAC/';
require_once($root."model/eval/eval_text.php");

/*
* Título: Verifica Texto
*
* Autor: Alisson
* Data de Criação: 05/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata e verifica um campo do tipo texto 
*   
*/

function validateText($text)
{
$text = formatText($text); //retira mascaras

if(evalText($text) <= 0)
	return 0; // retorna 0 se texto invalido
return 1;    //retorna 1 se texto é válido
}
?>