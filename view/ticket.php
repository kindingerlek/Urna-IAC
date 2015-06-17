<?php


  
  
require('../resources/fpdf/fpdf.php');
require('../model/ticket/Ticket.php');
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
        $this->Cell(110,10,'COMPROVANTE DE VOTACAO',1,0,'C');
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

function Content($pdf, $ticket)
{
    $pdf->SetFont('Arial','',12);
    
    $pdf->Cell(0,7,'CODIGO DA ELEICAO: ' . $ticket->idElection,0,1); 
    $pdf->Cell(0,7,'DATA DA ELEICAO: ' . $ticket->electionDate,0,1); 
    
    $pdf->Ln(30);    
       
    $pdf->Cell(0,10,'NOME DO ELEITOR: ' . $ticket->name,0,1);
    
    $pdf->Cell(0,10,'COMPARECIMENTO: ' . $ticket->attendance,0,1);  
    $pdf->Cell(0,10,'INSCRICAO: ' . $ticket->votingCard,0,1);
    
    $pdf->Cell(70,10,'NASCIMENTO: ' . $ticket->birthday,0,0);
    $pdf->Cell(70,10,'ZONA: ' . $ticket->zone,0,0);
    $pdf->Cell(70,10,'SESSAO: ' . $ticket->session,0,1);
    $pdf->Ln(10);
}

// Instanciation of inherited class
$pdf = new PDF();
$ticket = new Ticket();

$pdf->AliasNbPages();
$pdf->AddPage();
    Content($pdf, $ticket);
$pdf->Output();
?>