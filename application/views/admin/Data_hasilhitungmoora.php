      <!-- Main Content -->
      <div class="main-content">

        <section class="section">
          <div class="section-header">
            <h1>Perhitungan MOORA</h1>
          </div>
        </section>
        <?php if ($sum_kriteria * $sum_alternatif != $sum_penilaian) { ?>
          Silahkan isi tabel penilaian
        <?php } else { ?>

          <?php
          //Matrix Keputusan (X)
          $matriks_x = array();
          foreach ($alternatifs as $alternatif) :
            foreach ($kriterias as $kriteria) :

              $id_alternatif = $alternatif->id_alternatif;
              $id_kriteria = $kriteria->id_kriteria;

              $data_pencocokan = $this->M_datahasilhitungmoora->data_nilai($id_alternatif, $id_kriteria);
              $nilai = $data_pencocokan['nilai'];

              $matriks_x[$id_kriteria][$id_alternatif] = $nilai;
            endforeach;
          endforeach;

          //Matriks Ternormalisasi (R)
          $matriks_r = array();
          foreach ($matriks_x as $id_kriteria => $penilaians) :

            $jumlah_kuadrat = 0;
            foreach ($penilaians as $penilaian) :
              $jumlah_kuadrat += pow($penilaian, 2);
            endforeach;
            $akar_kuadrat = sqrt($jumlah_kuadrat);

            foreach ($penilaians as $id_alternatif => $penilaian) :
              $matriks_r[$id_kriteria][$id_alternatif] = $penilaian / $akar_kuadrat;
            endforeach;

          endforeach;

          //Matriks Normalisasi Terbobot
          $matriks_rb = array();
          foreach ($alternatifs as $alternatif) :
            foreach ($kriterias as $kriteria) :

              $bobot = $kriteria->bobot;
              $id_alternatif = $alternatif->id_alternatif;
              $id_kriteria = $kriteria->id_kriteria;

              $nilai_r = $matriks_r[$id_kriteria][$id_alternatif];
              $matriks_rb[$id_kriteria][$id_alternatif] = $bobot * $nilai_r;

            endforeach;
          endforeach;

          //Nilai Yi
          $nilai_y_max = array();
          $nilai_y_min = array();
          foreach ($alternatifs as $alternatif) :
            $total_max = 0;
            $total_min = 0;
            foreach ($kriterias as $kriteria) :

              $id_alternatif = $alternatif->id_alternatif;
              $id_kriteria = $kriteria->id_kriteria;
              $type_kriteria = $kriteria->jenis;

              $nilai_rb = $matriks_rb[$id_kriteria][$id_alternatif];

              if ($type_kriteria == 'Benefit') :
                $total_max += $nilai_rb;
              elseif ($type_kriteria == 'Cost') :
                $total_min += $nilai_rb;
              endif;
            endforeach;
            $nilai_y_max[$id_kriteria][$id_alternatif] = $total_max;
            $nilai_y_min[$id_kriteria][$id_alternatif] = $total_min;
          endforeach;

          ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-calculator"></i> Data Perhitungan</h1>
          </div>

          <div class="card shadow mb-4">
            <!-- /.card-header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Matrix Keputusan (X)</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead class="bg-info text-white">
                    <tr align="center">
                      <th width="5%" rowspan="2">No</th>
                      <th>Nama Alternatif</th>
                      <?php foreach ($kriterias as $kriteria) : ?>
                        <th><?= $kriteria->kode_kriteria ?></th>
                      <?php endforeach ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($alternatifs as $alternatif) : ?>
                      <tr align="center">
                        <td><?= $no; ?></td>
                        <td align="left"><?= $alternatif->kelurahan ?></td>
                        <?php
                        foreach ($kriterias as $kriteria) :
                          $id_alternatif = $alternatif->id_alternatif;
                          $id_kriteria = $kriteria->id_kriteria;
                          echo '<td>';
                          echo $matriks_x[$id_kriteria][$id_alternatif];
                          echo '</td>';
                        endforeach
                        ?>
                      </tr>
                    <?php
                      $no++;
                    endforeach
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <!-- /.card-header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Bobot Preferensi (W)</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead class="bg-info text-white">
                    <tr align="center">
                      <?php foreach ($kriterias as $kriteria) : ?>
                        <th><?= $kriteria->kode_kriteria ?> (<?= $kriteria->jenis ?>)</th>
                      <?php endforeach ?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr align="center">
                      <?php foreach ($kriterias as $kriteria) : ?>
                        <td>
                          <?php
                          echo $kriteria->bobot;
                          ?>
                        </td>
                      <?php endforeach ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <!-- /.card-header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Matriks Ternormalisasi (R)</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead class="bg-info text-white">
                    <tr align="center">
                      <th width="5%" rowspan="2">No</th>
                      <th>Nama Alternatif</th>
                      <?php foreach ($kriterias as $kriteria) : ?>
                        <th><?= $kriteria->kode_kriteria ?></th>
                      <?php endforeach ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($alternatifs as $alternatif) : ?>
                      <tr align="center">
                        <td><?= $no; ?></td>
                        <td align="left"><?= $alternatif->kelurahan ?></td>
                        <?php
                        foreach ($kriterias as $kriteria) :
                          $id_alternatif = $alternatif->id_alternatif;
                          $id_kriteria = $kriteria->id_kriteria;
                          echo '<td>';
                          echo round($matriks_r[$id_kriteria][$id_alternatif], 4);
                          echo '</td>';
                        endforeach;
                        ?>
                      </tr>
                    <?php
                      $no++;
                    endforeach
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div class="card shadow mb-4">
            <!-- /.card-header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Matriks Normalisasi Terbobot</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead class="bg-info text-white">
                    <tr align="center">
                      <th width="5%" rowspan="2">No</th>
                      <th>Nama Alternatif</th>
                      <?php foreach ($kriterias as $kriteria) : ?>
                        <th><?= $kriteria->kode_kriteria ?></th>
                      <?php endforeach ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($alternatifs as $alternatif) : ?>
                      <tr align="center">
                        <td><?= $no; ?></td>
                        <td align="left"><?= $alternatif->kelurahan ?></td>
                        <?php
                        foreach ($kriterias as $kriteria) :
                          $id_alternatif = $alternatif->id_alternatif;
                          $id_kriteria = $kriteria->id_kriteria;
                          echo '<td>';
                          echo round($matriks_rb[$id_kriteria][$id_alternatif], 4);
                          echo '</td>';
                        endforeach;
                        ?>
                      </tr>
                    <?php
                      $no++;
                    endforeach
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <!-- /.card-header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Menghitung Nilai Yi</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead class="bg-info text-white">
                    <tr align="center">
                      <th width="5%" rowspan="2">No</th>
                      <th>Nama Alternatif</th>
                      <th>Maximun (
                        <?php foreach ($kriterias as $kriteria) :
                          if ($kriteria->jenis == "Benefit") {
                            echo $kriteria->kode_kriteria . " ";
                          }
                        endforeach
                        ?>)
                      </th>
                      <th>Minimum (
                        <?php foreach ($kriterias as $kriteria) :
                          if ($kriteria->jenis == "Cost") {
                            echo $kriteria->kode_kriteria . " ";
                          }
                        endforeach
                        ?>)
                      </th>
                      <th>Yi = Max - Min</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $this->M_datahasilhitungmoora->hapus_hasil_moora();
                    foreach ($alternatifs as $alternatif) : ?>
                      <tr align="center">
                        <td><?= $no; ?></td>
                        <td align="left"><?= $alternatif->kelurahan ?></td>
                        <?php
                        $total_max = 0;
                        $total_min = 0;
                        foreach ($kriterias as $kriteria) :
                          $id_alternatif = $alternatif->id_alternatif;
                          $id_kriteria = $kriteria->id_kriteria;
                          $nilai_rb = round($matriks_rb[$id_kriteria][$id_alternatif], 4);
                          if ($kriteria->jenis == "Benefit") {
                            $total_max += $nilai_rb;
                          } else {
                            $total_min += $nilai_rb;
                          }
                        endforeach;
                        ?>
                        <td>
                          <?= $total_max; ?>
                        </td>
                        <td>
                          <?= $total_min; ?>
                        </td>
                        <td>
                          <?= $hasil = $total_max - $total_min; ?>
                        </td>
                      </tr>
                    <?php
                      $no++;
                      $hasil_akhir = [
                        'id_alternatif' => $alternatif->id_alternatif,
                        'nilai' => $hasil
                      ];
                      $this->M_datahasilhitungmoora->insert_hasil_moora($hasil_akhir);
                    endforeach
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <?php } ?>
        <!-- <div class="section-body">
            <div class="row">
              <div class="col-12">
                <?php echo $this->session->flashdata('alert'); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Matriks Keputusan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                            <th>K8</th>
                            <th>K9</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($matrikskeputusan as $key) : ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $key->kelurahan; ?></td>
                              <td><?php echo $key->kecamatan; ?></td>
                              <td><?php echo $key->k1; ?></td>
                              <td><?php echo $key->k2; ?></td>
                              <td><?php echo $key->k3; ?></td>
                              <td><?php echo $key->k4; ?></td>
                              <td><?php echo $key->k5; ?></td>
                              <td><?php echo $key->k6; ?></td>
                              <td><?php echo $key->k7; ?></td>
                              <td><?php echo $key->k8; ?></td>
                              <td><?php echo $key->k9; ?></td>
                              <?php $no++; ?>
                            </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

        <!-- <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Bobot Preferensi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>                                 
                          <tr>
                            <th>K1 (benefit)</th>
                            <th>K2 (benefit)</th>
                            <th>K3 (benefit)</th>
                            <th>K4 (benefit)</th>
                            <th>K5 (benefit)</th>
                            <th>K6 (benefit)</th>
                            <th>K7 (benefit)</th>
                            <th>K8 (benefit)</th>
                            <th>K9 (benefit)</th>
                          </tr>
                        </thead>
                        <tbody>              
                            <tr>
                              <td>15</td>
                              <td>15</td>
                              <td>15</td>
                              <td>15</td>
                              <td>8</td>
                              <td>8</td>
                              <td>8</td>
                              <td>8</td>
                              <td>8</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

        <!-- <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Matriks Ternormalisasi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                            <th>K8</th>
                            <th>K9</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($hasil as $key) : ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $key->kelurahan; ?></td>
                              <td><?php echo $key->kecamatan; ?></td>
                              <td><?php echo $key->k1_normalisasi; ?></td>
                              <td><?php echo $key->k2_normalisasi; ?></td>
                              <td><?php echo $key->k3_normalisasi; ?></td>
                              <td><?php echo $key->k4_normalisasi; ?></td>
                              <td><?php echo $key->k5_normalisasi; ?></td>
                              <td><?php echo $key->k6_normalisasi; ?></td>
                              <td><?php echo $key->k7_normalisasi; ?></td>
                              <td><?php echo $key->k8_normalisasi; ?></td>
                              <td><?php echo $key->k9_normalisasi; ?></td>
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

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Nilai Optimasi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                            <th>K8</th>
                            <th>K9</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($hasil as $key) : ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $key->kelurahan; ?></td>
                              <td><?php echo $key->kecamatan; ?></td>
                              <td><?php echo $key->k1_optimalisasi; ?></td>
                              <td><?php echo $key->k2_optimalisasi; ?></td>
                              <td><?php echo $key->k3_optimalisasi; ?></td>
                              <td><?php echo $key->k4_optimalisasi; ?></td>
                              <td><?php echo $key->k5_optimalisasi; ?></td>
                              <td><?php echo $key->k6_optimalisasi; ?></td>
                              <td><?php echo $key->k7_optimalisasi; ?></td>
                              <td><?php echo $key->k8_optimalisasi; ?></td>
                              <td><?php echo $key->k9_optimalisasi; ?></td>
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

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Menghitung Nilai Yi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Maximum (K1, K2, K3, K4, K5, K6, K7, K8, K9)</th>
                            <th>Minimum (0)</th>
                            <th>Yi = Max - Min</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($hasil as $key) : ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $key->kelurahan; ?></td>
                              <td><?php echo $key->kecamatan; ?></td>
                              <td><?php echo $key->benefit; ?></td>
                              <td><?php echo $key->cost; ?></td>
                              <td><?php echo $key->hasil; ?></td>
                              <?php $no++; ?>
                            </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

      </div>
      </section>
      </div>