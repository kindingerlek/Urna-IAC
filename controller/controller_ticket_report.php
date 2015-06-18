

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


session_start();
$idElection = $_SESSION['votebem']['idElection'];		//Recebendo dados via Post

$conn = openDB(); 	//Criando conexão com o Banco de Dados


$election = select('eleicoes', 'idEleicao', $idElection, $conn);		//Buscando dados de eleição
$positions = select('vagas', 'idEleicao', $idElection, $conn);  		//Buscando número de vagas
$votes = select('votos', 'idEleicao', $idElection, $conn); 			//Buscando tabela de votos


$sql = "SELECT usuarios.*,eleicoes.*, ticket.data from ticket inner join usuarios on usuarios.cpf = ticket.cpf inner join eleicoes on eleicoes.idEleicao = '$idElection' WHERE ticket.idEleicao = eleicoes.idEleicao;";
$tickets = mysqli_query($conn, $sql);
if(mysqli_num_rows($tickets)>0)
{
    

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
}else
{
    $pdf->Ln(25);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("NÃO EXISTEM DADOS NESSA ELEIÇÃO"),0,1,'C'); 
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
