 <?php 
 include "dbconnect.php";
 if(isset($_POST['submit'])){
 session_start();
        $fname = $_POST["fname"];
        $regno = $_POST["regno"];
        $course = $_POST["course"];
        $nid = $_POST['nid'];
        $mail = $_POST['mail'];
        $psid=$_SESSION['sid'];
echo $psid;
       
          $sql = "UPDATE studentdetails SET fname = '$fname',regno = '$regno',course = '$course',nid = '$nid', mail = '$mail' WHERE id='$psid'";
         $query = mysqli_query($conn, $sql);
          if($query)
          {
            header("Location:eligibility.php");
      
          }
         //header("Location:eligibility.php?stats=$stats");


          else{
          
            header("Location:eligibility.php");
          }
 }
 if(isset($_POST['editdata'])){
  session_start();
         $fname = $_POST["fname"];
         $regno = $_POST["regno"];
         $course = $_POST["course"];
         $nid = $_POST['nid'];
         $mail = $_POST['mail'];
         $psid=$_SESSION['sid'];
 echo $psid;
        
           $sql = "UPDATE studentdetails SET fname = '$fname',regno = '$regno',course = '$course',nid = '$nid', mail = '$mail' WHERE id='$psid'";
          $query = mysqli_query($conn, $sql);
           if($query)
           {
             header("Location:data.php");
       
           }
          //header("Location:eligibility.php?stats=$stats");
 
 
           else{
           
             header("Location:data.php");
           }
  }
 else{
echo 'error';
 }
?>