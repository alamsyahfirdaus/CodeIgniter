<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('templates/head'); ?>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" action="<?= site_url('register') ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="nim" placeholder="NIM" name="nim" autofocus="" value="<?= set_value('nim') ?>" autocomplete="off">
                      <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
<!--                     <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <!-- <hr> -->
                  </form>
                  <div class="text-center">
                    <!-- <a class="small" href="forgot-password.html">Lupa Password?</a> -->
                  </div>
                  <div class="text-center">
                    <!-- <a class="small" href="<?= site_url('register/create') ?>">Buat Akun Baru!</a> -->
                  </div>
                </div>
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
