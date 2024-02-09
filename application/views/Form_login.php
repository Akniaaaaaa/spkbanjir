<br>
&nbsp&nbsp<a href="http://localhost/spkbanjir" class="btn btn-warning">Kembali ke Beranda</a>
</br>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-9 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <img src="<?php echo base_url('assets/assets_stisla/assets/img/logoPU.png')?>" alt="logo" width="90" class="shadow-primary">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
              
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('Auth/login') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-danger text-small">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?php echo form_error('password','<div class="text-danger text-small">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA BENGKULU
              <br>Copyright &copy; Stisla 2018</br>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
