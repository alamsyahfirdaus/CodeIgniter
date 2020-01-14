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

          <!-- Page Heading -->
          <h1 class="h4 mb-2 text-gray-800"><?= $heading; ?></h1>

          <!-- DataTales Example -->
          <div class="row">

            <div class="col-xl-9 col-lg-8">
              <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-sm-5 col-form-label">NIM</label>
                    <label class="col-sm-5 col-form-label"><?= $detail['nim']; ?></label>
                  </div>
                  <div class="row">
                    <label class="col-sm-5 col-form-label">Nama Lengkap</label>
                    <label class="col-sm-5 col-form-label"><?= $detail['nama_lengkap']; ?></label>
                  </div>
                  <div class="row">
                    <label class="col-sm-5 col-form-label">Email</label>
                    <label class="col-sm-5 col-form-label"><?= $detail['email']; ?></label>
                  </div>
                  <div class="row">
                    <label class="col-sm-5 col-form-label">No. Handphone</label>
                    <label class="col-sm-5 col-form-label"><?= $detail['no_handphone']; ?></label>
                  </div>
                  <div class="row">
                    <label class="col-sm-5 col-form-label">Program Studi</label>
                    <label class="col-sm-5 col-form-label"><?= $detail['nama_program_studi']; ?></label>
                  </div>
                  <div class="row">
                    <label class="col-sm-5 col-form-label">Fakutas</label>
                    <label class="col-sm-5 col-form-label"><?= $detail['fakultas_name']; ?></label>
                  </div>
                </div>
              </div>
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

  <div class="modal fade" id="prodi" tabindex="-1" role="dialog" aria-labelledby="prodi" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title m-0 font-weight-bold text-primary" id="prodi">Tambah Program Studi</h6>
        </div>
        <div class="modal-body">
         <form action="">
           <div class="form-group">
             <input type="email" class="form-control" id="fakultas" name="fakultas" placeholder="Program Studi">
           </div>
           <div class="form-group">
             <!-- <label for="program_studi_id">Program Studi</label> -->
             <select id="fakultas_id" class="form-control" name="fakultas_id">
               <option selected="">Pilih Fakultas</option>
               <?php
               $query = $this->db->get('fakultas');
               foreach ($query->result() as $key): ?>
               <option value="<?=$key->fakultas_id;?>"><?=$key->fakultas_name;?></option>
               <?php endforeach; ?>
             </select>
           </div>
         </form>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>