<?php
session_start();


 $adm = $_POST['admno'];
 $pass = $_POST['password'];
 $_SESSION["user"] = $adm;
 $_SESSION["pass"] = $pass;
 
 $success = false;

    $data = file_get_contents('students.json');
    $jdata = json_decode($data,true);
    foreach ($jdata as $std) {
        if($std['adm'] == $adm && $std['pass'] == $pass ){
           $success =true;
            break;

        }

       
    }
  echo'
  <html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
<style>
    .container{
        color: gray;
        border: none;
        width: 70%;
        margin: auto;
        
    }
    b{
        color: black;
    }
    button{
    background-color: blue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 5px;
    margin-bottom: 3px;
    
  }
  button a{
    text-decoration: none;
    color: white;
  }
  .avatar{
    border-radius:50%;
    width: 100px;
    height: 100px;
  }
</style>
</head>
<Body>
  ';  
  
if($success){
  $pics=$std['pic'];
   $_SESSION["pic"] = $pics;
echo '

    <div class="container">';
    echo '<img src="images/'.$pics.'" class ="avatar"/>';
 echo '<h2>Hello, <br>'.$std["fname"].' '.$std["lname"]; 
 echo'</h2>
 <div class="col-25">';
          
        echo '<div><b>Admission:</b> '.$std["adm"].'<br>'.'<b>Course:</b> '.$std["course"].'</div>';
       echo ' </div>
                <button><a href="printstud.php" target="_blank">PRINT</a></button>
                <button><a href="log.php">Signout</a></button>
                </div>
               
';

}
else{
    echo '<div class = "alert alert-danger">Invalid Details</div>';
}
echo'
</Body>
</html>';
?>