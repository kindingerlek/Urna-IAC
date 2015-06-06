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

function verifyZipCode($zipCode,$conn)
{
	
	$zipCode = $zipCode["zipCode"];      // Atribuindo CPF a variavel

	$sql = "SELECT * FROM CEP WHERE CEP = '$zipCode' "; // Monta a query para pesquisar CEP

	$result = mysqli_query($conn, $sql);//Executa a query

	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}
?>