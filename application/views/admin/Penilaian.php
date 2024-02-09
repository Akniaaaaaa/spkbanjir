<!-- Main Content -->
<div class="main-content">

  <section class="section">
    <div class="section-header">
      <h1>Data Penilaian</h1>
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
              <h4>List Data Penilaian</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Alternatif</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($alternatif as $keys) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $keys->kelurahan; ?></td>
                        <?php $cek_tombol = $this->M_penilaian->untuk_tombol($keys->id_alternatif); ?>
                        <td>
                          <?php if ($cek_tombol == 0) { ?>
                            <a data-toggle="modal" href="#set<?= $keys->id_alternatif ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input</a>
                          <?php } else { ?>
                            <a data-toggle="modal" href="#edit<?= $keys->id_alternatif ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                          <?php } ?>
                        </td>
                        <?php $no++; ?>
                      </tr>
                      <!-- Modal -->


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

  <!-- Modal input Data penilaian -->
  <?php foreach ($alternatif as $alt) : ?>
    <div class="modal fade" id="set<?= $alt->id_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Data Penilaian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url('admin/Data_penilaian/tambah_penilaian'); ?>">
              <?php foreach ($kriteria as $key) : ?>
                <?php
                $sub_kriteria = $this->M_penilaian->data_sub_kriteria($key->id_kriteria);
                ?>
                <?php if ($sub_kriteria != NULL) : ?>
                  <input type="text" name="id_alternatif" value="<?= $alt->id_alternatif ?>" hidden>
                  <input type="text" name="id_kriteria[]" value="<?= $key->id_kriteria ?>" hidden>
                  <div class="form-group">
                    <label class="font-weight-bold" for="<?= $key->id_kriteria ?>"><?= $key->nama_kriteria ?></label>
                    <select name="nilai[]" class="form-control" id="<?= $key->id_kriteria ?>" required>
                      <option value="">--Pilih--</option>
                      <?php foreach ($sub_kriteria as $subs_kriteria) : ?>
                        <option value="<?= $subs_kriteria['id_subkriteria'] ?>"><?= $subs_kriteria['nama_subkriteria'] ?> </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                <?php endif ?>
              <?php endforeach ?>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
          </div>


          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Modal Edit Data Admin-->
  <?php foreach ($alternatif as $alt) : ?>
    <div class="modal fade" id="edit<?= $alt->id_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Data Penilaian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url('admin/Data_penilaian/update_penilaian'); ?>">
              <?php foreach ($kriteria as $key) : ?>
                <?php
                $sub_kriteria = $this->M_penilaian->data_sub_kriteria($key->id_kriteria);
                ?>
                <?php if ($sub_kriteria != NULL) : ?>
                  <input type="text" name="id_alternatif" value="<?= $alt->id_alternatif ?>" hidden>
                  <input type="text" name="id_kriteria[]" value="<?= $key->id_kriteria ?>" hidden>
                  <div class="form-group">
                    <label class="font-weight-bold" for="<?= $key->id_kriteria ?>"><?= $key->nama_kriteria ?></label>
                    <select name="nilai[]" class="form-control" id="<?= $key->id_kriteria ?>" required>
                      <option value="">--Pilih--</option>
                      <?php foreach ($sub_kriteria as $subs_kriteria) : ?>
                        <option value="<?= $subs_kriteria['id_subkriteria'] ?>" <?php
                                                                                $query = $this->db->query("SELECT nilai FROM tb_penilaian WHERE id_alternatif=$alt->id_alternatif AND id_kriteria=$key->id_kriteria;");
                                                                                $result = $query->row();
                                                                                if ($result->nilai == $subs_kriteria['id_subkriteria']) {
                                                                                  echo 'selected';
                                                                                }
                                                                                ?>><?= $subs_kriteria['nama_subkriteria'] ?> </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                <?php endif ?>
              <?php endforeach ?>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>
</div>