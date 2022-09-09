<?php
include 'dbconnect.php';
session_start();
$eid=$_GET['eid'];
 $_SESSION['sid']=$eid;
$sql = "Select * from studentdetails where id=$eid";
$query = mysqli_query($conn,$sql);
if($query)
{
  $row = mysqli_fetch_array($query);
  $name=$row['fname'];
  $reg=$row['regno'];
  $course=$row['course'];
  $nid=$row['nid'];
  
  

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Stud Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    


    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
         </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Stages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stage 1</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stage 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stage 3</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stage 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registered Students</p>
                </a>
              </li>
            </ul>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">student Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="#" action="update.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name"
                    value="<?php echo $name ?>">
                  </div>
                  <div class="form-group">
                    <label for="regno">Registration Number</label>
                    <input type="text" class="form-control" id="regno" name="regno" placeholder="Registration Number"
                    value="<?php echo $reg ?>">
                  </div>
                  <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Course"
                    value="<?php echo $course ?>">
                  </div>
                  <div class="form-group">
                    <label for="nid">National ID</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="National Id"
                    value="<?php echo $nid ?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              -->
            </div>
            <div class="modal-footer justify-content-between">
              <a href ="eligibility.php"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-primary" name="signup">Edit Info</button>
            </div>
            </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>


<?php 
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
       // echo "Uploaded";
      }
      else{
        echo "upload failed";
      }
      
        $fname = $_POST["fname"];
        $regno = $_POST["regno"];
        $course = $_POST["course"];
        $nid = $_POST['nid'];
        $stage = 1;

       
          $sql = "UPDATE studentdetails SET fname = '$fname',regno = '$regno',course = '$course',nid = '$nid',picture = '$picture' WHERE id='$eid'";
         $query = mysqli_query($conn, $sql);
          if($query){
            $stats=1;
            echo "$stats";
      
          }
         //header("Location:eligibility.php?stats=$stats");
    }
 }

else{
  $stats=0;
  echo "$stats";
   // header("Location:eligibility.php");
    exit();
}
        
      
?>