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
require_once('../model/validate_new_user/validate_new_user.php');
require_once('../model/error/error.php');
require_once('../model/validate_new_user/register_new_user.php');



$newUser = $_POST;

$return = validateNewUser($newUser);

switch($return === 1){
	case 1:
		//header('Location: ../view/urna_view.php');
		registerNewUser($newUser);
		echo ("window.location.href = '../view/login.php';");
		break;
	default:
		for ($i=0; $i=count($return); $i++) {

			$description = error($return[$i]);

		echo "$('#login-error').html('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('#login-error').show();";
		echo "$('#login-error').append('".$description."<br />');";
			
		}
}

?>