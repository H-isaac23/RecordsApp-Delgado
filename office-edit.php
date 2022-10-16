<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
  <?php
    require('config/config.php');
    require('config/db.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM office WHERE id=". $id;
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1) {
      $office = mysqli_fetch_array($result);
      $name = $office['name'];
      $contactnum = $office['contactnum'];
      $email = $office['email'];
      $address = $office['address'];
      $city = $office['city'];
      $country = $office['country'];
      $postal = $office['postal'];
    }

    mysqli_free_result($result);

    mysqli_close($conn);

  ?> 
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <?php include('includes/sidebar.php'); ?>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include('includes/navbar.php');?>
            <?php 
              require('config/db.php');
              if(isset($_POST['submit'])) {
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $address = mysqli_real_escape_string($conn, $_POST['name']);
                $city = mysqli_real_escape_string($conn, $_POST['city']);
                $country = mysqli_real_escape_string($conn, $_POST['country']);
                $postal = mysqli_real_escape_string($conn, $_POST['postal']);

                $query = "UPDATE office SET name='$name', contactnum='$contactnum', email='$email', address='$address', city='$city', country='$country', postal='$postal'
                  WHERE id=". $id;
  
                if(mysqli_query($conn, $query)){
  
                } else {
                  echo 'ERROR: '.mysqli_error($conn);
                }
              }
            ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label for="name">Office</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label for="contactnum">Contact Number</label>
                                                    <input type="text" class="form-control" name="contactnum" value="<?php echo $contactnum;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">Address / Building</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo $address;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" class="form-control" name="city" value="<?php echo $city;?>"> 
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label for="country">Country</label>
                                                    <input type="text" class="form-control" name="country" value="<?php echo $country;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label for="postal">Postal Code</label>
                                                    <input type="text" class="form-control" name="postal" value="<?php echo $postal;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" value="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
