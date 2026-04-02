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
              <a type="button" href="<?= base_url('administrator/datasupplier/tambah') ?>" class="btn btn-info">
    <i class="fas fa-plus-circle"></i> Supplier</a>
              </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Nama Kontak</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
  $no = 1;
  foreach ($tampildata as $row) {
    
?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nm_supplier'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td><?= $row['no_telp'] ?></td>
      <td><?= $row['nm_kontak'] ?></td>
  <td>
  <a type="button" class="btn btn-warning btn-sm" href="<?= site_url("/administrator/datasupplier/edit/" . $row['id_supplier']) ?>"><i class="fas fa-pencil-alt"></i></a>
  <a type="button" class="btn btn-danger btn-sm" href="<?= site_url("/administrator/datasupplier/hapus/" . $row['id_supplier']) ?>"><i class="fas fa-trash"></i></a>
  

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
