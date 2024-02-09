      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Rangking</h1>
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
                    <h4>Nilai Akhir dan Rangking</h4>
                    <a href="<?php echo base_url('admin/Cetak_rangking') ?>" class="btn btn-warning">Cetak Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kelurahan</th>
                            <th class="text-center">Kecamatan</th>
                            <th class="text-center">Nilai Yi</th>
                            <th class="text-center">Rangking</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($hasil as $key) : ?>
                            <tr>
                              <td class="text-center"><?php echo $no; ?></td>
                              <td class="text-center"><?php echo $key->kelurahan; ?></td>
                              <td class="text-center"><?php echo $key->kecamatan; ?></td>
                              <td class="text-center"><?php echo $key->hasil; ?></td>
                              <td class="text-center"><?php echo $no; ?></td>

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
      </div>