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

function verifyCandidate($candidate,$conn)
{
	$id = $user["number"];// Atribuindo CPF a variavel

	$sql = "SELECT * FROM candidatos WHERE numero = '$number' "; // Monta a query
	$result = mysqli_query($conn, $sql);          //Executa a query

	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{
			
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}



?>