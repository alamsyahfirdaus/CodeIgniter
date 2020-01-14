<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('templates/head'); ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('templates/navbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
<!--             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mahasiswa</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-gray-300" ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Program Studi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">13</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-reader fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fakultas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-university fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>


        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view('templates/footer'); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view('templates/scroll'); ?>

  <!-- Logout Modal-->
  <?php $this->load->view('templates/logout'); ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('templates/javascript'); ?>

</body>

</html>