<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Barang</div>
        </div>
        <div class="col-auto">
                <a href="<?= base_url('barang/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Barang
                    </span>
                </a>
            </div>
    <div class="ibox-body">
        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>ID Satuan</th>
                    <th>ID Jenis</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($barang as $b){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $b->id_barang ?></td>
                        <td><?php echo $b->nama_barang ?></td>
                        <td><?php echo $b->stok ?></td>
                        <td><?php echo $b->satuan_id ?></td>
                        <td><?php echo $b->jenis_id ?></td>
                        <td>
                        <a href="<?= base_url('barang/edit/') . $b->id_barang ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('assets') . $b->id_barang ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
                <?php } ?>
            </thead>
        </table>
    </div>
</div>