<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('templates/head'); ?>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
              </div>
              <form class="user" action="<?= site_url('register/create') ?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nim" placeholder="NIM" name="nim" value="<?= set_value('nim') ?>">
                  <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>">
                  <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" placeholder="Ulangi Password" name="password2">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftar
                </button>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= site_url('register') ?>">Sudah punya akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
<?php $this->load->view('templates/javascript'); ?>

</body>

</html>
