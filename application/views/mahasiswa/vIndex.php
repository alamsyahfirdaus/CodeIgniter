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
          <h1 class="h4 mb-2 text-gray-800">Data Mahasiswa</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <?= $this->session->flashdata('message'); ?>
            <div class="card-header">
              <a class ="btn btn-primary" href="<?= site_url('tables/mahasiswa/insert')?>" style="text-decoration: none;"><i class="fas fa-user-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>NIM</th>
                      <th>Nama Lengkap  </th>
                      <th>Email</th>
                      <!-- <th>No. Handphone</th> -->
                      <th>Program Studi</th>
                      <!-- <th>Fakultas</th> -->
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                      <td><?= $row->nim; ?>   </td>
                      <td><?= $row->nama_lengkap; ?> </td>
                      <td><?= $row->email; ?> </td>
                      <!-- <td><?= $row->no_handphone; ?> </td> -->
                      <td><?= $row->nama_program_studi; ?></td>
                      <!-- <td><?= $row->fakultas_name; ?></td> -->
                      <td style="text-align: center;">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= site_url('tables/mahasiswa/detail/' . md5($row->id)) ?>">Detail</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('tables/mahasiswa/update/' . md5($row->id)) ?>">Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('tables/mahasiswa/delete/' . $row->id) ?>" onclick="return confirm('KONFIRMASI?')">Hapus</a>
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