<?php

/*
* Título: verifyAddress)
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se usuario existe no BD
*
* Entrada: Um campo de texto que deve ser um número
*
* Saída: 
*
* Valor de retorno:1 se valor válido e -0 se invalido
*
* Funções invocadas: nada
* 
*   
*/

function updateElection($election,$conn)
{
	$startTime = $election['register-startTime'];	  
	$endTime = $election['register-endTime'];
	$date = $election['register-period'];
	$idElection = $election['register-idElection'];

	$sql="UPDATE `eleicoes` SET 
	`horaInicio`='$startTime',
	`data`='$date',
	`horaFim`='$endTime'
	 WHERE `idEleicao`= $idElection;";
	 
	 
	mysqli_query($conn,$sql);
}
?>