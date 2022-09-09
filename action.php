<?php
 include 'footer.php';
    // Checking, if post value is
    // set by user or not
    if(isset($_POST['btnValue']))
    {
        $btnValue = $_POST['btnValue'];
       
         // Sending Response
        echo "Success";
    }
?>