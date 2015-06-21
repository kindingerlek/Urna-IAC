<?php
/*
* Título:COntrolador de Update de Eleição
*
* Autor: Alisson e Carlos e Lucas
* Data de Criação: 17/06/2015
*
* Descrição: Update no DB de eleicao. 
*            Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

//Open Db
require_once($root.'model/error/error.php');


//Open Db
require_once($root.'model/update/update_election.php');

//Open Db
require_once($root.'controller/controller_register_election/controller_register_election_validate.php');


$conn = openDB();

$election['register-idElection'] = $_POST['idElection']; //Onde 'register' lê-se 'update'
$election['register-period'] = $_POST['period'];		//Onde 'register' lê-se 'update'
$election['register-startTime'] = $_POST['startTime'];	//Onde 'register' lê-se 'update'
$election['register-endTime'] = $_POST['endTime'];		//Onde 'register' lê-se 'update'

$error = validateNewElection($election); /// include///////////

if(is_array($error))
{
	echo "$('#status-error').html('');";

	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);
		
		echo "$('#status-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('#status-error').show();";  
		echo "$('#status-error').append('".$description."<br/>');";
		
		}
}else
{
	updateElection($election,$conn);
	echo("alert('Registro Atualizado!');");
	echo("location.reload();");
	
}

mysqli_close($conn);
?>