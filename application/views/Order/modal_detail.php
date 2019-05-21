<!-- Modal -->
        <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                            <div class="col-md-5">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <span>No Meja :</span>
                                    <input type="number" readonly="on"  name="no_meja" required="on" class="form-control no_meja">
                                </div>
                                <div class="form-group">
                                    <span>Keterangan :</span>
                                    <textarea class="form-control keterangan" readonly="on"  rows="4"></textarea>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <!-- <br> -->
                                <table   class="table table_pesanan table-sm table-hover">
                                    <thead class="thead-invers">
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Pesanan</td>
                                            <td>Jumlah</td>
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
        

        