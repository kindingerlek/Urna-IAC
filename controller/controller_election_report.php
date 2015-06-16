

<?php
require_once('../model/open_db/open_db.php');
require_once('../model/select/select.php');
require_once('../model/error/error.php');


$idEleicao = 5;  //$_POST['idElection'];		//Recebendo dados via Post

$conn = openDB(); 	//Criando conexão com o Banco de Dados


$election = select('eleicoes', 'idEleicao', $idEleicao, $conn);		//Buscando dados de eleição
$positions = select('vagas', 'idEleicao', $idEleicao, $conn);  		//Buscando número de vagas
$votes = select('votos', 'idEleicao', $idEleicao, $conn); 			//Buscando tabela de votos

/*
*
*/

while($vote = mysqli_fetch_assoc($votes)){				//Iterando em cada instância da tabela de votos
	
											
	$candidate = $vote['idCandidato'];					//Recuperando o número votado
	$office = $vote['tipo'];							//Recuperando tipo do candidato votado
	$party = $vote['idPartido'];							//Recuperando o partido votado
	
	if(isset($totalVotes[$office])){
		$totalVotes[$office]++;								//Total de votos registrados por cargo que deve ser exatamente igual a quantidade de ticket, ou seja, o total de eleitores que votaram
	}else
	{
		$totalVotes[$office]=1;	
	}
	
	if($candidate == -1)
	{
		$nullVotes[$office]++; 							//Total de votos nulos por cargo 
	}else if ($candidate == -2){
		$emptyVotes[$office]++;							//Total de votos em branco por cargo
	}else
	{
		if(isset($validVotes[$office]))
		{
			$validVotes[$office]++;		//Total de votos válidos por cargo
		}						
		else{
			$validVotes[$office]=1;	
		}
		

		if(isset($votedCandidates[$candidate]))
		{
			$votedCandidates[$candidate]++;					//Total de votos de cada candidato
		}else
		{
			$votedCandidates[$candidate]=1;	
		}						
	

		if(isset($votedParties[$party][$office])){

			$votedParties[$party][$office]++;				//Incrementando o numero de votos que cada partido 
		}else
		{
			$votedParties[$party][$office] =1;	
		}			
														//recebe por tipo de candidatO
	}
}


$candidates = select('candidatos', 'idEleicao', $idEleicao, $conn);    	//Buscando todos os candidatos de uma eleição

while($candidate = mysqli_fetch_assoc($candidates)){					//Iterando em cada instância da tabela de candidatos
	
	$number = $candidate['idCandidato'];								//Identificando o candidato
	
	if($candidate['votos'] != $votedCandidates[$number]){				//Verificando se o número de votos computados ao candidato
																		//confere com o número de aparições do mesmo na tabela votos
		//return error(-29);
		//aqui o sistema explode! E o FBI decreta o "VoteBem" como sujeito a corrupção;											
	}
	
}

//Foreach para cada office
foreach ($totalVotes as $office => $key) {
	echo $office;
	
}
	//sql office
	//query
	//insere linha a linha em $table

// foreach($positions as $key=>$value)

// if($key != 'idEleicao'){
// 	$position = $key;
// 	$quocienteEleitoral[$key] = round($candidateTypeVotes[$key]/$value); 
// }

// // $parties = [ 
// // 	pt = [prefeito = 45, vereador = 2378],
// // 	psc = [prefeito = 45, vereador = 2378]
// // ];


// // Modificado por Alisson e Lucas e Carlos
// //Para cada Partido no Array de Partidos, recupere as informação em partydata
// for($i=0; $i<count($parties); $i++){

// 	$party = $parties[i];

// 	//Para cada cargo no partido, recupere o valor do 'office'
// 	for($j=0; $j<count($party); $j++){

// 		$office=$party[$j];

// 		$quocientePartidario[$party[$office]] = floor($party[$office]/$quocienteEleitoral[$office]);
// 	}
// }



// //candidatos eleitos por cargo

//total de votos por partido e vagas por partido



//candidatos eleitos por partido

?>
