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



$id = $_POST["login-user"] ;
$pw = $_POST["login-password"];

$return = validateUser($id,$pw);

switch($return){
	case 1:
		//header('Location: ../view/urna_view.php');
		echo ("window.location.href = '../view/urna_view.php';");
		break;
	case 2:
		//header('Location: ../view/admin_home.php');
		echo ("window.location.href = '../view/admin_home.php';");
		break;
	default:
		$description = error($return);

		echo "$('#login-error').html('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('#login-error').show();";
		echo "$('#login-error').append('".$description."');";
}

?>