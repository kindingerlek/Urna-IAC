<?php
/*
* Título: Controle de Login
*
* Autor: Alisson e Carlos
* Data de Criação: 29/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: 	Recebe um usuario e uma senha via POST. 
* 				Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

//Format
require_once($root.'model/format/format_number.php');

function updatePassword($cpf,$pw,$conn)
{
	$cpf = formatNumber($cpf);

	$sql = "UPDATE `usuarios` SET `senha`='$pw' WHERE `cpf` = '$cpf'";
	mysqli_query($conn,$sql);

}


?>