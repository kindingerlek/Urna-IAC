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

// Dependências
require_once('../model/user_verify/validate_user.php');
require_once('../model/error/error.php');

$id = $_POST["login-user"];
$pw = md5($_POST["login-password"]);

$return = validateUser($id,$pw);

switch($return){
	case 1:
		header('Location: ../view/view_urna.php');
		break;
	case 2:
		header('Location: ../view/view_admin.php');
		break;
	default:
		$description = error($return);
		echo "$('#resultado').html('$description');";
}

?>