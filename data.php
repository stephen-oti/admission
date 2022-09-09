<?php
include 'dbconnect.php';
session_start();
$username = $_SESSION['user'];
include 'dbconnect.php';
 if(!isset($_SESSION['user']))
 {
header('location:login.php');
}
else{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MSU | All students</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="jquery-3.3.1.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
    include 'navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MSU Admission</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $username?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php
      include 'sidebar.php';
      ?>
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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <div class="row">
             <div class="col-md-10">
             
             </div>
             <div class="col-md-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Add Student
                </button>
             </div>
              </div>
                <h3 class="card-title">Student Entries</h3>
              </div>
              <!-- /.card-header -->
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Registration Number</th>
                    <th>Course</th>
                    <th>National ID</th>
                    <th>mail</th>

                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     $sql = "SELECT * FROM studentdetails";
                     $query = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_array($query)) {
                            $no = $row['id'];
                            $fname = $row['fname'];
                            $regno = $row['regno'];
                            $course = $row['course'];
                            $nid = $row['nid'];
                            $mail = $row['mail'];
                          echo "
                            <tr>
                            <td>$no</td>
                            <td>$fname</td>
                            <td>$regno</td>
                            <td>$course</td>
                            <td>$nid</td>
                            <td>$mail</td>
                            <td><button type='button' id='edit-$no' name='edit' class='btn btn-secondary edit' data-toggle='modal'data-target='#modal-another'>Edit</button></td>
                            <td><button type='button' id='del-$no' name='del' class='btn btn-danger del' data-toggle='modal'>Delete</button></td>
                          </tr>";
                          }
                        }
                   
                    ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Registration Number</th>
                    <th>Course</th>
                    <th>National ID</th>
                    <th>mail</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Student Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" action="signupprocess.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name" onkeyup="checkfname()" required>
                    <span id="fname-status" style="font-size: 12px;"></span>
                  </div>
                  <div class="form-group">
                    <label for="regno">Registration Number</label>
                    <input type="text" class="form-control" id="regno" name="regno" placeholder="e.g TMC/00001/001" onkeyup="checkAvailability()" required>
                    <span id="user-availability-status" style="font-size: 12px;"></span>
                  </div>
                  <div class="form-group">
                    <label for="faculty">Faculty</label>
                    <select name="faculty" id="faculty" class="form-control" onchange="getcourses()" required>
                      <option value="null">~~SELECT SCHOOL~~</option>
                      <option value="sci">Computing & Informatics</option>
                      <option value="som">Medicine</option>
                      <option value="soed">Education & Arts</option>
                      <option value="smas">Mathematics & Acturial Studies</option>
                    </select>
                    <span id="course-choosing" style="font-size: 12px;"></span>
                  </div>
                  <div class="form-group">
                    <label for="course">Course</label>
                    <select name="course" id="course" class="form-control">
                      <option value="">~~SELECT PROGRAMME~~</option>
                     
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nid">National ID</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="National Id" onkeyup="checknid()" required>
                    <span id="nid-status" style="font-size: 12px;"></span>
                  </div>
                  <div class="form-group">
                    <label for="regno">Email</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" onkeyup="checkEmail()" required>
                    
                   
                    <span id="mail-status" style="font-size: 12px;"></span>
                  </div>
                  <div class="form-group">
                    <label for="photo">Profile</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo" required>
                        <label class="custom-file-label" for="photo">Choose file</label>
                      </div>
                    </div>
                    <span id="photo-status" style="font-size: 12px; color:red;"></span>
                  </div>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="submit" class="btn btn-primary" name="signup" data-toggle="modal" data-target="#modal-sm">Add Student</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-another">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Student Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
            <form role='form' action='update.php' method='POST'>
              <div id="editor">

              </div>
            <div class='modal-footer justify-content-between'>
              <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
              <button type='submit' id='submit' class='btn btn-primary' name='editdata'>Edit Student</button>
            </div>
          </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="http://adminlte.io">Maseno</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(document).ready(function () {
  bsCustomFileInput.init();
});
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
$(document).ready(function(){
$("#photo").change(function(){
  var file = this.files[0];
  var fileType = file.type;
  var match = ['image/jpeg', 'image/jpg', 'image/png'];

  if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2])) || file.size > 2000000){
    $("#photo-status").html("Ensure file type is jpeg,jpg or png and size below 2mb");
    $('#submit').prop('disabled',true );
  }
  
  else{
    $('#submit').prop('disabled',false ); 
  }
}); 
});

  function checkAvailability(){
    jQuery.ajax({
      url:"checkavailability.php",
      data: 'regno='+$("#regno").val(),
      type: "POST",
      success: function(data){
        $("#user-availability-status").html(data);

      },
      error:function(){}
    });
  }
  function checkEmail(){
    jQuery.ajax({
      url:"checkavailability.php",
      data: 'mail='+$("#mail").val(),
      type: "POST",
      success: function(data){
        $("#mail-status").html(data);

      },
      error:function(){}
    });
  }

  function checknid(){
    jQuery.ajax({
      url:"checkavailability.php",
      data: 'nid='+$("#nid").val(),
      type: "POST",
      success: function(data){
        $("#nid-status").html(data);

      },
      error:function(){}
    });
  }

  function checkfname(){
    jQuery.ajax({
      url:"checkavailability.php",
      data: 'fname='+$("#fname").val(),
      type: "POST",
      success: function(data){
        $("#fname-status").html(data);

      },
      error:function(){}
    });
  }
  function getcourses(){
    jQuery.ajax({
      url:"checkavailability.php",
      data: 'faculty='+$("#faculty").val(),
      type: "POST",
      success: function(data){
        $("#course").html(data);

      },
      error:function(){}
    });
  }

  

  $(document).ready(function(){
    $('.edit').click(function(){
      var id = $(this).attr('id').replace('edit-','');
      jQuery.ajax({
      url:"edit.php",
      data: 'edit='+id,
      type: "POST",
      success: function(data){
        $("#editor").html(data);

      },
      error:function(){}
    });
    });
  })
 

  $(document).ready(function(){
    $('.del').click(function(){
      var id = $(this).attr('id').replace('del-','');
      jQuery.ajax({
      url:"delete.php",
      data: 'del='+id,
      type: "POST",
      success: function(data){
        $("#confirmed").html(data);
        location.reload();

      },
      error:function(){}
    });
    });
  })

</script>
</body>
</html>
<?php } ?>