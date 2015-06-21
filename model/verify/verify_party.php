<?php


/*
* Título: Verifica Partido
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se Partido existe no BD 
*   
*/

function verifyParty($party,$conn)
{
	
	$id = $party["idParty"];// Atribuindo CPF a variavel

	$sql = "SELECT * FROM partidos WHERE idpartido = '$id' "; // Monta a query
	$result = mysqli_query($conn, $sql);          //Executa a query
	
	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{
			
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}



?>