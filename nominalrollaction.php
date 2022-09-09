 <?php
 include 'dbconnect.php';
 include 'mailer.php';
 require('fpdf/fpdf.php');


 if(isset($_POST['conf']))
 {
   $id = $_POST['conf'];
$Stage=5;
$sql = "UPDATE studentdetails SET stage=$Stage WHERE  id=$id";
$query = mysqli_query($conn, $sql);
if($query){

        $sql3 = "SELECT * FROM studentdetails WHERE  id=$id";
        $query3 = mysqli_query($conn,$sql3);
                if (mysqli_num_rows($query3) > 0) {
                     while ($row = mysqli_fetch_array($query3)) {
                          
                            $fname = $row['fname'];
                            $regno = $row['regno'];
                            $course = $row['course'];
                            $nid = $row['nid'];
                            $picture= $row['picture'];
                            $smail = $row['mail'];

                            break;
                        }
                     }
            
                     $pdf=new FPDF('p','mm','A4');
                     $pdf->AddPage();
                     $pdf->SetFont('Arial','B',16);
                     
                     $image = "images\Maseno-University-Logo.png";
                     $pdf->Image($image, 90, $pdf->GetY()+1 ,30);
                     $pdf->Ln(40);
                     $pdf->SetFont('Times','BU',15);
                     $pdf->cell(200,5,'MASENO UNIVERSITY',0,1,'C');
                     $pdf->cell(200,5,$course,0,1,'C');
                     $pdf->Ln(5);
         
                     $width_cell=array(45,35,35,40,35);
                 //     //$query = "SELECT * FROM regstudents where regno='$admno' and nid ='$password'";
                 //     $result = mysqli_query($conn, $query);
                 //     if (mysqli_num_rows($result) == 1) {
                 //     $row = mysqli_fetch_array($result);
                         
                 //         $no = $row['id'];
                 //         $fullname = $row['fullname'];
                       
                 //         $admno = $row['regno'];
                 //         $course = $row['course'];
                 //         $nid = $row['nid'];
                 //         $photo = $row['picname'];
                 //         $profile = "images/$photo";
                     
                 // }
                     $profile = "images/$picture";
                     $pdf->cell(200,5,'Temporary ID',0,1,'L');
                     $pdf->SetFont('Times','B',15);
                     $pdf->Image($profile, 170, $pdf->GetY()+1 ,25);
                     $pdf->cell(40,10,'FULL NAME :',0,0);
                     $pdf->SetFont('Times','',15);
                     $pdf->cell(25,10,$fname,0,1);
                   
                     $pdf->SetFont('Times','B',15);
                     $pdf->cell(60,10,'ADMISSION NUMBER :',0,0);
                     $pdf->SetFont('Times','',15);
                     $pdf->cell(25,10,$regno,0,1);
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
                    $filename = "studID/$nid.pdf";
                     $pdf->Output($filename, 'F');
                      
                     sendmail($smail,$fname,$nid);
               
                           
 		//  $sql2 = "INSERT INTO regstudents(fullname,regno,course,nid,picname,stages,mail) VALUES('$fname','$regno','$course','$nid','$picture','Cleared','$smail');";
    //      $query2= mysqli_query($conn, $sql2);
    //       if($query2)
    //       {
    //         header("Location:nominalroll.php?regsuccess");
    //       }
    //       header("Location:nominalroll.php?regfail");
    //        echo "
    //          <div class='alert alert-success' role='alert'>
    //          Add Student Successfully
    //          </div>
    //        ";
          }
        else{
          header("Location:nominalroll.php");
          exit();
        }


}

if(isset($_POST['rev']))
	{
  $rid = $_POST['rev'];
$Stage=4;
$sql = "UPDATE studentdetails SET stage=$Stage WHERE  id=$rid";
$query = mysqli_query($conn, $sql);
if($query){
            header("Location:nominalroll.php");
            echo "
              <div class='alert alert-success' role='alert'>
              Add Student Successfully
              </div>
            ";
          }
  
    
else{
    header("Location:nominalroll.php");
    exit();
}


}

if(isset($_POST['revone']))
	{
  $rid = $_POST['revone'];
$Stage=1;
$sql = "UPDATE studentdetails SET stage=$Stage WHERE  id=$rid";
$query = mysqli_query($conn, $sql);
if($query){
            header("Location:nominalroll.php");
            echo "
              <div class='alert alert-success' role='alert'>
              Add Student Successfully
              </div>
            ";
          }
  
    
else{
    header("Location:nominalroll.php");
    exit();
}


}

if(isset($_POST['revtwo']))
	{
  $rid = $_POST['revtwo'];
$Stage=2;
$sql = "UPDATE studentdetails SET stage=$Stage WHERE  id=$rid";
$query = mysqli_query($conn, $sql);
if($query){
            header("Location:nominalroll.php");
            echo "
              <div class='alert alert-success' role='alert'>
              Add Student Successfully
              </div>
            ";
          }
  
    
else{
    header("Location:nominalroll.php");
    exit();
}


}




                     
 ?>