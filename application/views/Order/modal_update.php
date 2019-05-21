<!-- Modal -->
        <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-update">
                            <div class="row">
                            <div class="col-md-5">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <span>No Meja :</span>
                                    <input type="number" id="no_meja" name="no_meja" oninvalid="this.setCustomValidity('Masukan No Meja')" oninput="this.setCustomValidity('')"  required="on" class="form-control no_meja_t">
                                </div>
                                <div class="form-group">
                                    <span>Keterangan :</span>
                                    <textarea class="form-control" id="keterangan" name="keterangan" oninvalid="this.setCustomValidity('Masukan Keterangan')" oninput="this.setCustomValidity('')"  required="on"  rows="4"></textarea>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <input type="hidden" name="status" id="status_u">

                                <div class="form-group">
                                    <span>Pesanan :</span>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <input name="pesanan" class="form-control pesanan_u" type="text" >
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                
                                                <input name="no"  id="no_u" class="form-control" type="number">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" id="t_menu_u"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <br> -->
                                <table   class="table table_pesanan table-sm table-hover">
                                    <thead class="thead-invers">
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Pesanan</td>
                                            <td>Jumlah</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody class="ols">
                                        
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Simpan" name="">
                    </div>
                        </form>
                </div>
            </div>
        </div>

        <style type="text/css">
            .list_u li{
                padding: 2px !important;
            }
         </style>
        

        