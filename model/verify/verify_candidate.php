<?php

/*
* Título: Verifica candidato
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se Candidato existe no BD 
*   
*/

function verifyCandidate($candidate,$conn)
{
	$id = $candidate["idCandidate"];// Atribuindo CPF a variavel
	$idElection = $candidate["idElection"];
	$office = $candidate["office"];

	$sql = "SELECT * FROM candidatos WHERE idCandidato = '$id' and idEleicao= '$idElection' and tipo='$office'"; // Monta a query
	//echo $sql;
	$result = mysqli_query($conn, $sql);          //Executa a query
	
	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{
			
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}



?>