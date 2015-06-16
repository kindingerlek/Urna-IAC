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

function insertAddress($address,$conn)
{

	$complement = $address['complement']; 
	$codeZip = $address['zipCode'];
	$addressNum =$address['addressNum']; 

	$sql = "INSERT INTO `enderecos`(`numero`, `complemento`, `cep`) VALUES ('$addressNum','$complement','$codeZip');";
	
	$return = mysqli_query($conn,$sql);
	
}

?>
