<?php
require_once("dbconnect.php");
if(!empty($_POST["regno"])){
    $regno = $_POST['regno'];
    if(filter_var($regno,FILTER_DEFAULT)===false || !preg_match('/^[A-Z]{3}+(\/)+[0-9]{5}+(\/)+[0-9]{3}/', $regno))
    {
        echo "<span style ='color:red'>Invalid reg, follow specified format in the placeholder</span>";
        echo"<script>$('#submit').prop('disabled',true );</script>";
    }
    else
    {
   $sql="SELECT regno from studentdetails where regno = '$regno'";
   $query = mysqli_query($conn,$sql);
   $row = mysqli_num_rows($query);
   $data=mysqli_fetch_array($query);
   if($data>0)
   {
       echo"<span style ='color:red'>Registration already exists.</span>";
       echo"<script>$('#submit').prop('disabled',true );</script>";
   }
else
  {
    echo"<span style ='color:green'>Registration available for Registration.</span>";
    echo"<script>$('#submit').prop('disabled',false );</script>";
   // echo"<script>$('#mail').prop('disabled',false );</script>";
}

    }
}

if(!empty($_POST["mail"])){
    $mail = $_POST['mail'];
    if(filter_var($mail,FILTER_VALIDATE_EMAIL)===false || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,3}$/ix',$mail))
    // if(!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,3}$/ix',$mail))
    {
        echo "<span style='color:red;'><span style='font-weight:700;font-size:20px;'>! </span>Invalid Email</span>";
        echo "<script>$('#submit').prop('disabled',true );</script>";
    }
    else
    {
   $sql="SELECT regno from studentdetails where mail = '$mail'";
   $query = mysqli_query($conn,$sql);
   $row = mysqli_num_rows($query);
   $data=mysqli_fetch_array($query);
   if($data>0)
   {
       echo"<span style ='color:red'>Email already exists.</span>";
       echo"<script>$('#submit').prop('disabled',true );</script>";
   }
else
   
  {
    echo"<span style ='color:green'>Email available for Registration.</span>";
    echo"<script>$('#submit').prop('disabled',false );</script>";
    
}

    }
}

if(!empty($_POST["nid"])){
    
    $nid = $_POST['nid'];
    if(filter_var($nid,FILTER_DEFAULT)===false || !(is_numeric($nid)) || !(strlen($nid) >= 6) )
    {
        echo "<span style ='color:red'>Id <b>Must</b> be a <b>Digit</b> of <b> four to six digits</b></span>";
        echo"<script>$('#submit').prop('disabled',true );</script>";
    }
   
    else
    {
   $sql="SELECT regno from studentdetails where nid='$nid'";
   $query = mysqli_query($conn,$sql);
   $row = mysqli_num_rows($query);
   $data=mysqli_fetch_array($query);
   if($data>0)
   {
       echo"<span style ='color:red'>Identity already exists.</span>";
       echo"<script>$('#submit').prop('disabled',true );</script>";
   }
else
  {
    echo"<span style ='color:green'>Identity available for Registration.</span>";
    echo"<script>$('#submit').prop('disabled',false );</script>";
}

    }
}


if(!empty($_POST["fname"])){
    $name = $_POST['fname'];
    if(filter_var($name,FILTER_DEFAULT)===false  || !preg_match('/^[a-zA-Z]+[ ]?[a-zA-Z]+$/', $name) )
    {
        echo "<span style ='color:red'>Space allowed only between names, No digits allowed</span>";
        echo"<script>$('#submit').prop('disabled',true );</script>";
    }

}
if(!empty($_POST["faculty"])){
    $faculty = $_POST['faculty'];
    if($faculty == "null")
    {
        echo"<option>``NO SCHOOL SELECTED``</option>";
        echo"<script>$('#submit').prop('disabled',true );</script>";
    }
    else
    {
        echo "<option value='null'>~~PROGRAMMES~~</option>";
        $sql = "SELECT $faculty FROM faculties";
        $query = mysqli_query($conn,$sql);
        if($query){
            while($row = mysqli_fetch_array($query)){
                $course = $row["$faculty"];
                echo "
                <option value='$course'>$course</option>
                ";
            }
        }

    }
}


?>