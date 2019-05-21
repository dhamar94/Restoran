<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">User</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <div class="alert alert-success">Berhasil !</div>
                            <form class="form-horizontal form-material" id="form">
                                <div class="form-group">
                                    <input type="hidden" required="on" name="id" id="id" value="<?php echo $this->session->userdata("id_user"); ?>">
                                    <label class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" id="username" value="<?php echo $this->session->userdata("username"); ?>" class="form-control form-control-line"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" id="password" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama</label>
                                    <div class="col-md-12">
                                        <input type="text" required="on" id="nama" value="<?php echo $this->session->userdata("nama_user"); ?>" class="form-control form-control-line"> </div>
                                </div>

                                
                              
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>