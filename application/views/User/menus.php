
<!doctype html>
<html lang="en">

<!-- Mirrored from demo.g-axon.com/mouldifi-bs4/bottom-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 09:06:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <title>Menu Makanan</title>

    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url() ?>assets/user/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/user/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!-- sprite-flags-master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/user/fonts/sprite-flags-master/sprite-flags-32x32.css">
    <!-- /sprite-flags-master stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="<?php echo base_url() ?>assets/user/css/mouldifi-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="<?php echo base_url() ?>assets/user/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Mouldifi-core stylesheet -->
    <link href="<?php echo base_url() ?>assets/user/css/mouldifi-core.css" rel="stylesheet">
    <!-- /mouldifi-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="<?php echo base_url() ?>assets/user/css/theme-indigo.min.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

</head>

<body id="body" data-theme="indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
    <div id="menu" class="side-nav gx-sidebar">
        <div class="navbar-expand-lg">
            <!-- Sidebar header  -->
            <div class="sidebar-header">
                <a class="site-logo" href="index-2.html">
                    <img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="Mouldifi" title="Mouldifi">
                </a>
            </div>
            <!-- /sidebar header -->

            <!-- Main navigation -->
            <div id="main-menu" class="main-menu navbar-collapse collapse">
                <ul class="nav-menu">

                    <li class="nav-header">Main</li>
                    <li class="menu no-arrow selected ">
                        <a href="<?php echo site_url('Menu') ?>">
                            <i class="zmdi zmdi-local-dining zmdi-hc-fw " ></i>
                            <span class="nav-text"> Daftar Menu </span>
                        </a>
                        
                    </li>
                    <li class="menu no-arrow">
                        <a href="<?php echo site_url('Pesanan') ?>">
                            <i class="zmdi zmdi-shopping-cart zmdi-hc-fw" ></i>
                            <span class="nav-text">Daftar Pesanan</span>
                        </a>
                    </li>

                     <li class="menu no-arrow">
                        <a href="<?php echo site_url('Hasil') ?>">
                            <i class="zmdi zmdi-widgets zmdi-hc-fw" ></i>
                            <span class="nav-text">Proses Pemesanan</span>
                        </a>
                    </li>
                    

                
                </ul>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <!-- /page sidebar -->


    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
        <header class="main-header">

            <div class="gx-toolbar">
                <div class="sidebar-mobile-menu">
                    <a class="gx-menu-icon menu-toggle" href="#menu">
                        <span class="menu-icon icon-grey"></span>
                    </a>
                </div>

                <div class="search-bar right-side-icon bg-transparent d-none d-sm-block">
                    <div class="form-group">
                        <input class="form-control border-0" placeholder="Search in app..." value="" type="search">
                        <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i></button>
                    </div>
                </div>

                <ul class="quick-menu header-notifications ml-auto">
                   
                   
                    <li class="dropdown notif_cart">
                        <?php if (empty($this->cart->contents())) { ?>
                            <a href="<?php echo site_url('Pesanan') ?>"  aria-haspopup="true" class="d-inline-block" aria-expanded="true">
                            <i class="zmdi zmdi-shopping-cart animated infinite wobble">
                                
                            </i>

                        </a>  
                        <?php }else{ ?>
                           <a href="<?php echo site_url('Pesanan') ?>"  aria-haspopup="true" class="d-inline-block" aria-expanded="true">
                            <i class="zmdi zmdi-shopping-cart icons-alert animated infinite wobble">
                                
                            </i>

                        </a>  

                        <?php }?>
                       
                        

                        <div role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-perfectscrollbar">
                                <div class="messages-list">
                                    <ul class="list-unstyled">
               
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </li>

                    <li class="dropdown">
                       
                        <div class="dropdown-menu dropdown-menu-right" data-placement="bottom-end" data-x-out-of-boundaries="">
                            <div class="dropdown-menu-perfectscrollbar1">
                                <div class="messages-list">
                                    <ul class="list-unstyled">
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown user-nav">
                    
                    </li>
                </ul>
            </div>
        </header>
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--/gx-wrapper-->
            <div class="gx-wrapper">

                <div class="animated slideInUpTiny animation-duration-3">
                    <div class="page-heading">
                        <h2 class="title">Daftar Makanan</h2>
                    </div>
                    <div class="al">
                        
                    </div>

                    <div class="row">
                        <?php foreach ($makanan as $key) { ?>
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card">
                                <img class="card-img-top" style="size: cover;" src="<?php echo base_url(); ?>/assets/image/<?php echo $key->gambar; ?>"
                                     alt="Card image cap">
                                <div class="product-details card-body">
                                    <h3 class="card-title" style="font-size: 20px; padding-bottom: 10px;"><?php echo $key->nama_referensi; ?></h3>
                                    <h5 class="card-subtitle" style="font-size: 16px;"><?php echo"Rp". $key->harga; ?></h5>
                                   <p class="card-text"><?php echo $key->kategori; ?> <br> <?php echo $key->status_referensi ?></p>
                                    <button style="cursor: pointer;"  class="btn btn-outline-primary cart gx-btn-sm " id_referensi="<?php echo $key->id_referensi; ?>" nama_referensi="<?php echo $key->nama_referensi; ?>"  harga_referensi="<?php echo $key->harga; ?>" gambar="<?php echo $key->gambar; ?>">
                                        <i class="zmdi zmdi-shopping-cart"></i>&nbsp; <span>Tambahkan keranjang</span></button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>

            </div>

            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> Copyright Company Name © 2018</p>
                    <a href="https://wrapbootstrap.com/theme/mouldifi-rtl-supported-admin-theme-WB009538N" class="btn-link" target="_blank">BUY NOW</a>
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

       <!-- /Theme Options Button -->

</div>
<!-- /page container -->

<!-- Right Sidebar-->
<div id="colorSidebar" class="app-sidebar-content right-sidebar">

        <div class="color-theme-body">
        </div>
    </div>
</div>
<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<script src="<?php echo base_url() ?>assets/user/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="<?php echo base_url() ?>assets/user/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="<?php echo base_url() ?>assets/user/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="<?php echo base_url() ?>assets/user/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--Custom JQuery-->
<script src="<?php echo base_url() ?>assets/user/js/functions.js"></script>
<script src="<?php echo base_url() ?>assets/user/js/custom/bottom-navigation.js"></script>

</body>

<!-- Mirrored from demo.g-axon.com/mouldifi-bs4/bottom-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 09:06:48 GMT -->
</html>