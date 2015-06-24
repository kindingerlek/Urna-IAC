<?php

 
  /*
  * Título: Insere Ticket
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um Ticket no BD
  *
  */

function insertTicket($user, $election, $conn)
{

	$cpf=$user['cpf'];

	$sql="INSERT INTO `ticket` (`idEleicao`, `cpf`) 
	VALUES ('$election', '$cpf')";
	mysqli_query($conn,$sql);

}

?>