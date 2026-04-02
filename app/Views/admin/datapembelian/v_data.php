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
              <a type="button" href="<?= base_url('administrator/datapembelian/tambah') ?>" class="btn btn-info">
    <i class="fas fa-plus-circle"></i> Pembelian</a>
              </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                  <th>No</th>
                  <th>Tanggal Beli</th>
                    <th>No Faktur</th>
                    <th>Kode Barang</th>
                    <th>Harga Beli</th>
                    <th>Jumlah Beli</th>
                   
                 
                  </tr>
                  </thead>
                  <tbody>
                  <?php
  $no = 1;
  foreach ($tampildata as $row) {
    
?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['tgl_beli'] ?></td>
       <td><?= $row['no_faktur'] ?></td>
      <td><?= $row['kd_barang'] ?></td>
      <td><?= $row['hrg_beli'] ?></td>
      <td><?= $row['jlh_beli'] ?></td>

  <td>
  <a type="button" class="btn btn-warning btn-sm" href="<?= site_url("/administrator/datapembelian/edit/" . $row['id_beli']) ?>"><i class="fas fa-pencil-alt"></i></a>
  <a type="button" class="btn btn-danger btn-sm" href="<?= site_url("/administrator/datapembelian/hapus/" . $row['id_beli']) ?>"><i class="fas fa-trash"></i></a>
  

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
