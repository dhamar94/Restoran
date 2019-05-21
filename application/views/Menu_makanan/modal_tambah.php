<!-- Modal -->
    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Referensi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="row">
                <form id="form-tambah" method="POST" enctype="multipart/form-data">
                    <!-- <input type="file" name="file"> -->
                    <div class="col-md-6">
                        <label class="form-control" style="height: 225px;"><input id="inpt-gmbr" style="display: none; padding: 90px; cursor: pointer;" type="file" name="file"><img src="<?php echo base_url('assets/') ?>image/no.jpg" style="height: 210px; width: 248px; cursor: pointer;" class="tampil-gambar"></label>
                    </div>
                    <div class="col-md-6">
                       
                        <div class="form-group">
                            <span>Nama Referensi :</span>
                            <input type="text" class="form-control nama_referensi" required="on" name="nama_referensi">
                        </div>
                        <div class="form-group">
                            <span>Harga :</span>
                            <input type="number" class="form-control" required="on" name="harga">
                        </div>
                          <div class="form-group">
                            <span>Kategori :</span>
                            <select class="form-control" name="kategori" required="on">
                                <option>--Pilih--</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span>Status :</span>
                            <select class="form-control" required="on" name="status">
                                <option>--Pilih--</option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                </div>
               
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="simpan">Simpan</button>
             </div>
            </form>
        </div>
      </div>
    </div>

    <style type="text/css">
        .card {
            height: 500px;
        }
        .img-thumbnail{
            width: 300px !important;
            height:  300px !important;
        }
    </style>