<?php
 
  /*
  * Título: Insere Candidato
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um Candidato no BD
  *
  */
  
function insertCandidate($candidate,$conn)
{
	
	$idParty = $candidate['idParty'];	  
	$name = $candidate['name'];
	$idElection = $candidate['idElection'];
	$idTipo = $candidate['office'];
	$photo = $candidate['photo'];
	$idCandidate = $candidate['idCandidate'];
	
	$sql="INSERT INTO `candidatos`(`idCandidato`, `idEleicao`, `tipo`, `idPartido`, `nomeFantasia`, `foto`) 
	VALUES('$idCandidate','$idElection','$idTipo','$idParty','$name','$photo')";
	
	$result = mysqli_query($conn,$sql);

}
?>