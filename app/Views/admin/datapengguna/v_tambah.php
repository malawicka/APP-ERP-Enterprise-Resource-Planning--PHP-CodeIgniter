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
                        <?= form_open('administrator/datapengguna/simpandata') ?>
                        <?= csrf_field() ?>
                        
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama Lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="xnamalengkap"required placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="email" class="form-control" name="xusername" required placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" name="xpassword" required placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label for="Level Akses">Level Akses</label>
                                    <select class="form-control" name="xlevel" required>
                                        <option value="">-- Pilih Level Akses--</option>
                                        <?php foreach ($level as $row) : ?>
                                            <option value="<?= $row['id_level'] ?>"><?= $row['nm_level'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Status Aktif">Status Aktif</label>
                                    <select class="form-control" name="xstatus" required>
                                        <option value="">-- Pilih Status--</option>
                                            <option value="Y">Aktif</option>
                                            <option value="T">Tidak Aktif</option>
                                      
                                    </select>
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