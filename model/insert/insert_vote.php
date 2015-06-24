<?php

 
  /*
  * Título: Insere voto
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um voto no BD
  *
  */

function insertVote($vote,$conn)
{
	$idElection = $vote['idElection'];	  
	$idCandidate = $vote['idCandidate'];
	$office = $vote['office'];
	$idParty = $vote['idParty'];
	// Query insert em votos
	$sql="INSERT INTO `votos`(`idEleicao`, `idCandidato`, `tipo`, `idPartido`)
	VALUES ('$idElection','$idCandidate','$office','$idParty')";
	
	mysqli_query($conn,$sql);
	
	if($idCandidate!= "3" && $idCandidate!= "1" && $idCandidate!= "2" )
	{// query update candidato
		$sql="UPDATE `candidatos` SET `votos` =(`votos`+ 1) WHERE `idCandidato`='$idCandidate' AND `tipo` = '$office' AND `idEleicao` = '$idElection';";
		mysqli_query($conn,$sql);

	}

}
?>