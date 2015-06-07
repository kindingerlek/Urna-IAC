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

function insertParty($party,$conn)
{
	$idParty = $party['idParty'];	  
	$name = $party['name'];
	$acronym = $party['acronym'];
	$logo=$party['logo'];
	

	$sql="INSERT INTO `partidos`(`idPartido`, `nome`, `sigla`, `logo`) 
	VALUES ('$idParty','$name','$acronym','$logo')";
	mysqli_query($conn,$sql);

}
?>