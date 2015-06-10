<?php
require_once('openDB');


$idEleicao = $_POST['election'];

$conn = openDB();


$election = select('eleicoes', 'idEleicao', $idEleicao, $conn);


$positions = select('vagas', 'idEleicao', $idEleicao, $conn); //Arrumar tabela de Vagas


$votes = select('votos', 'idEleicao', $idEleicao, $conn); 	//Arrumar tabela de Votos add idEleicao, partido, tipocandidato

while($vote = mysqli_fetch_assoc($votes)){
	
	$totalVotes++;										//Incrementando total de votos registrados
	
	if($vote['numero'] = -1){
		$nullVotes++; 									//Incrementando votos nulos 
	}else if ($vote['numero'] = -2){
		$emptyVotes++;									//Incrementando votos em branco
	}else{
		$validVotes++;									//Incrementando votos válidos

		$number = $vote['numero']						//Recuperando o número votado
		$votedCandidate[$number]++;						//Incrementando votos do candidato votado
							
		$candidateType = $vote['tipo'];					//Recuperando tipo do candidato votado
		$candidateTypeVotes[$candidateType]++;			//Incrementando votos por tipo de candidato

		$votedParty = $vote['partido'];					//Recuperando o partido votado
		$parties[$votedParty[$candidateType]]++;		//Incrementando o numero de votos que cada partido 
														//recebe por tipo de candidato
	}
	
}


$candidates = select('candidatos', 'idEleicao', $idEleicao, $conn);

while($candidate = mysqli_fetch_assoc($candidates)){
	
	$number = $candidate['numero'];										//Incrementando total de votos registrados
	
	if($candidate['votos'] != $votedCandidate[$number]){
		return error(xxx);								//Incrementando votos nulos 
	}
	
}


foreach($positions as $key=>$value)

if($key != 'idEleicao'){
	$position = $key;
	$votesRequired[$key] = $candidateTypeVotes[$key]/$value; 

}

//candidatos eleitos por cargo

//total de votos por partido e vagas por partido



//candidatos eleitos por partido

?>