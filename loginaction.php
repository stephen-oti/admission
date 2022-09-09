<?php
session_start();
if(isset($_POST['signin'])){
$username = $_POST['username'];
$pass = $_POST['password'];

if($username == 'root' && $pass == 'admin'){
    $_SESSION["user"] = $username;
    header('Location:index.php');
}
else{
    header('Location:login.php?failed');
}
}
?>