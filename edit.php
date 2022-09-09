<?php
include 'dbconnect.php';
$nid = $_POST['edit'];
session_start();
$_SESSION['sid']=$nid;
$sql = "Select * from studentdetails where id=$nid";
$query = mysqli_query($conn,$sql);
if($query)
{
  $row = mysqli_fetch_array($query);
  $name=$row['fname'];
  $reg=$row['regno'];
  $course=$row['course'];
  $nid=$row['nid'];
  $mail = $row['mail'];


}
echo "  

<div class='card-body'>
  <div class='form-group'>
    <label for='fname'>Full Name</label>
    <input type='text' class='form-control' id='fname' name='fname' value='$name' onkeyup='checkfname()'>
    <span id='fname-status' style='font-size: 12px;'></span>
  </div>
  <div class='form-group'>
    <label for='regno'>Registration Number</label>
    <input type='text' class='form-control' id='regno' name='regno' value='$reg' onblur='checkAvailability()'>
    <span id='user-availability-status' style='font-size: 12px;'></span>
  </div>
  <div class='form-group'>
    <label for='faculty'>Faculty</label>
    <select name='faculty' id='faculty' class='form-control' onblur='getcourses()'>
      <option value='null'>~~CHANGE SCHOOL~~</option>
      <option value='sci'>Computing & Informatics</option>
      <option value='som'>Medicine</option>
      <option value='soed'>Education & Arts</option>
      <option value='smas'>Mathematics & Acturial Studies</option>
    </select>
    <span id='course-choosing' style='font-size: 12px;'></span>
  </div>
  <div class='form-group'>
    <label for='course'>Course</label>
    <select name='course' id='course' class='form-control'>
      <option value='$course'>$course</option>
     
    </select>
  </div>
  <div class='form-group'>
    <label for='nid'>National ID</label>
    <input type='text' class='form-control' id='nid' name='nid' placeholder='National Id' onblur='checknid()' value='$nid'>
    <span id='nid-status' style='font-size: 12px;'></span>
  </div>
  <div class='form-group'>
    <label for='regno'>Email</label>
    <input type='email' class='form-control' id='mail' name='mail' placeholder='Email' onblur='checkEmail()' value='$mail'>
    <span id='mail-status' style='font-size: 12px;'></span>
  </div>
  
</div>
<!-- /.card-body -->

<!-- <div class='card-footer'>
  <button type='submit' class='btn btn-primary'>Submit</button>
</div>
-->

</div>
";
?>