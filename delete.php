<?php
include 'dbconnect.php';
$nid = $_POST['del'];
session_start();
 $_SESSION['sid']=$nid;
$sql = "DELETE FROM studentdetails WHERE id=$nid";
$query = mysqli_query($conn,$sql);
if($query)
{
    header("Location:data.php");
}
?>