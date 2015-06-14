<?php

/*
* Título: insert Vote
*
* Autor: Alisson
* Data de Criação: 11/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Insere um voto no BD
*
* Entrada: Uma connection e um array hash de Voto
*
* Saída: Nada, premissa de que os dados já estão válidos
*
* Valor de retorno: 1 se valor válido e -0 se invalido
*
* Funções invocadas: nada
* 
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
	echo $sql;
	mysqli_query($conn,$sql);
	
	if($idCandidate>3)
	{// query update candidato
		$sql="UPDATE `candidatos` SET `votos` =(`votos`+ 1) WHERE `idCandidato`='$idCandidate' AND `tipo` = '$office' AND ´idEleicao´ = '$idElection';";

		mysqli_query($conn,$sql);
	}

}
?>