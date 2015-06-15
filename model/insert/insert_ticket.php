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

function insertTicket($user, $election, $conn)
{

	$cpf=$user['cpf'];

	$sql="INSERT INTO `ticket` (`idEleicao`, `cpf`) 
	VALUES ('$election', $cpf')";

	mysqli_query($conn,$sql);

}
?>