<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/data/css/dataTables.bootstrap.min.css">

    <!-- color CSS -->
    <link href="<?php echo base_url() ?>assets/css/colors/blue-dark.css" id="theme" rel="stylesheet">
</head>
<body >
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
      <div class="login-box" sty >
        <div class="white-box"style="background-color: #edf1f5;">
          <form class="form-horizontal form-material" id="loginform" method="post" action="<?php echo site_url('Login/proses') ?>">
            <h3 class="box-title m-b-20">Sign In</h3>
            <?php echo $this->session->flashdata("hasil"); ?>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control" name="username" type="text" required="" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <input class="form-control" type="password" name="password" required="" placeholder="Password">
              </div>
            </div>
            
            <div class="form-group text-center m-t-20">
              <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
              </div>
            </div>
            
          </form>
          
        </div>
      </div>
    </section>
    


</body>


<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url() ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url() ?>assets/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
<!-- datatbles -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/datatables/data/js/dataTables.bootstrap.js"></script>
</html>