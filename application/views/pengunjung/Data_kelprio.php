<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Layanan</h2>
      <ol>
        <li><a href="http://localhost/spkbanjir/#hero">Beranda</a></li>
        <li><a href="http://localhost/spkbanjir/#services">Layanan</a></li>
        <li>Daftar Kelurahan Prioritas Penanganan Banjir</li>
      </ol>
    </div>

  </div>
</section><!-- Breadcrumbs Section -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

<!-- ======= Kodingan daftar kelurahan prioritas ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">
    

    <div class="section-title">
      <h2>Daftar Kelurahan Prioritas Penanganan Banjir</h2>
      <p>di Kota Bengkulu</p>
    </div>

    <!--Kodingan gambar slider-->
    <centre>
    <div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="<?= base_url() ?>/assets/assets_ninestars/assets/img/portfolio/1a.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url() ?>/assets/assets_ninestars/assets/img/portfolio/1b.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url() ?>/assets/assets_ninestars/assets/img/portfolio/1c.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url() ?>/assets/assets_ninestars/assets/img/portfolio/1d.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url() ?>/assets/assets_ninestars/assets/img/portfolio/1e.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url() ?>/assets/assets_ninestars/assets/img/portfolio/1f.jpg" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
    </div>
    </div>
    </centre>
    <!--Akhir kodingan gambar slider-->

    <!--Kodingan judul daftar prioritas-->
    <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">
    

    <div class="section-title">
    <h4><strong>Terdapat 30 titik banjir yang tersebar di Kota Bengkulu, setelah dilakukan perhitungan dengan menggunakan algoritma MOORA didapatkan hasil daftar urutan daerah yang menjadi prioritas untuk dilakukan penanganan banjir oleh Dinas PUPR Kota Bengkulu</strong></h4>
    </div>
    <!--Akhir kodingan gambar slider-->
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
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
                          <?php $no = 1; foreach ($hasil as $key): ?>
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
      <br> </br>

</main><!-- End #main -->