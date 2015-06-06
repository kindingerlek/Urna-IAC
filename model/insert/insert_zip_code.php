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

function insertZipCode($zipCode,$conn)
{
	$zip = $zipCode['zipCode'];
	$neighborhood = $zipCode['neighborhood']; 
	$address = $zipCode['address'];
	$city = $zipCode['city'];
	$state = $zipCode['state'];

	$sql = "INSERT INTO `cep`(`cep`, `logradouro`, `bairro`, `cidade`, `estado`) VALUES ('$zip','$address','$neighborhood','$city', '$state');";
	mysqli_query($conn,$sql);
}
?>