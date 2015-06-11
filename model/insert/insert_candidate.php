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

function insertCandidate($candidate,$conn)
{
	print_r($candidate);
	$idParty = $candidate['idParty'];	  
	$name = $candidate['name'];
	$idElection = $candidate['idElection'];
	$idTipo = $candidate['idOffice'];
	$photo = $candidate['photo'];
	$idCandidate = $candidate['idCandidate'];
	
	$sql="INSERT INTO `candidatos`(`idCandidato`, `idEleicao`, `tipo`, `idPartido`, `nomeFantasia`, `foto`) 
	VALUES('$idCandidate','$idElection','$idTipo','$idParty','$name','$photo')";

	$result = mysqli_query($conn,$sql);

}
?>