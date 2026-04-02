<?= $this ->extend("layout/admin_template")?>

<?= $this->section("konten")?>
<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('/administrator') ?>">Home</a></li>
<li class="breadcrumb-item active"><?= $title ?></li>

             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card">
              <div class="card-header">
              <a type="button" href="<?= base_url('administrator/datapengguna/tambah') ?>" class="btn btn-info">
    <i class="fas fa-plus-circle"></i> Pengguna</a>
              </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama lengkap</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
  $no = 1;
  foreach ($tampildata as $row) {
    if ($row["status_aktif"] == 'Y') {
      $status = "<span class='badge badge-info'>Aktif</span>";
    } else {
      $status = "<span class='badge badge-danger'>Tidak Aktif</span>";
    }
?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama_lengkap'] ?></td>
      <td><?= $row['username'] ?></td>
      <td><?= $row['nm_level'] ?></td>
      <td><?= $status ?></td>
  <td>
  <a type="button" class="btn btn-warning btn-sm" href="<?= site_url("/administrator/datapengguna/edit/" . $row['id_user']) ?>"><i class="fas fa-pencil-alt"></i></a>
  <a type="button" class="btn btn-danger btn-sm" href="<?= site_url("/administrator/datapengguna/hapus/" . $row['id_user']) ?>"><i class="fas fa-trash"></i></a>
  <a type="button" class="btn btn-success btn-sm" href="<?= site_url("/administrator/datapengguna/uploadfoto/" . $row['id_user']) ?>"><i class="fas fa-image"></i></a>

    </tr>
<?php } ?>
</tbody>

                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            </div>

           
          </div>
          <!-- /.col-md-6 -->
      
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div> 
  <?= $this->endSection()?>
