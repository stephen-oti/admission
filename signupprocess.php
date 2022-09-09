<?php
include_once 'dbconnect.php';
 if(isset($_POST["signup"])){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]); 
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    $imageFilename = strtolower(pathinfo($target_file,PATHINFO_FILENAME)); 
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
   
    $regno = $_POST["regno"];
    $newreg = str_replace('/','_',$regno);
    if ($_FILES["photo"]["size"] > 5000000) {
      $error="Big file";
      echo '<script>window.alert("'.$error.'")</script>';
      $uploadOk = 0;
    }
    else{
      $picture=$newreg.'.'.$imageFileType;
      $folder = "images/". $picture;
      if( move_uploaded_file($_FILES["photo"]["tmp_name"], $folder)){
        echo "Uploaded";
      }
      else{
        echo "upload failed";
      }
      
        $fname = $_POST["fname"];
        $regno = $_POST["regno"];
        $course = $_POST["course"];
        $nid = $_POST['nid'];
        $mail = $_POST['mail'];
        $stage = 1;

        $sql = "INSERT INTO studentdetails(fname,regno,course,nid,mail,picture,stage) VALUES(?,?,?,?,?,?,?)";
 
        $insert = mysqli_prepare($conn,$sql);
        
        mysqli_stmt_bind_param($insert,'ssssssi',$fname,$regno,$course,$nid,$mail,$picture,$stage);
        
        $query = mysqli_stmt_execute($insert);
          if($query){
           
          }
         header("Location:data.php");
    }
 }
else{
    header("Location:data.php");
    exit();
}

    
?>