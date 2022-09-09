<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <h6>About Us</h6>
          <ul>


          <li><a href="aus.php">About Us</a></li>
            <li><a href="faqs.php">FAQs</a></li>
            <li><a href="privacy.php">Privacy</a></li>
          <li><a href="term.php"> ISMS Terms of use</a></li>
          
          </ul>
        </div>

        <div class="col-md-3 col-sm-2 col-md-pull-1">
          <h6>Admin</h6>
          <div class="footer_widgets">
                 
                    <div class="login_btn"> <a href="Admin/adminlogin.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">System Login</a> </div>
                  
                 
                  </div>
        </div>
           
        <div class="col-md-3 col-sm-6">
            <div class="newsletter-form">
              <h6>Subscribe Newsletter</h6>
                 <form method="post">
                   <div class="form-group">
                     <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
                    <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                   </div>
                 </form>
                <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users every week.</p>
               </div>
        </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-pull-0">
          <p style ="color:white"><center><marquee>Copyright 2022 Garden University. All Rights Reserved. Designed & Maintained by Garden_Tech.In partial fullfillment of CCS 304</marquee></center></p>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
