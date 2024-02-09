      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Kriteria</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <?php echo $this->session->flashdata('alert'); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Data Kriteria</h4>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Bobot</th>
                            <th>Jenis</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($kriteria as $key) : ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $key->kode_kriteria; ?></td>
                              <td><?php echo $key->nama_kriteria; ?></td>
                              <td><?php echo $key->bobot; ?></td>
                              <td><?php echo $key->jenis; ?></td>
                              <td>
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#editmodal<?= $key->id_kriteria; ?>">Edit</a>
                                <a href="<?php echo base_url() . 'admin/Data_kriteria/hapus/' . $key->id_kriteria ?>" id="btn-hapus" class="btn btn-danger">Hapus</a>
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

        <!-- Modal Tambah Data Kriteria -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo base_url() . 'admin/Data_kriteria/tambah_aksi'; ?>">

                  <div class="form-group">
                    <label>Kode Kriteria</label>
                    <input type="text" name="kode_kriteria" placeholder="Kode Kriteria" class="form-control"></input>
                  </div>

                  <div class="form-group">
                    <label>Nama Kriteria</label>
                    <input type="text" name="nama_kriteria" placeholder="Nama Kriteria" class="form-control"></input>
                  </div>

                  <div class="form-group">
                    <label>Bobot</label>
                    <input type="text" name="bobot" placeholder="Bobot" class="form-control"></input>
                  </div>

                  <div class="form-group">
                    <label>Jenis</label>
                    <select class="form-control" name="jenis">
                      <option disabled selected>Pilih Opsi</option>
                      <option>Benefit</option>
                      <option>Cost</option>
                    </select>
                  </div>

                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>

                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Edit Data Admin-->
        <?php foreach ($kriteria as $key) : ?>
          <div class="modal fade" id="editmodal<?= $key->id_kriteria; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Data Kriteria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?php echo base_url('admin/Data_kriteria/edit'); ?>">

                    <div class="form-group">
                      <label>Kode Kriteria</label>
                      <input type="hidden" name="id_kriteria" value="<?= $key->id_kriteria; ?>"></input>
                      <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="<?= $key->kode_kriteria; ?>"></input>
                    </div>

                    <div class="form-group">
                      <label>Nama Kriteria</label>
                      <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="<?= $key->nama_kriteria; ?>"></input>
                    </div>

                    <div class="form-group">
                      <label>Bobot</label>
                      <input type="text" class="form-control" id="bobot" name="bobot" value="<?= $key->bobot; ?>"></input>
                    </div>

                    <div class="form-group">
                      <label>Jenis</label>
                      <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $key->jenis; ?>"></input>
                    </div>

                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>