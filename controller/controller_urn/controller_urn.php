<?php
/*
* Título: Controlador de Urna
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Verifica qual o tipo de eleição e mostra os candidatos na ordem. Ao final envia o eleitor para a tela de agradecimento.
*
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

// Open DB
require_once($root.'model/open_db/open_db.php');

//Verify
require_once($root.'model/insert/insert_ticket.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$electionType = $_SESSION["votebem"]["type"];
$electionOffices = $_SESSION["votebem"][$electionType];

$i=0;

while(!$electionOffices[$i] && $i<count($electionOffices)) { 
		$i++;
}

if($i == count($electionOffices)){
	
	$conn=openDB();

	$user=$_SESSION['votebem']['loggedUser'];
	
	$election=$_SESSION['votebem']['election'];

	insertTicket($user, $election, $conn);

	mysqli_close($conn);

	header('Location: ../../view/thankyou.php');
	
}else{
	header('Location: ../../view/voter_urn.php');
	//header('Location: http://www.example.com/');

}


?>
