

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


function verifyAddress($address,$conn)
{
	$complement = $address["complement"];// Atribuindo CPF a variavel
	$zipCode = $address["zipCode"];      // Atribuindo CPF a variavel
	$addressNum = $address["addressNum"];// Atribuindo CPF a variavel

	$sql = "SELECT * FROM `enderecos`
	 WHERE `cep` = '$zipCode' AND `numero` = '$addressNum' AND `complemento` = '$complement'"; // Monta a query

	$result = mysqli_query($conn, $sql);//Executa a query

	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{
			
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}
