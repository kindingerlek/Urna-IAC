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
require_once('c://wamp/www/Urna-IAC/model/election_is_open/election_is_open.php');



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
			
			if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

			$row = mysqli_fetch_assoc($openElection);

			$_SESSION["votebem"]['type'] = $row["tipo"];
			$_SESSION["votebem"]['election'] = $row["idEleicao"];
			$_SESSION["votebem"]['electionDate'] = $row["idEleicao"];
	
			if($row["tipo"] == "MUNICIPAL"){
				$_SESSION["votebem"][$row["tipo"]] = ['VEREADOR', 'PREFEITO'];
			}else{
				$_SESSION["votebem"][$row["tipo"]] = ['DEPUTADO ESTADUAL', 'DEPUTADO FEDERAL', 'SENADOR', 'GOVERNADOR', 'PRESIDENTE'];
			}

			header('location:controller_urn/controller_urn.php');
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