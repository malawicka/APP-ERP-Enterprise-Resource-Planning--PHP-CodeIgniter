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
                        <?= form_open('administrator/datapembelian/updatedata') ?>
                        <?= csrf_field() ?>

                        <div class="card-body">
                                <div class="form-group">
                                    <label for="Tanggal Beli">Tanggal Beli</label>
                                     <input type="date" class="form-control" name="xtglbeli" value="<?= $tgl_beli ?>"
required placeholder="Tanggal Beli">
                                </div>
                           
                                </div>
                                <div class="form-group">
                                    <label for="No Faktur">No Faktur</label>
                                    <input type="text" class="form-control" name="xnofaktur" value="<?= $no_faktur ?>"
required placeholder="No Faktur">
                                </div>
                                <div class="form-group">
                                    <label for="Kode Barang">Kode Barang</label>
                                    <input type="text" class="form-control" name="xkdbarang" value="<?= $kd_barang ?>"
required placeholder="Kode Barang">
                                </div>
                                <div class="form-group">
                                    <label for="Hrg Beli">Hrg Beli</label>
                                    <input type="text" class="form-control" name="xhrgbeli" value="<?= $hrg_beli ?>"
required placeholder="Hrg Beli">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="Jlh Beli">Jlh Beli</label>
                                    <input type="text" class="form-control" name="xjlhbeli" value="<?= $jlh_beli ?>"
required placeholder="Jlh Beli">
                                </div>
                            
                      
                               
                            
                             
                           
            </div>
            <!-- /.card-body -->
            

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
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