<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
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
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
            <h1><b>Hostel</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Stage 3</a></li>
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
                    <th>Mail</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     $sql = "SELECT * FROM studentdetails WHERE stage=3";
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
                           
                           </tr>
                          ";
                          
                          
                        
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
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
            
                <div class="card-body">
                  <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="checkbox" class="form-control" id="fname" name="fname" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="regno">Registration Number</label>
                    <input type="checkbox" class="form-control" id="regno" name="regno" placeholder="Registration Number">
                  </div>
                  <div class="form-group">
                    <label for="course">Course</label>
                    <input type="checkbox" class="form-control" id="course" name="course" placeholder="Course">
                  </div>
                  <div class="form-group">
                    <label for="nid">National ID</label>
                    <input type="checkbox" class="form-control" id="nid" name="nid" placeholder="National Id">
                  </div>
                  <div class="form-group">
                    <label for="photo">Profile</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo">
                        <label class="custom-file-label" for="photo">Choose file</label>
                      </div>
                    </div>
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
              <button type="submit" class="btn btn-primary" name="signup">Add Student</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
        <!-- /.modal-dialog -->
  <!-- /.content-wrapper -->
   
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
</script>
</body>
</html>