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
                    <div class="card-header">
                        <h3 class="card-title"><?= $title ?></h3>
                    </div>
                    <!--/.card-header-->

                    <?= form_open('administrator/datapembelian/simpandata') ?>
                    <?= csrf_field() ?>
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggalbeli">Tanggal Beli</label>
                            <input type="date" class="form-control" name="xtglbeli" required placeholder="Tanggal Beli">
                        </div>

                        <div class="form-group">
                            <label for="idsupplier">Id Supplier</label>
                            <input type="text" class="form-control" name="xidsupplier" required placeholder="Id Supplier">
                        </div>

                        <div class="form-group">
                            <label for="nofaktur">No Faktur</label>
                            <input type="text" class="form-control" name="xnofaktur" required placeholder="No Faktur">
                        </div>

                        <div class="form-group">
                            <label for="kodebarang">Kode Barang</label>
                            <input type="text" class="form-control" name="xkdbarang" required placeholder="Kode Barang">
                        </div>

                        <div class="form-group">
                            <label for="hrgbeli">Hrg Beli</label>
                            <input type="text" class="form-control" name="xhrgbeli" required placeholder="Hrg Beli">
                        </div>

                        <div class="form-group">
                            <label for="jlhbeli">Jlh Beli</label>
                            <input type="text" class="form-control" name="xjlhbeli" required placeholder="Jlh Beli">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <?= form_close() ?>

                    <!--/.card-body-->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<?= $this->endSection() ?>
