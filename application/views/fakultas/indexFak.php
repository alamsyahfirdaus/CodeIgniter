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
          <h1 class="h4 mb-2 text-gray-800">Fakultas</h1>

          <!-- DataTales Example -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <?= $this->session->flashdata('message'); ?>
                <div class="card-header">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fakultas" data-whatever="@mdo"><i class="fas fa-plus"></i> Tambah</button>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="5%">No</th>
                          <th>Fakultas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        foreach ($fakultas as $row) : ?>
                        <tr>
                          <td style="text-align: center;"><?= $no++ ?>   </td>
                          <td><?= $row->fakultas_name; ?> </td>
                          <td style="text-align: center;">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aksi
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= site_url('tables/fakultas/prodi/' .  md5($row->fakultas_id)) ?>">Detail</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="return confirm('KONFIRMASI?')">Hapus</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
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

  

  <div class="modal fade" id="fakultas" tabindex="-1" role="dialog" aria-labelledby="fakultas" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title m-0 font-weight-bold text-primary" id="fakultas">Tambah Fakultas</h6>
        </div>
        <div class="modal-body">
          <form action="<?= site_url('tables/fakultas/simpan/tambah') ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="fakultas_name" name="fakultas_name" placeholder="Fakultas" autofocus="" autocomplete="off" required="">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>