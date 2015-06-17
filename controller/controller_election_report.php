

<?php
require_once('../model/open_db/open_db.php');
require_once('../model/select/select.php');
require_once('../model/error/error.php');
require_once('../resources/fpdf/fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../resources/images/ufpr_logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(110,10, utf8_decode('RELATÓRIO DE ELEIÇÃO'),1,0,'C');
        // Line break
        $this->Ln(10);
        
        // Arial 14
        $this->SetFont('Arial','',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(110,8,'SIMULADOR VOTE BEM',1,0,'C');
        
        // Line break
        $this->Ln(10);
    }
    
    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();



$idElection = 1;  //$_POST['idElection'];		//Recebendo dados via Post

$conn = openDB(); 	//Criando conexão com o Banco de Dados


$election = select('eleicoes', 'idEleicao', $idElection, $conn);		//Buscando dados de eleição
$positions = select('vagas', 'idEleicao', $idElection, $conn);  		//Buscando número de vagas
$votes = select('votos', 'idEleicao', $idElection, $conn); 			//Buscando tabela de votos

/*
*
*/

$positions = mysqli_fetch_assoc($positions);
foreach($positions as $office=>$value){
	$totalVotes[$office]=0;
	$nullVotes[$office]=0;
	$emptyVotes[$office]=0;
	$validVotes[$office]=0;
}

while($vote = mysqli_fetch_assoc($votes)){				//Iterando em cada instância da tabela de votos
	
											
	$candidate = $vote['idCandidato'];					//Recuperando o número votado
	$office = $vote['tipo'];							//Recuperando tipo do candidato votado
	$party = $vote['idPartido'];							//Recuperando o partido votado
	
	
	$totalVotes[$office]++;								//Total de votos registrados por cargo que deve ser exatamente igual a quantidade de ticket, ou seja, o total de eleitores que votaram
	
	
	if($candidate == 1 || $candidate == 3)
	{
		$nullVotes[$office]++; 							//Total de votos nulos por cargo 
	}else if ($candidate == 2){
		$emptyVotes[$office]++;							//Total de votos em branco por cargo
	}else
	{
		
		$validVotes[$office]++;		//Total de votos válidos por cargo		
		
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
	}
}


$candidates = select('candidatos', 'idEleicao', $idElection, $conn);    	//Buscando todos os candidatos de uma eleição

while($candidate = mysqli_fetch_assoc($candidates)){					//Iterando em cada instância da tabela de candidatos
	
	$number = $candidate['idCandidato'];								//Identificando o candidato
	
	if(isset($votedCandidates[$number]))
		if($candidate['votos'] != $votedCandidates[$number]){				//Verificando se o número de votos computados ao candidato
																			//confere com o número de aparições do mesmo na tabela votos
			
			//aqui o sistema explode! E o FBI decreta o "VoteBem" como sujeito a corrupção;											
		}

}


$sql = "SELECT * FROM candidatos WHERE idEleicao = '$idElection' ORDER BY tipo,votos desc;";
$candidatos = mysqli_query($conn, $sql);

$sql = "SELECT * FROM vagas WHERE idEleicao = '$idElection';";
$vagas = mysqli_fetch_assoc(mysqli_query($conn, $sql));


//Header Table
 

//  $pdf->SetFont('Arial','',8); 
// $pdf->Cell(40,7,'oi',1,0); 

//print_r($vagas);

$lastCandidate = '';

while($candidate = mysqli_fetch_assoc($candidatos))
{

	if($lastCandidate != $candidate['tipo'])
	{
		$lastCandidate = $candidate['tipo'];

			$pdf->Ln(14);

			

				$pdf->SetFont('Arial','B',14);

				$pdf->SetFillColor(230, 230, 230);
				$pdf->Cell(190,10,$candidate['tipo'],1,1, 'C', 1);
				$pdf->SetFillColor(255, 255, 255);
				
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(40,7,'VOTOS NULOS',1,0, 'C');
				$pdf->Cell(50,7,'VOTOS BRANCOS',1,0, 'C');  
				$pdf->Cell(50,7,utf8_decode('VOTOS VÁLIDOS'),1,0, 'C');
				$pdf->Cell(50,7,'TOTAL DE VOTOS',1,1, 'C');
				
				$pdf->SetFont('Arial','',8);
				$pdf->Cell(40,7,$nullVotes[$candidate['tipo']],1,0,'C');
				$pdf->Cell(50,7,$emptyVotes[$candidate['tipo']],1,0,'C');  
				$pdf->Cell(50,7,$validVotes[$candidate['tipo']],1,0,'C');
				$pdf->Cell(50,7,$totalVotes[$candidate['tipo']],1,1,'C');
		
		$pdf->Ln(3);
				
				$pdf->SetFont('Arial','B',10); 
				$pdf->Cell(20,7,'NUMERO',1,0, 'C');
		 		$pdf->Cell(100,7,'NOME FANTASIA',1,0, 'C');  
				$pdf->Cell(30,7,'PARTIDO',1,0, 'C');
		 		$pdf->Cell(20,7,'VOTOS',1,0, 'C'); 
		 		$pdf->Cell(20,7,'STATUS',1,1, 'C');

	}

	$vagas[$candidate['tipo']]--;

	if($vagas[$candidate['tipo']]>=0)
	{
		$status = "ELEITO";
		$pdf->SetFillColor(184, 255, 153);
	}else
	{
		$status = utf8_decode("NÃO ELEITO");
		$pdf->SetFillColor(255, 255, 255);
	}

	$candidate['status'] = $status;

	$pdf->SetFont('Arial','',8); 

	$pdf->Cell(20,7,utf8_decode($candidate['idCandidato']),1,0,'C',1);
	$pdf->Cell(100,7,utf8_decode($candidate['nomeFantasia']),1,0,'L',1);  
	$pdf->Cell(30,7,utf8_decode($candidate['idPartido']),1,0,'C',1);
	$pdf->Cell(20,7,utf8_decode($candidate['votos']),1,0,'C',1); 
	$pdf->Cell(20,7,$candidate['status'],1,1,'C',1); 

}
$pdf->Output();
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
