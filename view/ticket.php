<?php

$title = 'COMPROVANTE DE VOTAÇÃO';

require('../model/pdf_template/PDF.php');
require('../model/ticket/Ticket.php');

$pdf = new PDF();
$ticket = new Ticket();


$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',12);

$pdf->Cell(0,7,utf8_decode('CODIGO DA ELEIÇÃO: ') . $ticket->idElection,0,1); 
$pdf->Cell(0,7,utf8_decode('DATA DA ELEIÇÃO: ') . $ticket->electionDate,0,1); 

$pdf->Ln(30);    
   
$pdf->Cell(0,10,'NOME DO ELEITOR: ' . $ticket->name,0,1);

$pdf->Cell(0,10,'COMPARECIMENTO: ' . $ticket->attendance,0,1);  
$pdf->Cell(0,10,utf8_decode('INSCRIÇÃO: ') . $ticket->votingCard,0,1);

$pdf->Cell(70,10,'NASCIMENTO: ' . $ticket->birthday,0,0);
$pdf->Cell(70,10,'ZONA: ' . $ticket->zone,0,0);
$pdf->Cell(70,10, utf8_decode('SESSÃO: ') . $ticket->session,0,1);
$pdf->Ln(10);

$pdf->Output();
?>