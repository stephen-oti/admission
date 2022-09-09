<?php
 include 'dbconnect.php';

if(isset($_POST['conf']))
	{
    $id = $_POST['conf'];
$Stage=4;
$sql = "UPDATE studentdetails SET stage=$Stage WHERE  id=$id";
$query = mysqli_query($conn, $sql);
if($query){
//	header("Location:eligibility.php");
            echo "
              <div class='alert alert-success' role='alert'>
              Add Student Successfully
              </div>
            ";
          }
  
    
else{
    header("Location:eligibility.php");
    exit();
}


}
if(isset($_POST['rev']))
	{
  $rid = $_POST['rev'];
$Stage=3;
$sql = "UPDATE studentdetails SET stage=$Stage WHERE  id=$rid";
$query = mysqli_query($conn, $sql);
if($query){
	header("Location:eligibility.php");
            echo "
              <div class='alert alert-success' role='alert'>
              reverted
              </div>
            ";
          }
  
    
else{
    header("Location:eligibility.php");
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
	header("Location:eligibility.php");
            echo "
              <div class='alert alert-success' role='alert'>
              reverted
              </div>
            ";
          }
  
    
else{
    header("Location:eligibility.php");
    exit();
}


}




                     
 ?>