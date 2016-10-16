<?php

$id=$_GET['id'];
require_once 'db_connect.php';
$sq="SELECT * FROM `customer` WHERE id='$id';";
$res=  mysqli_query($con, $sq);
$row1=  mysqli_fetch_array($res);
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Times','B',25);
    // Move to the right
    $this->Cell(50);
    // Title
    
    $this->Cell(130,10,'INFINITY IT SOLUTIONS',1,0,'C');
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
    $this->Cell(0,10,'Infinity IT Solutions - Office Copy',0,0,'C');
}
 
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

     $pdf->Cell(0,10,'                                                              KOUSER COMPLEX, CALTEX JUNCTION ,KANNUR ',0,1);
    $pdf->Cell(0,4,'                                                                  Ph:+918547666766 , EMAIL: anwarkannur@gmail.com',0,1);
    $id1='WORK ID: INFCR'.$row1['id'].'  / '.$row1['date'].'';

    $pdf->SetFont('Arial','',12);
     $pdf->Cell(0,4,$id1,0,1);
     $pdf->Ln();
     $pdf->Cell(40,15,'NAME',1,0,'C');
      $pdf->Cell(145,15,$row1['name'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'TYPE',1,0,'C');
        $pdf->Cell(145,15,$row1['type'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'MODEL',1,0,'C');
       
        $pdf->Cell(145,15,$row1['model'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'DESCRIPTION',1,0,'C');
        
       
        $pdf->Cell(145,15,$row1['description'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'PROBLEM',1,0,'C');
 
        
       
        $pdf->Cell(145,15,$row1['problem'],1,0,'C');
        $pdf->Ln();
       
        
        $pdf->SetFont('Times','I',12);
     $pdf->Cell(120,17,'                                                                                                                                           Signature',0,1);
  
  


 
    

    
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Infinity IT Solutions',0,0,'C');
      $pdf->Ln();
      $pdf->Cell(0,0,'--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,0,'C');
    
    
    
     $pdf->SetY(-145);
    // Shop bill
     // Logo
    $pdf->Image('logo.png',10,149,30);
    // Arial bold 15
    $pdf->SetFont('Times','B',25);
    // Move to the right
    $pdf->Cell(50);
    // Title
    
    $pdf->Cell(130,10,'INFINITY IT SOLUTIONS',1,0,'C');
    // Line break

    $pdf->SetFont('Times','',12);
 $pdf->Ln();
    $pdf->Cell(0,10,'                                                              KOUSER COMPLEX, CALTEX JUNCTION ,KANNUR ',0,1);
    $pdf->Cell(0,4,'                                                                  Ph:+918547666766 , EMAIL: anwarkannur@gmail.com',0,1);
    $id1='WORK ID: INFCR'.$row1['id'].'  / '.$row1['date'].'';

    $pdf->SetFont('Arial','',12);
     $pdf->Cell(0,4,$id1,0,1);
     $pdf->Ln();
     $pdf->Cell(40,15,'NAME',1,0,'C');
      $pdf->Cell(145,15,$row1['name'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'TYPE',1,0,'C');
        $pdf->Cell(145,15,$row1['type'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'MODEL',1,0,'C');
       
        $pdf->Cell(145,15,$row1['model'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'DESCRIPTION',1,0,'C');
        
       
        $pdf->Cell(145,15,$row1['description'],1,0,'C');
        $pdf->Ln();
        $pdf->Cell(40,15,'PROBLEM',1,0,'C');
 
        
       
        $pdf->Cell(145,15,$row1['problem'],1,0,'C');
        $pdf->Ln();
       
        
        $pdf->SetFont('Times','I',12);
     $pdf->Cell(120,17,'                                                                                                                                           Signature',0,1);
  
  


 
    

    
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
   
      
    
    

$pdf->Output();

?>
