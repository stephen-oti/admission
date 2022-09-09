
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MSU | Student ID</title>
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
 

 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studlogin.php">Login</a></li>
              <li class="breadcrumb-item active">Student ID</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
       

       
        

        <div class="row">
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
           
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?php echo $fullname?></h3>
                <h5 class="widget-user-desc">Student</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?php echo $picsrc?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <span style="color: blue;font-weight:700;font-size:18px;">Reg_No</span>
                      <h5 class="description-header"><?php echo $regno?></h5>
                     
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                    <span style="color: blue;font-weight:700;font-size:18px;">Course</span>
                      <h5 class="description-header"><?php echo $course?></h5>
                      
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                    <span style="color: blue;font-weight:700;font-size:18px;">Mail</span>
                      <h5 class="description-header"><?php echo $mail?></h5>
                     
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
   

  
  <!-- </div> -->
 

 

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>