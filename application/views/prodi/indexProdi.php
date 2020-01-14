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
          <h1 class="h4 mb-2 text-gray-800">Program Studi</h1>
          <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prodi" data-whatever="@mdo"><i class="fas fa-plus"></i> Tambah</button>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr style="text-align: center;">
                          <th style="text-align: center;">No</th>
                          <th>Program Studi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        foreach ($prodi as $row) : ?>
                        <tr>
                          <td style="text-align: center;"><?= $no++ ?>   </td>
                          <td><?= $row->nama_program_studi; ?> </td>
                          <td style="text-align: center;">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aksi
                              </button>
                              <div class="dropdown-menu">
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
      </div>
      <?php $this->load->view('templates/footer.php'); ?>
    </div>
  </div>
  <?php $this->load->view('templates/scroll.php'); ?>
  <?php $this->load->view('templates/logout.php'); ?>
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