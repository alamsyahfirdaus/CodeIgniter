<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('templates/head.php'); ?>
</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('templates/navbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h4 mb-2 text-gray-800">Tambah Data Mahasiswa</h1>
          <div class="card shadow mb-4 col-md-8">
            <div class="card-body">
              <form method="post" action="<?php site_url('mahasiswa/insert') ?>">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" autofocus="" value="<?= set_value('nim') ?>">
                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap') ?>">
                    <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="no_handphone">No. Handphone</label>
                    <input type="text" class="form-control" id="no_handphone" min="0" name="no_handphone" placeholder="No. Handphone" value="<?= set_value('no_handphone') ?>">
                    <?= form_error('no_handphone', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="program_studi_id">Program Studi</label>
                    <select id="program_studi_id" class="form-control" name="program_studi_id">
                      <option value="<?= set_value('program_studi_id') ?>">Pilih Program Studi</option>
                      <?php
                      $query = $this->db->get('program_studi');
                      foreach ($query->result() as $key): ?>
                      <option value="<?=$key->program_studi_id;?>"><?=$key->nama_program_studi?>
                      <?php endforeach; ?>
                    </select>
                    <?= form_error('program_studi_id', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>

                  </div>
                  <div class="form-group col-md-3">
                    <label for="password2" style="color: white;">Passconf</label>
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
                <a href="<?= site_url('tables/mahasiswa') ?>" class="btn btn-secondary ml-3">Batal</a>
              </form>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view('templates/footer.php'); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view('templates/scroll.php'); ?>

  <!-- Logout Modal-->
  <?php $this->load->view('templates/logout.php'); ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('templates/javascript.php'); ?>

</body>

</html>
