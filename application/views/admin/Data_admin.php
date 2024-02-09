      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Admin</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <!-- <?php echo $this->session->flashdata('pesan') ?> -->
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Data Admin</h4>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Admin</th>
                            <th class="text-center">Usernama</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                          <?php $no = 1; foreach ($admin as $key): ?>
                            <tr>
                              <td class="text-center"><?php echo $no; ?></td>
                              <td class="text-center"><?php echo $key->nama_admin; ?></td>
                              <td class="text-center"><?php echo $key->username; ?></td>
                              <td class="text-center"><?php echo $key->password; ?></td>
                              <td class="text-center"><?php echo $key->jabatan; ?></td>
                              <td class="text-center">
                              <a href="#" class="btn btn-success" data-toggle="modal" data-target="#editmodal<?= $key->id_admin; ?>">Edit</a>
                              <a href="<?php echo base_url().'admin/Data_admin/hapus/'.$key->id_admin ?>" id="btn-hapus" class="btn btn-danger">Hapus</a>
                              </td>
                              <?php $no++; ?>
                            </tr>

                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Modal Tambah Data Admin-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo base_url().'admin/Data_admin/tambah_aksi'; ?>">
                      
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="text" name="nama_admin" placeholder="Nama Admin" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" placeholder="Password" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" placeholder="Jabatan" class="form-control"></input>
                    </div>

                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" id="btn-load" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Edit Data Admin-->
        <?php foreach($admin as $key): ?>
        <div class="modal fade" id="editmodal<?= $key->id_admin; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/Data_admin/edit'); ?>">
                      
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="hidden" name="id_admin" value="<?= $key->id_admin; ?>"></input>
                        <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="<?= $key->nama_admin; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $key->username; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?= $key->password; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $key->jabatan; ?>"></input>
                    </div>

                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" id="btn-load" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

