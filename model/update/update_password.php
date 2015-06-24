<?php

  /*
  * Título: Atualiza senha
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Altera os dados de uma senha no DB
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