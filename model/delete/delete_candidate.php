<?php
/*
  * Título: Deleta candidato
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	deleta candidato
  *
  */

function deleteCandidate($candidato, $election, $conn)
{

	
	$sql = "DELETE FROM `candidatos` WHERE `idCandidato` = '$candidato' AND `idEleicao` = '$election';"; // Monta a query
	
	mysqli_query($conn, $sql);          //Executa a query

}
?>