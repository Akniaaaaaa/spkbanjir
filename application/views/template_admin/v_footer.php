</section>
</div>
<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
  </div>
  <div class="footer-right">
    2.3.0
  </div>
</footer>
</div>
</div>

</script>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url(); ?>/assets/template_stisla/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url(); ?>/assets/assets_stisla/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
<script src="<?= base_url(); ?>/assets/assets_stisla/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url(); ?>/assets/assets_stisla/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>/assets/assets_stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url(); ?>/assets/assets_stisla/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="<?= base_url(); ?>/assets/assets_stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url(); ?>/assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url(); ?>/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url(); ?>/assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>/assets/modules/chart.min.js"></script>

<!-- JS Libraies Sweetalert2 -->
<script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.min.js"></script>

<script>
  //sweetalert
  var flash = $('#flash').data('flash');
  if (flash) {
    Swal.fire({
      icon: 'success',
      title: 'Succsess',
      text: flash
    })
  }

  $(document).on('click', '#btn-hapus', function(e) {
    e.preventDefault();
    var link = $(this).attr('href');

    Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data Akan Terhapus!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Berhasil!',
          'Data yang kamu pilih terhapus!',
          'success'
        )
        window.location = link;
      }
    })
  })

  //Grafik
  var ctx = document.getElementById("myChart2").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488, 564, 374, 498, 583, 683],
        borderWidth: 2,
        backgroundColor: '#3d478f',
        borderColor: '#3d478f',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            drawBorder: false,
            color: '#999999',
          },
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          ticks: {
            display: false
          },
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
</script>

<!-- Template JS File -->
<script src="<?= base_url(); ?>/assets/assets_stisla/assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>/assets/assets_stisla/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url(); ?>/assets/assets_stisla/assets/js/page/index-0.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url(); ?>/assets/js/page/modules-datatables.js"></script>

<!-- Page Specific JS File -->
<script src="assets/js/page/bootstrap-modal.js"></script>


</body>

</html>