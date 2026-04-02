<?= $this->extend("layout/admin_template") ?>

<?= $this->section("konten") ?>
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
                            <h3 class="card-title"><?= $title ?></h3>
                        </div>
                        <!--/.card-header-->
                        <?= form_open('administrator/datasupplier/simpandata') ?>
                        <?= csrf_field() ?>
                        
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama Supplier">Nama Supplier</label>
                                    <input type="text" class="form-control" name="xnamasupplier"required placeholder="Nama Supplier">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" name="xalamat" required placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="No Telp">No Telp</label>
                                    <input type="text" class="form-control" name="xnotelp" required placeholder="No Telp">
                                </div>
                                <div class="form-group">
                                    <label for="Nama Kontak">Nama Kontak</label>
                                    <input type="text" class="form-control" name="xkontak" required placeholder="Nama Kontak">
                                </div>
                               
                             
                           
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="simpan" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close()?>
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
<?= $this->endSection() ?>