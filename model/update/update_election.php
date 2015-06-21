<?php


  /*
  * Título: Atualiza eleição
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Altera os dados de uma eleição
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