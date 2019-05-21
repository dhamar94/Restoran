<!-- Modal -->
        <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 650px;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu Masakan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-tambah">
                            <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <span>No Meja :</span>
                                    <input id="no_meja_t" type="number" name="no_meja" oninvalid="this.setCustomValidity('Masukan No Meja')" oninput="this.setCustomValidity('')"  required="on" class="form-control no_meja_t">
                                </div>
                                <div class="form-group">
                                    <span>Keterangan :</span>
                                    <textarea class="form-control" name="keterangan" oninvalid="this.setCustomValidity('Masukan Keterangan')" oninput="this.setCustomValidity('')"  required="on"  rows="4"></textarea>
                                </div>
                                <div id="robot"></div>
                            </div>

                            <div class="col-md-7">

                                <div class="form-group">
                                    <span>Pesanan :</span>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <input name="pesanan" class="form-control pesanan" type="text" >
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                
                                                <input name="no"  id="no" class="form-control" type="number">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" id="t_menu"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <br> -->
                                <table   class="table table-sm table-pesanan table-hover">
                                    <thead class="thead-invers">
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Pesanan</td>
                                            <td>Jumlah</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody class="ol">
                                        
                                        
                                    </tbody>
                                </table>
                                <ol class="dai">
                                    
                                </ol>
                                <!-- <ol style="height: auto;" class="list form-control">
                                    
                                </ol>
                                 -->
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="submit" class="btn btn-primary"> Simpan</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
        <style type="text/css">
            .ui-autocomplete
                {
                    position:absolute;
                    cursor:default;
                    z-index:4000 !important
                }

            .psn{
                width: 80px;
                border-top: none;
                border-right: none;
                border-left: none;
                margin-top: -10px;
            }
        </style>
        