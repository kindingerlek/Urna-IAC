<?php
/*
* Título:controller_urn_show_candidate
*
* Autor: Alisson 
* Data de Criação: 11/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Pesquisa e retorda os dados de um candidato
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


$conn = openDB();

$idCandidate["idCandidate"]= $_POST['candidate'];
$idCandidate["idParty"]= substr($idCandidate["idCandidate"],0,2);
$idCandidate["office"]= "vereador";
$idCandidate["idElection"]= "2";

//$_POST["party"];
//echo $idParty["idParty"];

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