<?php
include 'dbconnect.php';
session_start();
    $regno = $_POST['reggno'];
    $pass = $_POST['nidd'];
    $_SESSION["reg"] = $regno;

    $sql = "SELECT * FROM studentdetails WHERE stage = 5 AND regno='$regno' AND nid='$pass'";
        $query = mysqli_query($conn,$sql);

            $row = mysqli_num_rows($query);
            $data=mysqli_fetch_array($query);
            if($row==1)
            {
                $_SESSION["user"] = $regno;
                $_SESSION["pass"] = $pass;
                $picture = $data['picture'];
                $fullname = $data['fname']; 
                $mail = $data['mail'];
                $course = $data['course'];
                $picsrc="images/".$picture;
                $_SESSION["picname"] = "images/$picture";
                //$_SESSION["fname"] = $fullname;
                include 'studid.php';
     
       echo ' </div>
       <center>
                <a href="printstud.php" target="_blank"  class="btn btn-primary">PRINT ID</a>
                <a href="studlogin.php" class="btn btn-primary">Signout</a>
                </div>
                </center>
               
';


            }
            
            else
            {
                header('Location:studlogin.php');
            }

?>
