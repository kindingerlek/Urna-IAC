<?php
/*
* Título: verifyUser()
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
function deleteCandidate($candidato, $election, $conn)
{

	
	$sql = "DELETE FROM `candidatos` WHERE `idCandidato` = '$candidato' AND `idEleicao` = '$election';"; // Monta a query
	
	mysqli_query($conn, $sql);          //Executa a query

}
?>