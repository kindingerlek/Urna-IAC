<?php
$root = 'c:/wamp/www/Urna-IAC/';
require_once($root."model/eval/eval_cpf.php");
require_once($root."model/eval/eval_number.php");
require_once($root."model/format/format_number.php");

/*
* Título: Valida CPF
*
* Autor: Alisson
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe um cpf verifica se é válido e envia 1 se for e -1 se estiver invalido
*
*   
*/
function validateCPF($cpf)
{	
	$cpf = formatNumber($cpf); //Retira máscara do CPF    
	
	$numberIsValid = evalNumber($cpf); //Verifica se o número é val.
	
	if($numberIsValid == 0)
		return 0;  //Retorna Erro "Cpf com caracter inválido"
	
	$CPFisValid = evalCpf($cpf); //Verifica se CPF é valido
	if($CPFisValid == 0)
		return 0;  //Retorna Erro "CPF inválido"
	
	return 1;      // Retorna que CPF foi válido
	}
?>