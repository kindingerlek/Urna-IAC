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

require_once('c://wamp/www/Urna-IAC/model/login_verify/validate_user.php');
require_once('c://wamp/www/Urna-IAC/model/error/error.php');



$id = $_POST["login-user"] ;
$pw = $_POST["login-password"];

$return = validateUser($id,$pw);

switch($return){
	case 1:
		//header('Location: ../view/urna_view.php');
		$openElection = electionIsOpen();

		
		
		if(!$openElection){
			echo "alert('Não existe eleição no dia de hoje!');";
		}else{
			
			session_start();

			$row = mysqli_fetch_assoc($openElection);

			$_SESSION["votebem"]['tipo'] = $row["tipo"];
	
			if($row["tipo"] == "MUNICIPAL"){
				$_SESSION["votebem"][$row["tipo"]] = [true, true];
			}else{
				$_SESSION["votebem"][$row["tipo"]] = [true, true, true, true, true];
			}

			echo ("window.location.href = '../view/voter_urn.php';");
		}

		break;
	case 2:
		//header('Location: ../view/admin_home.php');
		echo ("window.location.href = '../view/admin_home.php';");
		break;
	default:
		$conn = openDB();
		$description = error($return,$conn);
		mysqli_close($conn);
		
		echo "$('#login-error').html('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('#login-error').show();";
		echo "$('#login-error').append('".$description."');";
}

?>