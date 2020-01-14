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
          <h1 class="h4 mb-2 text-gray-800">Program Studi</h1>

          <!-- DataTales Example -->
          <div class="row">

            <div class="col-xl-7 col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Fakultas Ilmu Kesehatan</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="5%" >No</th>
                          <th>Program Studi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        foreach ($prodi as $row) : ?>
                        <tr>
                          <td style="text-align: center;"><?= $no++ ?>   </td>
                          <td><?= $row->nama_program_studi; ?> </td>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Program Studi</h6>
                </div>
                <div class="card-body">
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
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                  </form>
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

</body>

</html>