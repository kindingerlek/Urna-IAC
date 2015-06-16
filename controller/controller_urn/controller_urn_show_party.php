<?php
/*
* Título:controller_urn_show_party
*
* Autor: Alisson e Carlos 
* Data de Criação: 10/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Pesquisa e retorda os dados de um partido 
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
//verify
require_once($root.'model/verify/verify_party.php');


$conn = openDB();

$idParty["idParty"]= $_POST["party"];
//echo $idParty["idParty"];

// verifica se existe partido
if(verifyParty($idParty,$conn))
{
	// Se existe partido
	$party = verifyParty($idParty,$conn); // pega no banco de dados o partido digitado
	$party = mysqli_fetch_assoc($party);
	echo("$('#urn-number').html('".$party["idPartido"]."');
		  $('#urn-candidateParty').html('".$party["nome"]."');
		  $('#urn-candidatePhoto').css('background-image','url(".$party["logo"].")');" ); // IMPRIMIR DADOS NOS PADRÕES
}else
{
	echo("$('#urn-candidateOffice').html('');
		  $('#urn-number').html('');
		  $('#urn-candidateParty').html('');
		   $('#urn-candidatePhoto').css('background-image','url(".$party["logo"].")');"); // IMPRIMIR DADOS NOS PADRÕES
}

?>