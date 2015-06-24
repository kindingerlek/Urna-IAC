<?php

 
  /*
  * Título: Insere Usuário
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um Usuário no BD
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