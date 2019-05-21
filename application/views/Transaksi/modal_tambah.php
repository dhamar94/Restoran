<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 750px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <form id="form-tambah">
          <div class="col-md-5">
         <div class="form-group">
            <span>No Meja :</span>
            <div class="row">
                <div class="col-md-10">
                    <input name="no_meja" class="form-control " required="on" type="text" id="no_meja" >
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" id="t_menu" ><i class="fa fa-check"></i></button>
                </div>
            </div>
            <br>
            <div class="form-group">
              <span>Di Bayarkan :</span>
              <input required="on" type="number" class="form-control di_bayarkan" name="bayar" id="i_bayar">
            </div>

            <div class="form-group">
              <span>Kembalian :</span>
              <input type="text" class="form-control" id="kembalian" readonly="on" name="">
            </div>
        </div>
          
        </div>
        <div class="col-md-7">
          <input type="hidden" name="id_order" id="id_order">
          <table  id="tbl"  class="table table-sm table-pesanan table-hover">
            <thead class="thead-invers">
                <tr>
                    <td>No</td>
                    <td>Nama Pesanan</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody class="ol">
                
            </tbody>
            
           
          </table>
          <div class="form-group t_bayar">
           <span >Total Bayar :</span>
           <input type="text" class="form-control total" readonly="on" name="total_bayar">
          </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="smp">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>