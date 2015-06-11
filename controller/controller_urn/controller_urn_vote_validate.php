<?php
/*
* Título:controller_urn_vote_validate
*
* Autor: Alisson 
* Data de Criação: 09/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: valida voto atribuindo os valores corretos para o campo idCandidato
*
*/

 // verify party
//Verify
require_once($root.'model/verify/verify_party.php');
//Verify
require_once($root.'model/verify/verify_candidate.php');



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

function validateVote($vote,$conn)
{

	if($vote["idCandidate"] == "")    // verificar se voto é branco
	{
		$vote["idCandidate"] = 2;
		return $vote;                 // Retorna o $voto atualizado
	}

	if(!verifyParty($vote,$conn))  	  // verificar Partido SELECT partido
	{
		$vote["idCandidate"] = 1;     // voto nulo
		return $vote;
	}

	if(!verifyCandidate($vote,$conn)) // verificar Candidato SELECT partido
	{
		$vote["idCandidate"] = 3;     // voto na legenda
		return $vote;
	}

	return $vote;                     //retorna 
}
?>