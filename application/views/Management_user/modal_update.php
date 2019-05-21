<!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width: 38%;" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        
                        <form id="form-update">
                          <input type="text" style="display: none;" name="id" id="id">
                            <div class="form-group">
                                <span>Username :</span>
                                <input type="text" required="on" class="form-control" name="username" id="username" >
                            </div>
                            
                            <div class="form-group">
                                <span>Nama User :</span>
                                <input type="text" required="on" name="nama_user" class="form-control" id="nama_user">
                            </div>
                            <div class="form-group">
                                <span>Level :</span>
                                <select class="form-control" required="on" name="level" id="level">
                                    <option>--Pilih--</option>
                                      <?php foreach ($level as $key ): ?>
                                          <option value="<?php echo $key->id_level; ?>"><?php echo $key->nama_level; ?></option>
                                          
                                      <?php endforeach ?>
                                   
                                </select>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" >
                      </div>
                     </form>
                    </div>
                  </div>
                </div>
                <!-- /.row -->