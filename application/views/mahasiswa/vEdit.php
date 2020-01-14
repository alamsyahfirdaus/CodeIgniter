<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('templates/head.php'); ?>
</head>
<body id="page-top">
  <div id="wrapper">
    <?php $this->load->view('templates/sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php $this->load->view('templates/navbar.php'); ?>
        <div class="container-fluid">
          <h1 class="h4 mb-2 text-gray-800">Edit Data Mahasiswa</h1>
          <div class="card shadow mb-4 col-md-8">
            <div class="card-body">
              <?php foreach ($mahasiswa as $row) : ?>
              <form method="post" action="<?= site_url('tables/mahasiswa/edit') ?>">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nim">NIM</label>               
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $row->nim?>" readonly>
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $row->nama_lengkap ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $row->email ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="no_handphone">No. Handphone</label>
                    <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $row->no_handphone ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="program_studi_id">Program Studi</label>
                    <div>
                      <?php  
                      $data[''] = 'Pilih Program Studi';
                      $query = $this->db->get('program_studi');
                      foreach ($query->result() as $key){
                        $data[$key->program_studi_id] = $key->nama_program_studi;
                      }
                      echo form_dropdown('program_studi_id', $data, $row->program_studi_id, array('class' => 'form-control'));
                      ?>
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="password2" style="color: white;">Passconf</label>
                    <input type="password" class="form-control" id="password2" name="password2">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
                <a href="<?= site_url('tables/mahasiswa') ?>" class="btn btn-secondary ml-3">Batal</a>
              </form>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('templates/footer.php'); ?>
    </div>
  </div>
  <?php $this->load->view('templates/scroll.php'); ?>
  <?php $this->load->view('templates/logout.php'); ?>
  <?php $this->load->view('templates/javascript.php'); ?>
</body>
</html>
