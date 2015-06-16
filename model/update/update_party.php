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

function updateParty($party,$conn)
{
	$idParty = $party['idParty'];	  
	$name = $party['name'];
	$acronym = $party['acronym'];
	

	$sql="UPDATE `partidos` SET  `nome`='$name', `sigla`='$acronym'  
	WHERE `idPartido`='$idParty';";
	mysqli_query($conn,$sql);

}
?>