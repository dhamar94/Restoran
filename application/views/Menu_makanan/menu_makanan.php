<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Menu Masakan</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Menu Masakan</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modal-tambah" style="float: right; padding-top: -20px;"><i class="fa fa-plus"></i> Tambah Menu</button>
                <br>
                <br><br>
                <div class="alert alert-success">Berhasil!</div>
                <div class="alert alert-danger">Gagal!</div>
                <!-- .row -->
                <div class="row ref">

                <?php foreach ($referensi as $key): ?>
                   <div class="col-md-3">
                     <div class="card" style="background-color: white; ">

                      <div class="i">
                        <img class="card-img-top img gambar " style="width: 100%; height: auto;" src="<?php echo base_url('assets/') ?>image/<?php echo $key->gambar; ?>" alt="Card image cap">

                        </div>
                        <div class="card-body" style="padding-bottom: 10px; padding-right: 1px; padding-left: 10px;">
                          <h4 class="card-title"><?php echo $key->nama_referensi; ?></h4>
                          <h4 class="card-title"><?php echo"Rp.". $key->harga; ?></h4>
                          <p class="card-text"><?php echo $key->status_referensi; ?>.</p>
                          <div class="btn btn-<?php if($key->kategori == "Makanan"){echo "info";}else{echo "success";} ?> btn-sm"><?php echo $key->kategori; ?></div>
                         
                         <button data="<?php echo $key->id_referensi; ?>" gambar="<?php echo $key->gambar; ?>" class="hapus btn btn-danger btn-sm " style="float: right; margin-right: 10px;" ><i class="fa fa-trash hapus"></i></button>
                         <button data="<?php echo $key->id_referensi; ?>" gambar="<?php echo $key->gambar; ?>" style="float: right;" class="btn btn-warning btn-sm edit"><i class="fa fa-edit edit"></i></button>



                        </div>
                      </div>
                      <br>
                   </div>

                  
                <?php endforeach ?>


                    

                </div>

                <style type="text/css">
                  .card{
                    height: auto !important;
                    padding-top: -20px;
                  }
                  
                  .aksi{
                    position: relative;
                    margin: 0px;
                    margin-bottom: -200px;
                    left: 35%;

                  }
                  .ak{
                    position: absolute;
                    right: auto;
                    background-color: transparent;
                    border:transparent;
                    margin-bottom: -100px;
                  }
                  
                  


                </style>

                <!-- /.row -->