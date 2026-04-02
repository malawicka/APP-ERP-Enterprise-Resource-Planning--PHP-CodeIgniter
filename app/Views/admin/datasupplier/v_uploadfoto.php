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
                        <?= form_open_multipart('administrator/datapengguna/simpanfoto') ?>
                        <?= csrf_field() ?>
                        
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for="Nama Lengkap">Nama Lengkap</label>
                                    <input type="hidden" class="form-control" name="xiduser" value="<?= $id_user ?>">
                                    <input type="file" class="form-control" name="xfoto" required>


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