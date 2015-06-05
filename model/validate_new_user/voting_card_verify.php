<?php

require_once("../eval/evalNumber.php");
require_once("../format/formatNumber.php");
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
function votingCardVerify($votingCard){

	$votingCard = formatNumber($votingCard); //Retira máscara do título
	$numberIsValid = evalNumber($votingCard); //Verifica se o número é val.
	if($numberIsValid == 0)
		return 0;  //Retorna Erro "Título inválido"
	
	$votingCardIsValid = evalVotingCard($votingCard); //Verifica se o número é val.
	if($votingCardisValid == 0)
		return 0;  //Retorna Erro "Título inválido"
	return 1;       //Retorna que o "Título é valido"

}
?>