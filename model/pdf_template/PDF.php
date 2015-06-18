<?php
 
 require('../resources/fpdf/fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        global $title;
      
        // Logo
        $this->Image('../resources/images/ufpr_logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(110,10,utf8_decode($title),1,0,'C');
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
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'C');
    }
}
  
  ?>