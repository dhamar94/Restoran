<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title><?php echo $judul; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
     <link href="<?php echo base_url() ?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url() ?>assets/css/chart.css" rel="stylesheet">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/data/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/jquery-ui/jquery-ui.min.css">
   
    <!-- color CSS -->
    <link href="<?php echo base_url() ?>assets/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color:  #6497b1;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars
"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="<?php echo base_url() ?>assets/plugins/images/pixeladmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="<?php echo base_url() ?>assets/plugins/images/pixeladmin-text.png" alt="home" /></span></a></div>
         
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        
       <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="<?php echo site_url('Dashboard') ?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect <?php echo $active; ?>"><i class="fa  fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">User</span> <i style="float: right;" class="fa fa-caret-down"></i></a>
                        <ul class="nav">
                         <li>
                            <a href="<?php echo site_url('Management_user') ?>" class="waves-effect"><i class="fa fa-circle-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Management User</span></a>
                         </li>
                         <li>
                            <a href="<?php echo site_url('Profile') ?>" class="waves-effect"><i class="fa fa-circle-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                         </li>
                         <li>
                            <a href="<?php echo site_url('Level') ?>" class="waves-effect"><i class="fa fa-circle-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Level</span></a>
                         </li>
                        </ul>
                    </li>

                  
                     <li>
                        <a href="<?php echo site_url('Menu_makanan') ?>" class="waves-effect"><i class="fa  fa-coffee fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Masakan</span></a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('Order') ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Order</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Transaksi') ?>" class="waves-effect"><i class="fa  fa-exchange fa-fw" aria-hidden="true"></i><span class="hide-menu">Transaksi</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Laporan') ?>" class="waves-effect"><i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
                    </li>
                    
                </ul>
                <div class="center p-20">
                    <span class="hide-menu"><a href="<?php echo site_url('Dashboard/log') ?>" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Logout</a></span>
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->