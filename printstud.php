<?php
require('fpdf/fpdf.php');
include_once 'dbconnect.php';
session_start();
$admno = isset($_SESSION['user'])?$_SESSION['user']:0;
$password = isset($_SESSION['pass'])?$_SESSION['pass']:0;
// $profile= isset($_SESSION['picname'])?$_SESSION['picname']:0;
// echo $admno;

   
    // $pic = $std["pic"];
    $pdf=new FPDF('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    
    $image = "images\Maseno-University-Logo.png";
    $pdf->Image($image, 90, $pdf->GetY()+1 ,30);
    $pdf->Ln(40);
    $pdf->SetFont('Times','BU',15);
    $pdf->cell(200,5,'MASENO UNIVERSITY',0,1,'C');
    
    $query = "SELECT * FROM studentdetails WHERE stage = 5 AND regno='$admno' AND nid='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
        
        $no = $row['id'];
        $fullname = $row['fname'];
       
        $admno = $row['regno'];
        $course = $row['course'];
        $nid = $row['nid'];
        $photo = $row['picture'];
        $profile = "images/$photo";
    
}
    $pdf->cell(200,5,$course,0,1,'C');
    $pdf->Ln(5);
    $width_cell=array(45,35,35,40,35);
    $pdf->cell(200,5,'Temporary ID',0,1,'L');
    $pdf->SetFont('Times','B',15);
    $pdf->Image($profile, 170, $pdf->GetY()+1 ,25);
    $pdf->cell(40,10,'FULL NAME :',0,0);
     $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$fullname,0,1);
   
    $pdf->SetFont('Times','B',15);
    $pdf->cell(60,10,'ADMISSION NUMBER :',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$admno,0,1);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(40,10,'COURSE :',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$course,0,1);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(40,10,'National ID:',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$nid,0,1);
    $pdf->Ln(30);
    $pdf->SetFont('Times','BI',15);
    $pdf->cell(60,10,'STUDENTS SIGNATURE  .............................................................',0,1);
    $pdf->cell(60,10,'DESIGNED AND MAINTAINED BY EZEKIEL, SAMWEL AND STEPHEN.',0,0);

    $pdf->Output();

?>