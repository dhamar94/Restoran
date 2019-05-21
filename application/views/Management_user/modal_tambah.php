<!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width: 50%;" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <form id="form-tambah">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <span>Username :</span>
                                    <input type="text"  oninvalid="this.setCustomValidity('Masukan Username')" oninput="this.setCustomValidity('')"  required="on" class="username  form-control" name="username" >
                                </div>
                                <div class="form-group">
                                    <span>Password :</span>
                                    <input type="password" id="password_t" oninvalid="this.setCustomValidity('Masukan Password')" oninput="this.setCustomValidity('')"  required="on" class="password form-control" name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Nama User :</span>
                                    <input type="text" name="nama_user" id="nama_user_t" oninvalid="this.setCustomValidity('Masukan Nama user')" oninput="this.setCustomValidity('')"  required="on" class="nama_user form-control">
                                </div>
                                <div class="form-group">
                                    <span>Level :</span>
                                    <select class="form-control level" name="level" id="level_t"oninvalid="this.setCustomValidity('Masukan Level')" oninput="this.setCustomValidity('')"  required="on" required="on">
                                        <option>--Pilih--</option>
                                        <?php foreach ($level as $key ): ?>
                                            <option value="<?php echo $key->id_level; ?>"><?php echo $key->nama_level; ?></option>
                                            
                                        <?php endforeach ?>
                                       
                                    </select>
                                </div>
                            </div>
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
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; Ujikom SMK YPC-Tasikmalaya </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>