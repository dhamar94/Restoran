  <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Laporan</h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <?php if ($this->session->userdata("nama_level") == "Owner") { ?>
                                
                            
                       <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-table"></i> Transaksi</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa  fa-list-ul"></i> Menu makanan</a></li>
                        </ul>
                        <?php } ?>
                        <br>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                            <div class="row">



                                <form method="post"  id="form" action="<?php echo site_url('Laporan/hasil') ?>" id="form-laporan">
                                <button class="btn btn-primary" style="margin-top: 25px; margin-right: -10px; ">Filter</button>

                               <?php if ($this->uri->segment(2)=="hasil") { ?> 
                                <button id="print" class="btn btn-primary" style="margin-top: 25px; float: right;"><i class="fa fa-print"></i> Print</button>

                                  <button id="pdf" class="btn btn-danger" style="margin-top: 25px; float: right;"><i class="fa fa-file-pdf-o"></i> Pdf</button>
                                  <button id="excel" class="btn btn-success" style="margin-top: 25px; float: right;"><i class=" fa-file-excel-o fa"></i> Excel</button>
                                  <label style="float: right; margin-right:  20px; margin-top: 35px;">Export: </label>
                               <?php } ?>

                                <div class="col-md-3 " >
                                    <label>Dari tanggal :</label>
                                    <input type="date" value="<?php echo $this->input->post('tanggal1'); ?>" class="form-control" name="tanggal1">
                                </div>
                                <div class="col-md-3 " >
                                    <label>Sampai tanggal :</label>
                                    <input type="date" class="form-control" value="<?php echo $this->input->post('tanggal2'); ?>" name="tanggal2">

                                </div>

                                
                            </div>
                            </form>
                            <!-- <hr> --><br><br>
                            <div class="row">

                                <div class="col-md-12">
                                    
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>No Meja</th>
                                                <th>User</th>
                                                <th>Total Bayar</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="ref">
                                            <?php $hasil=0; $no =1; if ($this->uri->segment(2) == "hasil") {

                                                foreach ($laporan as $key) { ?>
                                                

                                                <tr>
                                                    <td><?php  echo $no++; ?></td>
                                                    <td><?php echo $key->tanggal ?></td>
                                                    <td><?php echo "meja ".$key->no_meja."" ?></td>
                                                    <td><?php echo $key->nama_user ?></td>
                                                    <td><?php echo $key->total_bayar ?></td>
                                                     <?php $hasil =  $hasil+ $key->total_bayar;?>
                                                </tr>  
                                                


                                            
                                                
                                            <?php } }else{?>

                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td style="border:none;"></td>
                                                <td style="border:none;"></td>
                                                <td style="border:none;"></td>
                                                <td><span style="font-size: 20px;">Total :</span></td>
                                                <td><span style="font-size: 20px;">Rp. <?php echo $hasil ?></span></td>
                                            </tr>  
                                        </tfoot>
                                    </table>
                                </div>
                            </div>        



                            </div>
                            <div id="menu1" class="tab-pane fade">


                                <div class="row" style="margin-top: -90px;">

                               
                                    <a target="_blank" href="<?php echo site_url('Laporan/print_owner') ?>"  class="btn btn-primary" style="margin-top: 25px; float: right;"><i class="fa fa-print"></i> Print</a>

                                  <a target="_blank" href="<?php echo site_url('Laporan/pdf_owner')?>"  class="btn btn-danger" style="margin-top: 25px; float: right;"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                  
                                  <label style="float: right; margin-right:  20px; margin-top: 35px;">Export: </label>
                               

                                
                            </div>
                        
                            <br><br>



                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                    </tr>
                                <?php $no=1; foreach ($makanan as $key ) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><img width="100" height="100" src="<?php echo base_url('assets/') ?>image/<?php echo $key->gambar; ?>"></td>
                                        <td><?php echo $key->nama_referensi; ?></td>
                                        <td><?php echo $key->kategori; ?></td>
                                        <td><?php echo $key->harga; ?></td>
                                    </tr>
                                <?php }?>
                                </table>



                            </div> 
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
