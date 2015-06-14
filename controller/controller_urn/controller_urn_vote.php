<?php
/*
* Título:controller_urn_new_vote
*
* Autor: Alisson 
* Data de Criação: 09/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Redireciona se admin não logado na page de admin
*
*/

$root = 'c:/wamp/www/Urna-IAC/';


//Sub controller
require_once('controller_urn_vote_validate.php');
// Format
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');
// Open DB
require_once($root.'model/open_db/open_db.php');
//Insert
require_once($root.'model/insert/insert_vote.php');



// verificar se é branco
	// se sim insert com id = 2

// verificar partido SELECT partido
	// se não  
		// idCandidate recebe -1 e vai para ->         insert voto
	
	// se existe  
		// idParty recebe o id[0,1] do $_POST CONTINUA

// verifica se existe candidato SELECT Candidato
	// se existe idCandidato recebe voto

	// se não existe idCandidato recebe 1  

//

// 1 - voto nulo
// 2 - branco
// 3 - legenda
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$conn = openDB();   // Abre banco de dados 

$vote["idCandidate"] = $_POST["idCandidate"];	// Pega o numero do candidato
$vote["idParty"] = substr($vote["idCandidate"],0,2);        	// Pega o numero do partido
$vote["idElection"] = $_SESSION["votebem"]["election"];	 	// Pega o numero da eleição
$vote["office"] = $_POST["office"];	// Pega o tipo do candidato


$vote = validateVote($vote,$conn);     // Valida o voto verificando se ele foi branco ou nulo ou legenda
echo ('alert('.$vote["idCandidate"].');');

insertVote($vote,$conn);

mysqli_close($conn);             // fecha banco de dados

$electionType = $_SESSION["votebem"]["type"];
$electionOffices = $_SESSION["votebem"][$electionType];

$i=0;

for ($i=0; $i<count($electionOffices); $i++) { 
	if($electionOffices[$i]){
		$electionOffices[$i]=false;
		echo("alert('false');");
		break;
	}
}
$_SESSION["votebem"][$electionType] = $electionOffices;
echo("window.location.href = '../controller/controller_urn/controller_urn.php';");

?>