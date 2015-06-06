<?php
$root = 'c:/wamp/www/Urna-IAC/';
require_once($root."model/eval/eval_number.php");
require_once($root."model/format/format_number.php");
require_once($root."model/eval/eval_voting_card.php");
/*
* Título: votingCardVerify
*
* Autor: Alisson
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe um Titulo verifica se é válido e envia 1 se for e -1 se estiver invalido
*
* Entrada: Titulo
*
* Saída: Valor númerico 1 se Titulo válido e -1 se invalido
*
* Valor de retorno: 1 e -1 ;
*
* Funções invocadas: evalNumber.php e formatNumber.php
* 
*   
*/
function validateVotingCard($votingCard){
	
	$votingCardIsValid = evalVotingCard($votingCard); //Verifica se o número é val.
	if(!$votingCardIsValid)
		return 0;  //Retorna Erro "Título inválido"
	return 1;       //Retorna que o "Título é valido"

}
?>