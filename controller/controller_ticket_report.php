

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
        $this->Cell(110,10, utf8_decode('RELATÓRIO DE ELEITORES'),1,0,'C');
        // Line break
        $this->Ln(10);
        
        // Arial 14
        $this->SetFont('Arial','',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(110,8,'SIMULADOR VOTE BEM',1,0,'C');
        
        // Line break
        $this->Ln(20);
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



$idElection = 1;  //$_SESSION['votebem']['election'];		//Recebendo dados via Post

$conn = openDB(); 	//Criando conexão com o Banco de Dados


$election = select('eleicoes', 'idEleicao', $idElection, $conn);		//Buscando dados de eleição
$positions = select('vagas', 'idEleicao', $idElection, $conn);  		//Buscando número de vagas
$votes = select('votos', 'idEleicao', $idElection, $conn); 			//Buscando tabela de votos

/*
*
*/

// while($vote = mysqli_fetch_assoc($votes)){				//Iterando em cada instância da tabela de votos
	
											
// 	$candidate = $vote['idCandidato'];					//Recuperando o número votado
// 	$office = $vote['tipo'];							//Recuperando tipo do candidato votado
// 	$party = $vote['idPartido'];							//Recuperando o partido votado
	
// 	if(isset($totalVotes[$office])){
// 		$totalVotes[$office]++;								//Total de votos registrados por cargo que deve ser exatamente igual a quantidade de ticket, ou seja, o total de eleitores que votaram
// 	}else
// 	{
// 		$totalVotes[$office]=1;	
// 	}
	
// 	if($candidate == 1 || $candidate == 3)
// 	{
// 		$nullVotes[$office]++; 							//Total de votos nulos por cargo 
// 	}else if ($candidate == 2){
// 		$emptyVotes[$office]++;							//Total de votos em branco por cargo
// 	}else
// 	{
// 		if(isset($validVotes[$office]))
// 		{
// 			$validVotes[$office]++;		//Total de votos válidos por cargo
// 		}						
// 		else{
// 			$validVotes[$office]=1;	
// 		}
		

// 		if(isset($votedCandidates[$candidate]))
// 		{
// 			$votedCandidates[$candidate]++;					//Total de votos de cada candidato
// 		}else
// 		{
// 			$votedCandidates[$candidate]=1;	
// 		}						
	

// 		if(isset($votedParties[$party][$office])){

// 			$votedParties[$party][$office]++;				//Incrementando o numero de votos que cada partido 
// 		}else
// 		{
// 			$votedParties[$party][$office] =1;	
// 		}			
// 														//recebe por tipo de candidatO
// 	}
// }


// $candidates = select('candidatos', 'idEleicao', $idElection, $conn);    	//Buscando todos os candidatos de uma eleição

// while($candidate = mysqli_fetch_assoc($candidates)){					//Iterando em cada instância da tabela de candidatos
	
// 	$number = $candidate['idCandidato'];								//Identificando o candidato
	
// 	if(isset($votedCandidates[$number]))
// 		if($candidate['votos'] != $votedCandidates[$number]){				//Verificando se o número de votos computados ao candidato
// 																			//confere com o número de aparições do mesmo na tabela votos
			
// 			//aqui o sistema explode! E o FBI decreta o "VoteBem" como sujeito a corrupção;											
// 		}

// }




$sql = "SELECT usuarios.*,eleicoes.*, ticket.data from ticket inner join usuarios on usuarios.cpf = ticket.cpf inner join eleicoes on eleicoes.idEleicao = '$idElection';";
$tickets = mysqli_query($conn, $sql);

//Header Table
 

 
// $pdf->Cell(40,7,'oi',1,0); 

//print_r($vagas);
$pdf->SetFont('Arial','',12);
    
    $pdf->Cell(0,7,utf8_decode('CODIGO DA ELEIÇÃO: '.$idElection));


    
    $pdf->Ln(15);    
      
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(25,7,utf8_decode('INSCRIÇÃO'),1,0,'C');
    $pdf->Cell(70,7,'NOME DO ELEITOR',1,0,'C');    
    $pdf->Cell(20,7,'NASC',1,0,'C');
    $pdf->Cell(20,7,'ZONA',1,0,'C');
    $pdf->Cell(20,7, utf8_decode('SESSÃO'),1,0,'C');
    $pdf->Cell(35,7,'COMPARECIMENTO',1,1,'C'); 

while($ticket = mysqli_fetch_assoc($tickets))
{

    $pdf->SetFont('Arial','',8);
	$pdf->Cell(25,7,utf8_decode($ticket['tituloEleitor']),1,0,'C');
    $pdf->Cell(70,7,$ticket['nome'],1,0,'L');    
    $pdf->Cell(20,7,$ticket['dtNasc'],1,0,'C');
    $pdf->Cell(20,7,$ticket['zona'],1,0,'C');
    $pdf->Cell(20,7, utf8_decode($ticket['secao']),1,0,'C');
    $pdf->Cell(35,7,$ticket['data'],1,1,'C'); 
	

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
