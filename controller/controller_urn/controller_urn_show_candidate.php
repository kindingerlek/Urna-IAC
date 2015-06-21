<?php
/*
* Título: Controlador de Urna
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Mostra as informações do candidato na urna.
*
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

//Verify
require_once($root.'model/verify/verify_party.php');
require_once($root.'model/verify/verify_candidate.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$conn = openDB();

$idCandidate["idCandidate"]= $_POST['idCandidate'];
$idCandidate["idParty"]= substr($idCandidate["idCandidate"],0,2);
$idCandidate["office"]= $_POST['office'];
$idCandidate["idElection"]= $_SESSION["votebem"]["election"];



// verifica se existe partido
if(verifyCandidate($idCandidate,$conn))
{
	// Se existe partido
	$candidate = verifycandidate($idCandidate,$conn); // pega no banco de dados o partido digitado
	$candidate = mysqli_fetch_assoc($candidate);
	echo("$('#urn-number').html('".$candidate["idCandidato"]."');
		  $('#urn-candidateName').html('".$candidate["nomeFantasia"]."');
		  $('#urn-candidatePhoto').css('background-image','url(".$candidate["foto"].")');" ); // IMPRIMIR DADOS NOS PADRÕES
}else
{
	
}

?>