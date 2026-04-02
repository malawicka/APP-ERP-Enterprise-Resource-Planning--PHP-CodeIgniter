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
                        <?= form_open('administrator/databarang/simpandata') ?>
                        <?= csrf_field() ?>
                        
                        <div class="card-body">

                        <div class="form-group">
                                    <label for="Kode Barang">Kode Barang</label>
                                   <input type="text" class="form-control" name="xkodebarang"required placeholder="Kode Barang">
                                </div>
                                <div class="form-group">
                                    <label for="Nama Barang">Nama Barang</label>
                                   <input type="text" class="form-control" name="xnamabarang"required placeholder="Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="Satuan">Satuan</label>
                                    <input type="text" class="form-control" name="xsatuan"required placeholder="Satuan">
                                </div>
                                <div class="form-group">
                                    <label for="Hrg Beli">Hrg Beli</label>
                                    <input type="text" class="form-control" name="xhrgbeli"required placeholder="Hrg Beli">
                                </div>
                                <div class="form-group">
                                    <label for="Hrg Jual">Hrg Jual</label>
                                    <input type="text" class="form-control" name="xhrgjual"required placeholder="Hrg Jual">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="Stok Awal">Stok Awal</label>
                                    <input type="text" class="form-control" name="xstokawal"required placeholder="Stok Awal">
                                </div>
                                <div class="form-group">
                                    <label for="Terjual">Terjual</label>
                                    <input type="text" class="form-control" name="xterjual"required placeholder="Terjual">
                                </div>
                                <div class="form-group">
                                    <label for="Sisa Stok">Sisa Stok</label>
                                    <input type="text" class="form-control" name="xsisastok"required placeholder="Sisa Stok">
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