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

$conn = openDB();   // Abre banco de dados 

$vote["idCandidate"] = $_POST["NAME NUMERO DO VOTO"];	// Pega o numero do candidato
$vote["idParty"] = $_POST["NAME ID PARTIDO"];        	// Pega o numero do partido
$vote["idElection"] = $_POST["NAME ID ELEICAO"];	 	// Pega o numero da eleição
$vote["office"] ="PREFEITO"; $_POST["NAME ID TIPO"];	// Pega o tipo do candidato

$vote = validateVote($vote,$conn);     // Valida o voto verificando se ele foi branco ou nulo ou legenda

insertVote($vote,$conn);

mysqli_close($conn);             // fecha banco de dados

session_start();

$electionType = $_SESSION["votebem"]["type"];
$electionOffices = $_SESSION["votebem"][$electionType];

$i=0;

for ($i=0; $i<count($electionOffices); $i++) { 
	if($electionOffices[$i]){
		$electionOffices[$i]=false;
		break;
	}
}

header("location: controller_urn.php");

?>