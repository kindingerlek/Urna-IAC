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

function insertUser($user,$conn)
{
	$cpf = $user['cpf'];	  
	$name = $user['name'];
	$votingCard = $user['votingCard'];
	$zone = $user['zone'] ;
	$session=$user['session'] ;
	$birthday=$user['birthday'];
	$password=$user['password'];   
	$email=$user['email'];
	$complement=$user['complement'];  
	$zipCode=$user['zipCode'];
	$addressNum=$user['addressNum'];

	$sql="INSERT INTO `usuarios` (`cpf`, `numero`, `email`, `cep`, `complemento`, `nome`, `tituloEleitor`,`zona`, `secao`, `senha`, `dtNasc`) 
	VALUES ('$cpf','$addressNum','$email', '$zipCode','$complement','$name','$votingCard','$zone','$session','$password','$birthday')";
	mysqli_query($conn,$sql);

}
?>