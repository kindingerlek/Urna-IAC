<?php

/*
* Título: Verifica Eleição
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se Eleição existe no BD 
*   
*/

function verifyElection($election,$conn)
{
	if(isset($election["idElection"])){
		$idElection = $election["idElection"];// Atribuindo CPF a variavel
		$sql = "SELECT * FROM eleicoes WHERE idEleicao = '$idElection' ";
	}else{
		$date = $election["date"];// Atribuindo CPF a variavel
		$sql = "SELECT * FROM eleicoes WHERE data = '$date' ";
	}

	$result = mysqli_query($conn, $sql);          //Executa a query

	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{		
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}



?>